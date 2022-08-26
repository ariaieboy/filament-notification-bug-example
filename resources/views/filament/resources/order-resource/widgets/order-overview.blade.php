<x-filament::widget>
    <x-filament::card heading="جزییات سفارش">
        <div class="flex justify-between">
            <span>
                <x-fad-fingerprint class="h-5 w-5 ml-1 inline"/>
                شناسه سفارش :
            </span>
            <span>
                {{$record->order_key}}
            </span>
        </div>
        <div class="flex justify-between">
            <span>
                <x-fad-cubes class="h-5 w-5 ml-1 inline"/>
                تعداد کل محصولات :
            </span>
            <span>
                {{$record->productVars->count()}}
            </span>
        </div>
        <div class="flex justify-between">
            <span>
                <x-fad-scanner-gun class="h-5 w-5 ml-1 inline"/>
                محصولات :
            </span>
            <span>
                {{$record->present()->total_products}}
            </span>
        </div>
        <div class="flex justify-between">
            <span>
                <x-fad-truck-fast class="h-5 w-5 ml-1 inline"/>
                ارسال :
            </span>
            <span>
                {{$record->present()->total_shipment}}
            </span>
        </div>
        <div class="flex justify-between">
            <span>
                <x-fad-file-invoice-dollar class="h-5 w-5 ml-1 inline"/>
                جمع کل :
            </span>
            <span>
                {{$record->present()->total_price}}
            </span>
        </div>

        <div class="flex justify-between">
            <span>
                <x-fad-money-bill-transfer class="h-5 w-5 ml-1 inline"/>
                جمع کل پرداختی:
            </span>
            <span>
                {{$record->present()->total_paid}}
            </span>
        </div>
    </x-filament::card>
</x-filament::widget>
