<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'number' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact();
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->subject = request('subject');
        $contact->number = request('number');
        $contact->message = request('message');

        $contact->save();


        return redirect()->route('home');
    }

    public function show(Contact $contact)
    {
        return view('contact.show', compact("contact"));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('dashboard');
    }
}
