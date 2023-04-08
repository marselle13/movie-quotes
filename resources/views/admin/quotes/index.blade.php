<x-layout>
    <x-setting heading="{{trans('messages.allQuotes')}}">
        <div class="flex flex-col">
            <div class="py-2 align-middle inline-block min-w-full ">
                <x-quote-table :quotes="$quotes"/>
            </div>
        </div>
    </x-setting>
</x-layout>
