<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WorkWithUsFormMail;
use App\Mail\ContactUsFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'names' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'company' => 'nullable|string',
            'project'=>'nullable|String',
            'additional'=>'nullable|String',
            'services' => 'nullable|array',
            'services.*' => 'string',
        ]);

        $data['services'] = $request->input('services', []);
        Mail::to('asktalantatrust@gmail.com')->send(new WorkWithUsFormMail($data));

        return back()->with('success', 'Message sent successfully!');
    }

        public function contact(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required|string',
        ]);

        Mail::to('asktalantatrust@gmail.com')->send(new ContactUsFormMail($data));

        return back()->with('success', 'Message sent successfully!');
    }


}
