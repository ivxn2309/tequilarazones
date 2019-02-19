<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
	public function sendContactForm(Request $request) {
		try {
			Mail::to('contacto@tequilarazones.com')->send(new ContactForm($request));
			return redirect()->route('save_contact')->with(['data' => $request]);
		}
		catch (\Exception $e) {
			return redirect()->route('save_contact')->with(['error' => 'Hubo un error al intentar enviar tus datos.<br><small>Intenta nuevamente más tarde.</small>']);
		}
	}
}
