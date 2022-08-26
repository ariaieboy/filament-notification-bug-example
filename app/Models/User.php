<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Models\Contracts\HasName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser, HasName, HasAvatar
{
    use HasFactory;
    use Notifiable;
    use HasRoles;

    protected $guarded = ['id'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'birth_date' => 'datetime',
        'completed' => 'boolean',
    ];

    public function getFilamentName(): string
    {
        return (! is_null($this->first_name) and ! is_null(
            $this->last_name
            // @phpstan-ignore-next-line
        )) ? "{$this->first_name} {$this->last_name}" : '';
    }

    public function canAccessFilament(): bool
    {
        return $this->hasRole('admin');
    }

    public function getFilamentAvatarUrl(): ?string
    {
        return '/img/avatar.png';
    }

    public function getFullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
