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
				->withErrors(['password' => 'Your provided info is not correct']);
		}

		return redirect(route('admin.index'))->withSuccess('Welcome Back'
        );
	}
}
