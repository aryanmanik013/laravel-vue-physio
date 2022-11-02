<?php
 
namespace App\Http\Controllers;
use App\Mail\MailNotify;
use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required|email'
        ]);
        $email = $data['email'];
 
        $body = [
            'name'=>$data['name'],
            'url_a'=>'https://www.gmailcom/'
        ];
 
        Mail::to($email)->send(new MailNotify($body));
        return back()->with('status','Mail sent successfully');;
    }
}