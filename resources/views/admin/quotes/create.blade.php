<x-layout>
    <x-setting heading="{{trans('messages.add_quote')}}">
        <form method="POST" action="{{route('quotes.index')}}" class="space-y-8 mb-4" enctype="multipart/form-data">
            @csrf
            <x-form.textArea name="quote[en]" label="{{trans('messages.quote')}} [EN]" argument="quote.en"/>
            <x-form.textArea name="quote[ka]" label="{{trans('messages.quote')}} [KA]" argument="quote.ka"/>
            <label for="select" class="hidden"></label>
            <select name="movie_id" id="select" class="p-2 bg-white w-full rounded-md">
                <option selected disabled>{{trans('messages.movie_name')}}</option>
                @foreach($movies as $movie)
                    <option value="{{$movie->id}}" {{old('movie_id') ? 'selected' : ''}}>{{$movie->name}}</option>
                @endforeach
            </select>
            @error('movie_id')
            <p class="text-red-500 text-xs mt-5">{{$message}}</p>
            @enderror()
            <x-form.input type="file" name="thumbnail" label="{{trans('messages.image')}}" argument="thumbnail"/>
            <x-form.button>{{trans('messages.add_quote')}}</x-form.button>
        </form>
    </x-setting>
</x-layout>
