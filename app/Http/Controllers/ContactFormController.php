<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactFormController extends Controller
{
    public function createForm(Request $request) {
        return view('contact.contact');
    }
    public function contactForm(Request $request){
    $this->validate($request,[
        'username' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);
    Contact::create($request->all());

    return back()->with('success', __('contact.success'));
}

}
