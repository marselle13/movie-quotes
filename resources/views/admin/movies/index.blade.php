<x-layout>
    <x-setting heading="{{trans('messages.all_movies')}}">
            <div class="flex flex-col">
                <div class="py-2 align-middle inline-block min-w-full ">
                    <x-movie-table :movies="$movies"/>
                </div>
            </div>
    </x-setting>
</x-layout>
