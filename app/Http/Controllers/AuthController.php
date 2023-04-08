<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginAuthRequest;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
	public function login(LoginAuthRequest $request): RedirectResponse
	{
		if (!auth()->attempt($request->validated()))
		{
			return back()
				->withErrors(['password' => trans('messages.error_login')]);
		}

		return redirect(route('movies.index'))->withSuccess(
			trans('messages.success_login')
		);
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();
		return redirect(route('page.quote'))->withSuccess(trans('messages.success_logout'));
	}
}
