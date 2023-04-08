<!doctype html>
<title>Quotes App</title>
@vite('resources/css/app.css')
<body>
<nav>
    <div class="flex h-20 items-center justify-center">
        <div>
            <div class="flex space-x-4">
                <a href="{{route('page.quote')}}"
                   class="text-gray-300 rounded-md hover:text-white  px-3 py-2 text-sm font-medium  hover:bg-gray-700  {{request()->is('/') ? "bg-gray-900" : ""}}"
                   aria-current="page">{{trans('messages.quote')}}</a>
                @guest
                    <a href="{{route('auth.loginPage')}}"
                       class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium {{request()->is('login') ? "bg-gray-900" : ""}}"> {{trans('messages.login')}}</a>
                @endguest
                @auth
                    <a href="{{route('movies.index')}}"
                       class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium {{request()->is('admin/movies') || request()->is('admin/quotes') ? "bg-gray-900" : ""}}">{{trans('messages.dashboard')}}</a>
                    <form method="POST" action={{route('auth.logout')}}>
                        @csrf
                        <button
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                            {{trans('messages.logout')}}
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>
<aside class="absolute top-[400px] left-[30px]">
    <div class="flex flex-col gap-4">
        <a href="{{ route('language.set', ['locale' => 'en']) }}"
           class="flex items-center justify-center border border-white text-2xl leading-7 font-medium rounded-full w-14 h-14  {{app()->getLocale() === 'en' ? 'bg-white text-black' : "text-white"}} ">en</a>
        <a href="{{ route('language.set', ['locale' => 'ka']) }}"
           class="flex items-center justify-center border border-white text-2xl leading-7 font-medium rounded-full w-14 h-14 {{app()->getLocale() === 'ka' ? 'bg-white text-black' : "text-white"}}">ka</a>
    </div>
</aside>
<main class="flex flex-col  items-center justify-center mt-20">
    {{$slot}}
</main>
<x-success/>
</body>
