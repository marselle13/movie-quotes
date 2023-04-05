<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Contracts\View\View;

class MovieController extends Controller
{
	public function index(): View
	{
		$movies = Movie::has('quote', '>', 0)->get();

		$movie = $movies->when($movies->isNotEmpty(), fn ($movie) => $movie->random());

		return view('movie.index', ['movie' => $movie]);
	}

	public function show(Movie $movie): View
	{
		return view('movie.show', ['movie' => $movie]);
	}
}
