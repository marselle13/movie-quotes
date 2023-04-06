<?php

namespace App\Http\Requests\movie;

use Illuminate\Foundation\Http\FormRequest;

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
			'name.en' => 'required|unique:movies,name->en',
			'name.ka' => 'required|unique:movies,name->ka',
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
			'name.en' => 'Movie Name',
			'name.ka' => 'Movie Name',
		];
	}
}
