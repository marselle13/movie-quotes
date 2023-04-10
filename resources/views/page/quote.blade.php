<x-layout>
    @if($quote)
        <x-landing :quote="$quote"/>
    @else
        <div class="mt-72">
            <h3 class="text-5xl text-gray-200 font-bold">{{trans('messages.no_quotes')}}</h3>
        </div>
    @endif
</x-layout>
