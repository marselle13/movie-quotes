@if($movies->count())
    <div class="shadow overflow-y-auto max-h-96 border-b border-gray-200 rounded-2xl">
        <table class="divide-y divide-gray-200 w-full">
            <tbody class="bg-white">
            @foreach($movies as $movie)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200 w-full">
                        <div class="flex items-center">
                            <a href="{{route('movies.show',$movie->slug)}}"
                               class="text-sm leading-5 font-medium text-gray-900">{{$movie->name}}</a>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                        <a href="{{route('movies.edit',$movie->id)}}"
                           class="text-indigo-600 hover:text-indigo-900">{{trans('messages.edit')}}</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                        <form method="POST" action="{{route('movies.update',$movie->id)}}">
                            @csrf
                            @method('DELETE')
                            <button class="text-gray-400 hover:text-gray-700">{{trans('messages.delete')}}
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
        <p>{{trans('messages.no_movies')}}</p>
    </div>
@endif
