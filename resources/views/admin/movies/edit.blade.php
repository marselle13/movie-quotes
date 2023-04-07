<x-layout>
    <x-setting :heading="trans('messages.editMovie') . ': ' . $movie->name">
        <form method="POST" action="/admin/movies/{{$movie->id}}" class="space-y-8">
            @csrf
            @method('PATCH')
            <x-form.input label="{{trans('messages.movieName')}} [EN]" name="name[en]" argument="name.en" value="{{old('name.en',$movie->getTranslation('name','en'))}}"/>
            <x-form.input label="{{trans('messages.movieName')}} [KA]" name="name[ka]" argument="name.ka" value="{{old('name.ka',$movie->getTranslation('name','ka'))}}"/>
            <x-form.button>{{trans('messages.editMovie')}}</x-form.button>
        </form>
    </x-setting>
</x-layout>
