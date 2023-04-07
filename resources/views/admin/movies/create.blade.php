<x-layout>
    <x-setting heading="{{trans('messages.addMovie')}}">
        <form method="POST" action="{{route('movies.index')}}" class="space-y-8">
            @csrf
            <x-form.input label="{{trans('messages.movieName')}} [EN]" name="name[en]" argument="name.en"/>
            <x-form.input label="{{trans('messages.movieName')}} [KA]" name="name[ka]" argument="name.ka"/>
            <x-form.button>{{trans('messages.addMovie')}}</x-form.button>
        </form>
    </x-setting>
</x-layout>
