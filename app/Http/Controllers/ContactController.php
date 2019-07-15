<?php

namespace App\Http\Controllers;
use Mail;
use Session;
use Illuminate\Http\Request;

class ContactController extends Controller {

    public function index() {
        return view('pages.contact');
    }

    public function sendMail(Request $request) {
        $name           = $request->input('name');
        $company_name   = $request->input('company_name');
        $email          = $request->input('email');
        $subject        = $request->input('subject');
        $msg            = $request->input('message');


        $request->validate( [
            'name'      =>  'required|',
            'email'     =>  'required|email',
            'message'   =>  'required|',
        ]);

        $data = [
            'name'          => $name,
            'company_name'  => $company_name,
            'email'         => $email,
            'subject'       => $subject,
            'msg'           => $msg
        ];

        Mail::send(['text'=>'pages.mail'], $data, function($message) use ($data) {
            $message->to('thomas@esagaming.it', 'ESAGaming.it')->subject ($data['subject'])->replyTo($data['email']);
            $message->from($data['email'], $data['name'] );
        });

        Session::flash('success', "$name,  your message was successfully sent!");
        return redirect('/Contact-Us');
    }
}
