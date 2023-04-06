<x-layout>
    <x-setting heading="Create Movie">

        <form method="POST" action="/admin/movies" class="space-y-8">
            @csrf
            <x-form.input label="Movie Name [EN]" name="name[en]" error="name.en"/>
            <x-form.input label="Movie Name [KA]" name="name[ka]" error="name.ka"/>
            <x-form.button>Add Movie</x-form.button>
        </form>


    </x-setting>
</x-layout>
