@props(['quote'])
<section class="text-white max-w-7xl">
    <div class="mb-16">
        <img src="{{asset('storage/' . $quote->thumbnail)}}" alt="img" class="mx-auto w-[700px] h-[386px] bg-cover rounded-lg">
    </div>
    <div class="flex flex-col gap-32 text-center">
        <h2 class="text-5xl">{{$quote->quote}}</h2>
        <a href="/movies/{{$quote->movie->slug}}" class="text-5xl underline">{{$quote->movie->name}}</a>
    </div>
</section>
