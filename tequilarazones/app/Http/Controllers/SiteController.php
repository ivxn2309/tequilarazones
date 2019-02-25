<?php

namespace App\Http\Controllers;

use DateTime;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Cookie;

class SiteController extends Controller
{
    public function home(Request $request)
	{
		setlocale(LC_ALL,"es_ES");
		date_default_timezone_set('America/Mexico_City');

		$stores = Store::all();

		if( $request && isset( $request->dob )) {
			$dob_str = $request->dob;
			/// Convert to english
			$search = array("Ene", "Abr", "Ago", "Dic");
			$replace = array("Jan", "Apr", "Aug", "Dec");
			$dob_str = str_replace($search, $replace, $dob_str);
			/// Set both dates
			$dob = DateTime::createFromFormat('M j, Y', $dob_str);
			$now = new DateTime('now');
			$now = $now->setTime(0, 0, 0, 0);
			/// Min 18 years old
			$goal = $now->modify('-18 year');

			if( (bool)($dob < $goal) ) {
				session([ 'agexxx' => 'valid' ]);
			}
			else {
				session([ 'agexxx' => 'invalid' ]);
			}
		}

		if( session()->has('agexxx') && session('agexxx') === 'valid' ) {
			return view('home')->with(['stores' => $stores]);
		}
		else if( session()->has('agexxx') ) {
			return view('age')->with([ 'error' => true ]);
		}
		else {
			return view('age');
		}
	}

	public function saveContact()
	{
		return view('thanks');
	}
}
