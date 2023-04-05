<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
	public function index()
	{
		$movies = Movie::has('quote', '>', 0)->get();

		$movie = $movies->when($movies->isNotEmpty(), fn ($movie) => $movie->random());

		return view('movie.index', ['movie' => $movie]);
	}
}
