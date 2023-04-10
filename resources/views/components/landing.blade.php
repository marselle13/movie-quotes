@props(['quote'])
<section class="text-white max-w-7xl">
    <div class="mb-16">
        @if(file_exists('storage/' . $quote->thumbnail))
            <img src="{{asset('storage/' . $quote->thumbnail) }}" alt="img"
                 class="mx-auto w-[700px] h-[386px] bg-cover rounded-lg">
        @else
            <img src="{{$quote->thumbnail }}" alt="img"
                 class="mx-auto w-[700px] h-[386px] bg-cover rounded-lg">
        @endif
    </div>
    <div class="flex flex-col gap-32 text-center">
        <h2 class="text-5xl">{{$quote->quote}}</h2>
        <a href="{{route('page.movie',$quote->movie->slug)}}" class="text-5xl underline">{{$quote->movie->name}}</a>
    </div>
</section>
