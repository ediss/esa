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
                
                $data = [
                    'name'          => $name,
                    'cover'         => $cover,
                    'email'         => $email,
                    'file'           => $file
                ];
        
                Mail::send(['text'=>'pages.mail-job'], $data, function($message) use ($data) {
                    $message->to('hr@egamingc.com', 'ESAGaming.it')->subject ($data['name'])->replyTo($data['email']);
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
        return view('pages.job-description', ['validator' => $validator]);
    }
}
