@if(config('app.debug')===true)
    @vite(['resources/js/clockwork.js'],'build/filament')
@endif
