@php
    $address = \App\Models\Address::make($record->shipment->address);
@endphp
<x-filament::widget>
    <x-filament::card heading="آدرس">
        <div class="flex justify-between">
            <span>
                <x-fad-id-card class="h-5 w-5 ml-1 inline"/>
                نام گیرنده
            </span>
            <span>
                {{$address->present()->receiver_full_name}}
            </span>
        </div>
        <div class="flex justify-between">
            <span>
                <x-fad-phone class="w-5 h-5 ml-1 inline"/>
                شماره گیرنده
            </span>
            <span>
                {{$address->present()->receiver_phone}}
            </span>
        </div>
        <div class="flex justify-between gap-1">
            <span class="w-1/6 flex gap-2">
                <x-fad-address-card class="w-5 h-5 inline"/>
                آدرس
            </span>
            <span class="break-words text-end w-5/6">
                {{$address->present()->address}}
            </span>
        </div>
    </x-filament::card>
</x-filament::widget>
