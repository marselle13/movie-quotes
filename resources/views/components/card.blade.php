@props(['quotes'])
<section class="max-w-[700px]">
    @foreach($quotes as $quote)
        <div id={{$quote->id}}>
            <img src="/images/example.png">
            <div class="bg-white border-t-2 rounded-b-lg border-black px-4 py-8">
                <p>{{$quote->quote}}</p>
            </div>
        </div>
    @endforeach
</section>
