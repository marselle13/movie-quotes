<?php

namespace App\Http\Requests\quote;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreQuoteRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
	 */
	public function rules(): array
	{
		return [
			'quote.en'  => ['required', Rule::unique('quotes', 'quote->en')],
			'quote.ka'  => ['required', Rule::unique('quotes', 'quote->ka')],
			'movie_id'  => ['required', Rule::exists('movies', 'id')],
			'thumbnail' => ['required', 'image'],
		];
	}

	/**
	 * Get custom attributes for validator errors.
	 *
	 * @return array<string, string>
	 */
	public function attributes(): array
	{
		return [
			'quote.en'  => trans('messages.quote'),
			'quote.ka'  => trans('messages.quote'),
			'movie_id'  => 'Movie Name',
			'thumbnail' => 'Image',
		];
	}
}
