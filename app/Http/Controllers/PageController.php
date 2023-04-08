<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\View\View;

class PageController extends Controller
{
	public function quote(): View
	{
		return view('page.quote', ['quote' => Quote::inRandomOrder()->first()]);
	}

	public function movie(Movie $movie): View
	{
		return view('page.movie', ['movie' => $movie]);
	}
}
