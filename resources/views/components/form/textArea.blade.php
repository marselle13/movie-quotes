@props(['name','label','argument'])
<div>
    <label for="{{$name}}">{{$label}}</label>
    <textArea id="{{$name}}" name="{{$name}}" class="w-full p-4 rounded-md" rows="5" style="resize:none"></textArea>
    @error($argument)
    <p class="text-red-500 text-xs mt-5">{{$message}}</p>
    @enderror()
</div>
