<?php

namespace yoda\Http\Controllers;

use yoda\Mail\Contact;
use yoda\Http\Requests\ContactRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(){
      // return 'la page Contact fonctionne';
      return view('contactForm');
    }

    public function store(ContactRequest $request){

      Mail::to('f.caillat@yodatech.fr')->send(new Contact($request->except('_token')));

      return view('validateContact');
    }
}
