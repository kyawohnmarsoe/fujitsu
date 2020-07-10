<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\SocialUser;
use App\Mail\NotifyMail;

class SocialLoginController extends Controller
{
    public function submitinfo(Request $request){
        $user = $request->all();
        
        // $existingUser = SocialUser::where('email', $user['email'])->first();
        // if($existingUser){
        //     return redirect('/thankyou');
        // }else { }
            SocialUser::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'phone' => $user['phone'],
                'subject' => $user['subject'],
            ]);
           
            \Mail::to('kohnmars@gmail.com')->send(new NotifyMail($user));
        
            return redirect('/thankyou');
       
    }

    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        return view('welcome', ['user' => $user]);
    }

    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback()
    {
            $user = Socialite::driver('facebook')->user();
            return view('welcome', ['user' => $user]);
    }
}
