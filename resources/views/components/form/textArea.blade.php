@props(['name','label'])
<div>
    <label for="{{$name}}">{{$label}}</label>
    <textArea id="{{$name}}" name="{{$name}}" class="w-full p-4 rounded-md" rows="5" style="resize:none"></textArea>
</div>
