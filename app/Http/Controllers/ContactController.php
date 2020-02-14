<?php

namespace App\Http\Controllers;
use Mail;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ContactController extends Controller {

    /**
     * GET contact view and sending mail in one f-on
     */
    public function index(Request $request) {
        $validator = null;
        if ($request->isMethod('post')) {
            
            $name           = $request->input('name');
            $company_name   = $request->input('company_name');
            $email          = $request->input('email');
            $subject        = $request->input('subject');
            $msg            = $request->input('message');

            $validator = Validator::make($request->all(), [
                'name'      =>  'required|',
                'email'     =>  'required|email',
                'message'   =>  'required|',
            ]);

            if ($validator->passes()){
                
                //check if user is bot
                $url = 'https://www.google.com/recaptcha/api/siteverify';
                $captchaData = [
                    'secret' => env('RECAPTCHA_V3_SECRET_KEY'),
                    'response' => $request->input('recaptcha')
                ];

                $options = [
                    'http' => [
                        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                        'method'  => "POST",
                        'content' => http_build_query(($captchaData))
                    ]
                ];

                $context    = stream_context_create($options);
                $result     = file_get_contents($url, false, $context);
                $resultJson = json_decode($result);

                dd($resultJson);

                if($resultJson->success != true) {
                    return back()->with('message', 'Bot!');
                }


                $data = [
                    'name'          => $name,
                    'company_name'  => $company_name,
                    'email'         => $email,
                    'subject'       => $subject,
                    'msg'           => $msg
                ];
        
                Mail::send(['text'=>'pages.mail'], $data, function($message) use ($data) {
                    $message->to('info@esagaming.it', 'ESAGaming.it')->subject ($data['subject'])->replyTo($data['email']);
                    $message->from($data['email'], $data['name'] );
                });
        
                Session::flash('success', "$name,  your message was successfully sent!");
                return redirect()->back();
            }
    
        }
        return view('pages.contact', ['validator' => $validator]);
    }



    public function test() {
        return view('pages.test-contact');
    }
}
