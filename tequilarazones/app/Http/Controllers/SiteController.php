<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    public function home()
	{
		return view('home')->with([ ]);
	}

	public function saveContact()
	{
		return view('thanks');
	}
}
