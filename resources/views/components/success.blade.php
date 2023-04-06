@if(session() -> has("success"))
    <script>
        setTimeout(function () {
            document.querySelector('#message').setAttribute('class','hidden');
        }, 3000);
    </script>
    <div id="message" class="fixed bottom-3 right-3 bg-gray-900 text-white py-2 px-4 rounded-xl">
        <p>{{session('success')}}</p>
    </div>
@endif
