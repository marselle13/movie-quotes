<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class MovieController extends Controller
{
	public function index()
	{
		return view('admin.movies.index');
	}

	public function create()
	{
        return view('admin.movies.create');
	}
}
