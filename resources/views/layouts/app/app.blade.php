<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','خرید اینترنتی لذت بخش') | راکولو</title>
    <livewire:styles/>
    @vite(['resources/css/app/app.css','resources/js/app/app.js'],'build/frontend')
    @include('hooks.beforeHead')
</head>
<body class="antialiased drawer" dir="rtl">
<input type="checkbox" class="drawer-toggle" id="top-menu-drawer">
<div class="drawer-content">
    @include('layouts.app.Components.header')
    <div class="container min-h-screen">
        {{$slot}}
    </div>
    @include('layouts.app.Components.footer')
</div>
<div class="drawer-side">
    <label for="top-menu-drawer" class="drawer-overlay"></label>
    <div class="p-4 w-full max-w-sm bg-base-100 text-base-content">
        <div class="prose flex justify-between">
            <h2 class="my-auto">
                دسته بندی محصولات
            </h2>
            <label for="top-menu-drawer" class="btn btn-ghost hover:bg-transparent btn-square hover:bg-transparent">
                <x-fad-xmark-large class="h-4 w-4"/>
            </label>
        </div>
        <div class="divider"></div>
        <div class="collapse collapse-arrow">
            <input type="checkbox"/>
            <div class="collapse-title text-xl font-medium">
                کامپیوتر و لوازم جانبی
            </div>
            <div class="collapse-content">
                <p>hello</p>
            </div>
        </div>
        <div class="collapse collapse-arrow">
            <input type="checkbox"/>
            <div class="collapse-title text-xl font-medium">
                کامپیوتر و لوازم جانبی
            </div>
            <div class="collapse-content">
                <p>hello</p>
            </div>
        </div>
    </div>
</div>
<livewire:scripts/>
@include('hooks.beforeBody')
</body>
</html>
