<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index() {
        return view('frontend.contact.contact');
    }

    public function sendMessage(Request $request) {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
        return redirect()->back()->with('success', 'send is successfily');
    }
}
