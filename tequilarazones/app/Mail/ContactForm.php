<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;
	protected $lead = null;

    /**
     * Create a new message instance.
     *
     * @return void
     */
	public function __construct(Request $request)
	{
		$this->lead = $request;
	}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact')->with(['lead' => $this->lead]);
    }
}
