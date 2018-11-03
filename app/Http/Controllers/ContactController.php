<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
	public function submit(Request $request) {
		$this->validate($request, [
			'name'		=>  'required',
			'email'		=>	'required',
			'message'	=>  'required'
		]);


		$message = new Contact;
		$message->name 		=	$request->input('name');
		$message->email 	=	$request->input('email');
		$message->message 	=	$request->input('message');

		$message->save();

		redirect()->to('/');
	}

}
