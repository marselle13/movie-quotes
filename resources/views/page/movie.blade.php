<x-layout>
    <div class="space-y-12 max-w-[700px] ">
        <h2 class="text-5xl text-white ">{{$movie->name}}</h2>
        <x-card :quotes="$movie->quote"/>
    </div>
</x-layout>
