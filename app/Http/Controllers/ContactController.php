<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Mail;

use App\Mail\ContactoReceived;

use App\Contact;

use App\Mail\DemoMail;





use App\Http\Requests\CreateContactRequest;

class ContactController extends Controller
{
  
  public function index(){
  	return view('templates.contact');
  }


  	public function store(CreateContactRequest $request){


  		
  		
  		$contact = Contact::create($request->all());

    Mail::to('97morningstar@gmail.com')->send(new ContactoReceived($contact));

      return redirect()->route('contacto');
  	}


}
