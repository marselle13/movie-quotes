<?php

namespace App\Http\Requests\movie;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMovieRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
	 */
	public function rules(): array
	{
		return [
			'name.en' => ['required', Rule::unique('movies', 'name->en')],
			'name.ka' => ['required', Rule::unique('movies', 'name->ka')],
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
			'name.en' => trans('messages.movie_name'),
			'name.ka' => trans('messages.movie_name'),
		];
	}
}
