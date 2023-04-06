<x-layout>
    <x-setting heading="All Movies">
        <div>
            <div class="flex flex-col">
                <div class="py-2 align-middle inline-block min-w-full ">
                    @if($movies->count())
                        <div class="shadow overflow-y-scroll max-h-96 border-b border-gray-200 rounded-2xl">
                            <table class="divide-y divide-gray-200 w-full">
                                <tbody class="bg-white">
                                @foreach($movies as $movie)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200 w-full">
                                            <div class="flex items-center">
                                                <a href="/movies/{{$movie->slug}}"
                                                   class="text-sm leading-5 font-medium text-gray-900">{{$movie->name}}</a>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                            <a href="/admin/movies/{{$movie->id}}/edit"
                                               class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                            <form method="POST" action="/admin/movies/{{$movie->id}}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-gray-400 hover:text-gray-700">Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center">
                            <p class="pt-3">No Movies to Show</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </x-setting>
</x-layout>
