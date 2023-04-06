@props(['name','label','error'])
<div>
    <label for="{{$name}}" {{$attributes->class(["text-lg uppercase pb-2"])}}>{{$label}}</label>
    <input name="{{$name}}" required
           class="w-full rounded-md  p-4 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 " {{$attributes(['value' => old($name)])}}>
    @error($error)
        <p class="text-red-500 text-xs mt-5">{{$message}}</p>
    @enderror()
</div>
