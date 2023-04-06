<x-layout>
    @if($quote ->count())
        <x-landing :quote="$quote"/>
    @else
        <div class="mt-72">
            <h3 class="text-5xl">{{trans('messages.noQuotes')}}</h3>
        </div>
    @endif
</x-layout>
