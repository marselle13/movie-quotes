@props(['heading'])
<div class=" max-w-6xl">
    <h1 class="text-lg font-bold mb-8 border-b pb-2 text-white border-b-gray-800">
        {{ $heading }}
    </h1>
    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-bold mb-6">Links</h4>
            <ul>
                <li>
                    <a href="{{route('movies.index')}}" class="{{request()->is('admin/movies') ? "text-white" : " "}}">All Movies</a>
                </li>
                <li>
                    <a href="{{route('movies.create')}}" class="{{request()->is('admin/movies/create') ? "text-white" : " "}}"
                    >Add Movie</a>
                </li>
            </ul>
        </aside>
        <main class="min-w-[700px]  border border-gray-200 p-4 rounded-xl bg-gray-300">
            {{$slot}}
        </main>
    </div>
</div>

