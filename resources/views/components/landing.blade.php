@props(['name','quote'])
<section class="text-white">
    <div class="mb-16">
        <img src="images/example.png" alt="img" class="mx-auto">
    </div>

    <div class="flex flex-col gap-32 text-center">
        @if(app()->getLocale() == 'en')
        <h2 class="text-5xl">{{$quote}}</h2>
        <a href="/movie" class="text-5xl underline">{{$name}}</a>
        @endif
    </div>
</section>
