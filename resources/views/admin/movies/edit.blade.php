<x-layout>
    <x-setting :heading="'Edit Movie: '. $movie->name">
        <form method="POST" action="/admin/movies/{{$movie->id}}" class="space-y-8">
            @csrf
            @method('PATCH')
            <x-form.input label="Movie Name [EN]" name="name[en]" error="name.en" value="{{old('name[en]',$movie->getTranslation('name','en'))}}"/>
            <x-form.input label="Movie Name [KA]" name="name[ka]" error="name.ka" value="{{old('name[en]',$movie->getTranslation('name','ka'))}}"/>
            <x-form.button>Edit Movie</x-form.button>
        </form>

    </x-setting>
</x-layout>
