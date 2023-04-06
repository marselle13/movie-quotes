<x-layout>
    <x-setting heading="{{trans('messages.addMovie')}}">
        <form method="POST" action="/admin/movies" class="space-y-8">
            @csrf
            <x-form.input label="{{trans('messages.movieName')}} [EN]" name="name[en]" error="name.en"/>
            <x-form.input label="{{trans('messages.movieName')}} [KA]" name="name[ka]" error="name.ka"/>
            <x-form.button>{{trans('messages.addMovie')}}</x-form.button>
        </form>
    </x-setting>
</x-layout>
