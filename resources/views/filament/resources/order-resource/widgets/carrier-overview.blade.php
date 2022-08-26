<x-filament::widget>
    <x-filament::card heading="حامل">
        <div class="flex justify-between">
            <span>شرکت حامل

            </span>
            <span>
                {{$record->shipment->carrier->transporter}}
            </span>
        </div>

        <div class="flex justify-between">
            <span>
                نام حامل
            </span>
            <span>
                {{$record->shipment->carrier->title}}
            </span>
        </div>

        <div class="flex justify-between">
            <span>
                هزینه حامل
            </span>
            <span>
                {{$record->shipment->carrier->present()->price_type}}
            </span>
        </div>
        <div class="flex justify-between">
            <span>کد پیگیری

            </span>
            <span>
                {{$record->shipment->referral_code??'کد پیگیری ثبت نشده است'}}
            </span>
        </div>

    </x-filament::card>
</x-filament::widget>
