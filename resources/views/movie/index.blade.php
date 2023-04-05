<x-layout>
    @if($movie->count())
        <x-landing :name="$movie->name" :quote="$movie->quote->random()->quote" :slug="$movie->slug"/>
    @else
        <div class="mt-72">
            <h3 class="text-5xl">No Movies To Show.</h3>
        </div>
    @endif
</x-layout>
