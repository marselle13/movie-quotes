<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\View\View;

class QuoteController extends Controller
{
	public function index(): View
	{
		$quote = Quote::when(Quote::count() > 0, fn ($quote) => $quote->inRandomOrder()->first());
		return view('quote.index', ['quote' => $quote]);
	}
}
