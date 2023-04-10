<?php

namespace App\Http\Requests\movie;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateMovieRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
	 */
	public function rules(): array
	{
		return [
			'name.en' => ['required', Rule::unique('movies', 'name->en')->ignore($this->route('movie'))],
			'name.ka' => ['required', Rule::unique('movies', 'name->ka')->ignore($this->route('movie'))],
		];
	}

	public function attributes(): array
	{
		return [
			'name.en' => trans('messages.movie_name'),
			'name.ka' => trans('messages.movie_name'),
		];
	}
}
