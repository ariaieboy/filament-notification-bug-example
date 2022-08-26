<?php

namespace App\Http\Middleware;

use Filament\Models\Contracts\FilamentUser;
use Illuminate\Http\Request;

class AuthenticateAdmin extends \Filament\Http\Middleware\Authenticate
{
    protected function authenticate($request, array $guards): void
    {
        $guardName = config('filament.auth.guard');
        $guard = $this->auth->guard($guardName);

        if (!$guard->check()) {
            $this->unauthenticated($request, $guards);
        }

        $this->auth->shouldUse($guardName);

        $user = $guard->user();
    }

}
