<x-layout>
    <x-setting heading="{{trans('messages.add_movie')}}">
        <form method="POST" action="{{route('movies.index')}}" class="space-y-8">
            @csrf
            <x-form.input label="{{trans('messages.movie_name')}} [EN]" name="name[en]" argument="name.en"/>
            <x-form.input label="{{trans('messages.movie_name')}} [KA]" name="name[ka]" argument="name.ka"/>
            <x-form.button>{{trans('messages.add_movie')}}</x-form.button>
        </form>
    </x-setting>
</x-layout>
