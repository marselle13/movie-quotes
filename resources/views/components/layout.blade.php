<!doctype html>
<title>Quotes App</title>
@vite('resources/css/app.css')
<body>
<nav>

    <div class="flex h-20 items-center justify-center">
        <div>
            <div class="flex space-x-4">
                <a href="/" class="text-white text-gray-300 rounded-md px-3 py-2 text-sm font-medium  hover:bg-gray-700  {{request()->is('/') ? "bg-gray-900" : ""}}" aria-current="page">Quotes</a>

                <a href="/login"
                   class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium {{request()->getRequestUri() === '/login' ? "bg-gray-900" : ""}}">Log in</a>

            </div>
        </div>


    </div>
</nav>

<aside class="absolute top-[400px] left-[30px]">
    <div class="flex flex-col gap-4">
        <button  class="border border-white text-white  text-2xl leading-7 font-medium rounded-full w-14 h-14" >en</button>
        <button class="border border-white text-black  text-2xl leading-7 font-medium rounded-full bg-white w-14 h-14" >ka</button>
    </div>

</aside>
<main class="flex justify-center text-center mt-20">
    {{$slot}}
</main>

</body>
