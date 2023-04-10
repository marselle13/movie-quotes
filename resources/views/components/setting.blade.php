@props(['heading'])
<div class=" max-w-6xl">
    <h1 class="text-lg font-bold mb-8 border-b pb-2 text-white border-b-gray-800">
        {{ $heading }}
    </h1>
    <div class="flex gap-12">
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-bold mb-6 text-3xl text-gray-300">{{trans('messages.links')}}</h4>
            <ul>
                <li>
                    <a href="{{route('movies.index')}}"
                       class="font-bold text-lg hover:text-white tracking-wide {{request()->is('admin/movies') ? "text-white" : "text-gray-400"}}">{{trans('messages.all_movies')}}</a>
                </li>
                <li>
                    <a href="{{route('quotes.index')}}"
                       class="font-bold text-lg hover:text-white tracking-wide {{request()->is('admin/quotes') ? "text-white" : "text-gray-400"}}">{{trans('messages.all_quotes')}}</a>
                </li>
                <li>
                    <a href="{{route('movies.create')}}"
                       class="font-bold text-lg hover:text-white tracking-wide {{request()->is('admin/movies/create') ? "text-white" : "text-gray-400"}}"
                    >{{trans('messages.add_movie')}}</a>
                </li>
                <li>
                    <a href="{{route('quotes.create')}}"
                       class="font-bold text-lg hover:text-white tracking-wide {{request()->is('admin/quotes/create') ? "text-white" : "text-gray-400"}}"
                    >{{trans('messages.add_quote')}}</a>
                </li>
            </ul>
        </aside>
        <main class="min-w-[700px]  border border-gray-200 p-4 rounded-xl bg-gray-300 h-full">
            {{$slot}}
        </main>
    </div>
</div>

