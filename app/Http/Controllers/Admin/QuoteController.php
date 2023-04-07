<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\quote\StoreQuoteRequest;
use App\Http\Requests\quote\UpdateQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class QuoteController extends Controller
{
	public function index(): View
	{
		return view('admin.quotes.index', ['quotes' => Quote::latest()->get()]);
	}

	public function create(): View
	{
		return view('admin.quotes.create', ['movies' => Movie::all()]);
	}

	public function store(StoreQuoteRequest $request): RedirectResponse
	{
		Quote::create(
			[...$request->validated(), 'thumbnail' => $request->file('thumbnail')->store('thumbnails')]
		);
		return redirect()->route('quotes.index')->withSuccess(trans('messages.quoteCreated'));
	}

	public function edit(Quote $quote): View
	{
		return view('admin.quotes.edit', ['quote' => $quote, 'movies'=> Movie::all()]);
	}

	public function update(UpdateQuoteRequest $request, Quote $quote): RedirectResponse
	{
		$quote->update([...$request->validated(), 'thumbnail' => $request->file('thumbnail')?->store('thumbnails') ?? $quote->thumbnail]);
		return redirect()->route('quotes.index')->withSuccess(trans('messages.successEditQuote'));
	}

	public function destroy(Quote $quote): RedirectResponse
	{
		$quote->delete();
		return back()->withSuccess(trans('messages.successDeleteQuote'));
	}
}
