@props(['name','label'])
<div>
    <label for="{{$name}}" class="text-lg text-white uppercase">{{$label}}</label>
    <input name="{{$name}}" type="{{$name}}" required
           class="w-full rounded-md  p-4 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 ">
    @error($name)
        <p class="text-red-500 text-xs mt-5">{{$message}}</p>
    @enderror()
</div>
