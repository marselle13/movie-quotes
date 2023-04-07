<x-layout>
    <x-setting heading="{{trans('messages.addQuote')}}">
        <form action="POST" method="" class="space-y-8 mb-4">
            <x-form.textArea name="quote[en]" label="{{trans('messages.quote')}} [EN]"/>
            <x-form.textArea name="quote[ka]" label="{{trans('messages.quote')}} [KA]"/>
            <label for="select" class="hidden"></label>
            <select id="select" class="p-2 bg-white w-full rounded-md">
                <option selected disabled>{{trans('messages.movieName')}}</option>
                @foreach($movies as $movie)
                    <option value="{{$movie->id}}">{{$movie->name}}</option>
                @endforeach
            </select>
            <x-form.input type="file" name="thumbnail" label="{{trans('messages.image')}}" error="thumbnail"/>
        </div>
        <x-form.button>{{trans('messages.addQuote')}}</x-form.button>
    </x-setting>
</x-layout>
