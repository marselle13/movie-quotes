@props(['name','quote','slug'])
<section class="text-white">
    <div class="mb-16">
        <img src="images/example.png" alt="img" class="mx-auto">
    </div>
    <div class="flex flex-col gap-32 text-center">
        <h2 class="text-5xl">{{$quote}}</h2>
        <a href="/movie/{{$slug}}" class="text-5xl underline">{{$name}}</a>
    </div>
</section>
