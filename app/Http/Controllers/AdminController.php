<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFil;
use Intervention\Image\Facades\Image;
use Mail;
use Redirect;
use App\Mail\MailNotify;

class AdminController extends Controller
{

    // public function unique_user_id()
    // {
    //     $uuid = Str::uuid()->toString();
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('view_profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Adminuser=User::where("id", "=", Auth::user()->id)->get();
        $Adminusers=User::find($id);
        return view('edit_profile',compact('Adminuser', 'Adminusers'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request, $id)
    {

       
        // $this->validate($request, [
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);
       $admin=User::find($id);
       $admin->name = $request->get('name');
       $admin->gender = $request->get('gender');
       $admin->phone = $request->get('phone');
       $admin->street = $request->get('street');
       $admin->street_no = $request->get('street_no');
       $admin->postal_code = $request->get('postal_code');
       $admin->city = $request->get('city');
       $admin->country = $request->get('country');
       $admin->two_factor = $request->get('two_factor');
       $admin->image = $request->file('image')->store('');
     
       $request->image->move(public_path('images'), $admin->image);
      
       $admin->save();
       
       return redirect('/edit_profile/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function all_user(Request $request) {
        $users = User::all();
        return view('all_user',  compact('users'));
      }
      public function register_user(Request $request)
    {
        //dd($request->all());
           $users = User::all();
        $request->validate([
            'name' => 'required',
                'email' => 'required|email|unique:users',
                'role' => 'required',
                'password' => 'required|min:8|same:confirm_password',
                'confirm_password' => 'required|min:8'
         
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>implode(',',$request->role),
            'password'=>Hash::make($request->password)
        ]);
        $body = [
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>implode(',',$request->role),
            'password'=>$request->password,
            'url_a'=>'https://www.gmailcom/'
        ];
 
        Mail::to($request->email)->send(new MailNotify($body));
   
        return redirect()->route('all_user');
     } 

     public function  otpVerify(Request $request)
     {  
         
        $validated = $request->validate([
            'code_1' => 'required',
            'code_2' => 'required',
            'code_3' => 'required',
            'code_4' => 'required',
            'code_5' => 'required',
            'code_6' => 'required',
        ]);
        
         $code = $request["code_1"]."".$request["code_2"]."".$request["code_3"]."".$request["code_4"]."".$request["code_5"]."".$request["code_6"];

        $loggedUseremail = Auth::user()->email;
       
        $user =  User::select('*')->where('email',$loggedUseremail)
        ->get()->toArray();
 
         $otp = $user[0]["email_otp"];
 
         if($code == $otp)
         {
             User::where('email', '=', $loggedUseremail)->update([
                 'email_otp' => null,    
                 'email_otp_status' => '1'
             ]);
 
             return redirect()->route('home');
 
         }
 
         else
         {
            return Redirect::back()->withErrors(['msg' => 'YOU ENTERED WRONG OTP PLEASE CONFIRM']);
         }
     }
   
}
