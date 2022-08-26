<div>
    <button wire:click="{{isset($this->data['parent_id'])?('$set(\'data.category_id\','.$this->data['parent_id'].")"):'$set("data.category_id",null)'}}"
            class="inline-flex items-center justify-center gap-1 font-medium rounded-lg border transition-colors focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset filament-button dark:focus:ring-offset-0 h-9 px-4 text-sm text-gray-800 bg-white border-gray-300 hover:bg-gray-50 focus:ring-primary-600 focus:text-primary-600 focus:bg-primary-50 focus:border-primary-600 dark:bg-gray-800 dark:border-gray-600 dark:hover:border-gray-500 dark:text-gray-200 dark:focus:text-primary-400 dark:focus:border-primary-400 dark:focus:bg-gray-800 filament-page-button-action">
        <span class="flex items-center gap-1">
                <span>
                    انتخاب گروه قبلی
                </span>
        </span>

    </button>
</div>