@props(['name','label','argument'])
<div>
    <label for="{{$name}}" {{$attributes->class(["text-lg uppercase pb-2"])}}>{{$label}}</label>
    <input name="{{$name}}"
           class="w-full rounded-md  p-4 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 " {{$attributes(['value' => old($argument)])}}>
    @error($argument)
    <p class="text-red-500 text-xs mt-5">{{$message}}</p>
    @enderror()
</div>
