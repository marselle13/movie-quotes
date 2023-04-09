@props(['quotes'])
<section class="space-y-12">
    @foreach($quotes as $quote)
        <div id={{$quote->id}}>
            @if(file_exists('storage/' . $quote->thumbnail))
            <img src="{{asset('storage/' . $quote->thumbnail)}}" alt="img"
                 class="w-[700px] h-[386px] bg-cover rounded-t-lg">
            @else
                <img src="{{$quote->thumbnail}}" alt="img"
                     class="w-[700px] h-[386px] bg-cover rounded-t-lg">
            @endif
            <div class="bg-white border-t-2 rounded-b-lg border-black px-4 py-8">
                <p>{{$quote->quote}}</p>
            </div>
        </div>
    @endforeach
</section>
