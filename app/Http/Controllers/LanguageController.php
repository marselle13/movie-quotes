<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{
	public function setLanguage($locale): RedirectResponse
	{
		app()->setLocale($locale);
		session()->put('locale', $locale);
		return redirect()->back();
	}
}
