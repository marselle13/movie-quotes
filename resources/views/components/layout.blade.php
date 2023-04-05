<!doctype html>
<title>Quotes App</title>
@vite('resources/css/app.css')
<body>
<nav>
    <div class="flex h-20 items-center justify-center">
        <div>
            <div class="flex space-x-4">
                <a href="/"
                   class="text-gray-300 rounded-md hover:text-white  px-3 py-2 text-sm font-medium  hover:bg-gray-700  {{request()->is('/') ? "bg-gray-900" : ""}}"
                   aria-current="page">Quotes</a>
                @guest
                    <a href="/login"
                       class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium {{request()->is('login') ? "bg-gray-900" : ""}}">Log
                        in</a>
                @endguest
                @auth
                    <a href="/admin/movies"
                       class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium {{request()->is('admin/movies') ? "bg-gray-900" : ""}}">Dashboard</a>
                    <form method="POST" action={{route('auth.logout')}}>
                        @csrf
                        <button
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                            Log
                            Out
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>
<aside class="absolute top-[400px] left-[30px]">
    <div class="flex flex-col gap-4">
        <button class="border border-white  text-black text-2xl leading-7 font-medium rounded-full w-14 h-14 bg-white">
            en
        </button>
        <button class="border border-white   text-white text-2xl leading-7 font-medium rounded-full  w-14 h-14">ka
        </button>
    </div>
</aside>
<main class="flex flex-col  items-center justify-center mt-20">
    {{$slot}}
</main>
<x-success/>
</body>
