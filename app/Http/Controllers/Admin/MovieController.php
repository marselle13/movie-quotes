<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class MovieController extends Controller
{
	public function index(): View
	{
		return view('admin.movies.index', ['movies' => Movie::latest()->get()]);
	}

	public function create(): View
	{
		return view('admin.movies.create');
	}

	public function store(StoreMovieRequest $request): RedirectResponse
	{
		Movie::create($request->validated() + [
			'slug' => Str::slug($request->input('name.en')),
		]);
		return redirect()->route('movies.index')->withSuccess('Movie Created!');
	}

	public function destroy(Movie $movie): RedirectResponse
	{
		$movie->delete();
		return back()->withSuccess('Movie Deleted!');
	}
}
