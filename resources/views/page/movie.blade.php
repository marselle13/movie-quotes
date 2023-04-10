<x-layout>
    <div class="space-y-12 max-w-[700px] w-full">
        <h2 class="text-5xl text-white ">{{$movie->name}}</h2>
        @if($movie->quote->count())
            <x-card :quotes="$movie->quote"/>
        @else
            <h3 class="text-5xl pt-48 text-gray-200 font-bold">{{trans('messages.no_quotes')}}</h3>
        @endif
    </div>
</x-layout>
