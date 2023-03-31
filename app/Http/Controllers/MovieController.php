<?php

namespace App\Http\Controllers;

class MovieController extends Controller
{
	public function index()
	{
		return view('quotes.index');
	}

	public function show()
	{
		return view('quotes.show');
	}
}
