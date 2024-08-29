<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function register(){
        return view('register');
    }

    public function res_user(Request $request){
        $form=$request->validate([
            'name'=>'required',
            'email'=>['required',Rule::unique('users','email')],
            'password'=>'required|confirmed|min:6'
        ]);
        $otp=rand(100000,999999);
        $form["otp"]=$otp;
        $form["isverify"]=0;

        $user=User::create($form);
        Mail::to($user->email)->send(new WelcomeMail($user));
        return redirect()->route("sendotp",['email'=>$user->email])->with('message','Register successful.');
    }

    public function login(){
        return view('login');
    }

    public function loginverify(Request $request){
        $form=$request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $form["isverify"]=1;
        $user=Auth::attempt($form);
        if($user){
            return redirect('/')->with('message','Login successful');
        }
        return back()->withErrors("username",'Username or password is not correct');
    }

    public function verifyemail(Request $request,$email){
        $user=User::where("email","=",$email)->first();
        //dd($request->otp);
        if($request->otp==$user->otp){
            $user["isverify"]=1;
            $user->update();
            return redirect("/login")->with("message","successful");
        }
        return back()->withErrors("otp","otp is not correct");
    }

    public function otppage($email){
        return view("sendotp",[
            "email"=>$email
        ]);

    }

    public function destroy(Request $request)
    {
        // Log the user out
        Auth::logout();

        // Invalidate the user's session
        $request->session()->invalidate();

        // Regenerate the session token to prevent session fixation attacks
        $request->session()->regenerateToken();

        // Redirect the user to the login page or homepage
        return redirect('/login')->with('message', 'You have been logged out successfully.');
    }
}
