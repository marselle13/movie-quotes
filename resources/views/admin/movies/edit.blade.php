<x-layout>
    <x-setting :heading="trans('messages.edit_movie') . ': ' . $movie->name">
        <form method="POST" action="{{route('movies.update',$movie->id)}}" class="space-y-8">
            @csrf
            @method('PATCH')
            <x-form.input label="{{trans('messages.movie_name')}} [EN]" name="name[en]" argument="name.en" value="{{old('name.en',$movie->getTranslation('name','en'))}}"/>
            <x-form.input label="{{trans('messages.movie_name')}} [KA]" name="name[ka]" argument="name.ka" value="{{old('name.ka',$movie->getTranslation('name','ka'))}}"/>
            <x-form.button>{{trans('messages.edit_movie')}}</x-form.button>
        </form>
    </x-setting>
</x-layout>
