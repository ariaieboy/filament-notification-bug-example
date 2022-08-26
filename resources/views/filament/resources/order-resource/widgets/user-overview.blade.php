@php
    $user = $record->user;
@endphp
<x-filament::widget>
    <x-filament::card heading="مشتری">
        <div class="flex justify-between">
            <span>
                <x-fad-user class="w-5 h-5 inline ml-1"/>
                {{$user->getFilamentName()}}
            </span>
            <span>
                <a target="_blank" href="{{\App\Filament\Resources\UserResource::getUrl('edit',['record'=>$user])}}">
                    مشاهده مشخصات کاربر
                </a>
            </span>
        </div>
        <div class="flex justify-between">
            <span>
                <x-fad-phone class="w-5 h-5 ml-1 inline"/>
                شماره همراه :
            </span>
            <span>
                {{$user->phone->get()}}
            </span>
        </div>
        <div class="flex justify-between">
            <span>
                <x-fad-bags-shopping class="w-5 h-5 ml-1 inline"/>
                تعداد سفارشات
            </span>
            <span>
                {{$user->orders->count()}} عدد
            </span>
        </div>
    </x-filament::card>
</x-filament::widget>
