<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\View\View;

class PageController extends Controller
{
	public function quote(): View
	{
		$quote = Quote::when(Quote::count() > 0, fn ($quote) => $quote->inRandomOrder()->first());
		return view('page.quote', ['quote' => $quote]);
	}

	public function movie(Movie $movie): View
	{
		return view('page.movies', ['movies' => $movie]);
	}
}
