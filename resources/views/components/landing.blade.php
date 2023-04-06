@props(['quote'])
<section class="text-white">
    <div class="mb-16">
        <img src="images/example.png" alt="img" class="mx-auto">
    </div>
    <div class="flex flex-col gap-32 text-center">
        <h2 class="text-5xl">{{$quote->quote}}</h2>
        <a href="/movie/{{$quote->movie->slug}}" class="text-5xl underline">{{$quote->movie->name}}</a>
    </div>
</section>
