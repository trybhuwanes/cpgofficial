<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    public function index() {
        return view('contactUsPage');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'company' => 'required',
            'phone' => 'required|digits:13|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->all());

        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);        // return redirect()->route('contact')->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
