<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Mail;
use session;
use Redirect;
use App\Mail\MailOtp;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request,[
 
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(auth()->attempt(array('email'=>$input['email'],'password'=>$input['password'])))
        {
            if(auth()->user()->role =='Admin' && auth()->user()->two_factor ==1 && auth()->user()->acc_status ==1 )
            {
                $code = rand(000000,999999);
                User::where('email', '=', auth()->user()->email)->update([
                    'email_otp' => $code, 
                    'email_otp_status' => '0'
                ]);
                   $body = [
                        'email_otp' => $code
                    ];
             
                    Mail::to($userEmail)->send(new MailOtp($body));
                    
                return redirect()->route('verify_otp');
            }
            else if(auth()->user()->acc_status ==0)
            {
                return redirect()->route('deactivate');
            }
            else
            {
                return redirect()->route('home');
            }

        }
        else
        {
            return Redirect::back()->withErrors(['msg' => 'YOU ENTERED WRONG OTP PLEASE CONFIRM']);
        }


    }

    public function verify_otp()
    {
        return view('auth.two_factor');
    }
    public function deactivate()
    {
        return view('auth.profiledeactivat');
    }
    public function deactivate_profile(Request $request)
    {   
        $request->validate([
            'password' => 'required',
                'agree' => 'required'
        ]);

        $users = User::where('email',auth()->user()->email,)->first();
        if($users){
            if (Hash::check($request->password,$users->password)){
                
                User::where('email', '=', auth()->user()->email)->update([
                    'acc_status' => '0', 
                    'agree' => $request->agree
                ]);
                Auth::logout();
                return view('auth.deactivate');
            }
            else
            {
                return Redirect::back()->withErrors(['msg' => 'Your  Pasword Not Matched']);
            }
           
        }
    }

}

