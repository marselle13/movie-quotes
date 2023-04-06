<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class MovieController extends Controller
{
	public function index()
	{
		return view('admin.movies.index', ['movies' => Movie::all()]);
	}

	public function create()
	{
		return view('admin.movies.create');
	}
}
