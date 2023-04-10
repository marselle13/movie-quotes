<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\movie\StoreMovieRequest;
use App\Http\Requests\movie\UpdateMovieRequest;
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

	public function show(Movie $movie): View
	{
		return view('page.movie', ['movie' => $movie]);
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
		return redirect()->route('movies.index')->withSuccess(trans('messages.movie_created'));
	}

	public function edit(Movie $movie): View
	{
		return view('admin.movies.edit', ['movie' => $movie]);
	}

	public function update(UpdateMovieRequest $request, Movie $movie): RedirectResponse
	{
		$movie->update($request->validated() + [
			'slug' => Str::slug($request->input('name.en')),
		]);
		return redirect()->route('movies.index')->withSuccess(trans('messages.success_edit_movie'));
	}

	public function destroy(Movie $movie): RedirectResponse
	{
		$movie->delete();
		return back()->withSuccess(trans('messages.success_delete_movie'));
	}
}
