<?php

namespace App\Http\Controllers;
use Mail;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CareerController extends Controller
{
    public function index() {
        return view('pages.career');
    }

    public function jobDescription(Request $request) {

        $validator = null;
        $position  = $request->position;
        dd($position);
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'name'      =>  'required|',
                'email'     =>  'required|email',
                'resume'    =>  'required|',
            ]);

            if ($validator->passes()){
                $name   = $request->input('name');
                $email  = $request->input('email');
                $cover  = $request->input('cover');
                $file   = $request->file('resume');

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
                        'content' => http_build_query($captchaData)
                    ]
                ];

                $context    = stream_context_create($options);
                $result     = file_get_contents($url, false, $context);
                $resultJson = json_decode($result);


                if($resultJson->success != true) {
                    return back()->with('message', 'Bot!');
                }

                $data = [
                    'name'          => $name,
                    'cover'         => $cover,
                    'email'         => $email,
                    'file'          => $file,
                    'position'      => $position
                ];

                Mail::send(['html'=>'pages.mail-job'], $data, function($message) use ($data) {
                    $message->to('hr@egamingc.com', 'ESAGaming.it')->subject ($data['position'])->replyTo($data['email']);
                    $message->from($data['email'], $data['name'] );

                    $message->attach($data['file']->getRealPath(), array(
                            'as' => $data['file']->getClientOriginalName(), // If you want you can chnage original name to custom name
                            'mime' => $data['file']->getMimeType())
                    );
                });

                Session::flash('success', "$name,  Your job application has been submitted successfully! ");
                return redirect()->back();
            }

        }

        return view('pages.job-description', ['validator' => $validator, 'position' => $position]);
    }
}
