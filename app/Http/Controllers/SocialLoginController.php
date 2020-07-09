<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\SocialUser;
class SocialLoginController extends Controller
{
    public function submitinfo(Request $request){
        $user = $request->all();
        $existingUser = SocialUser::where('email', $user['email'])->first();
        if($existingUser){
            // return redirect()->to('/thankyou');
            return view('thankyou');
        }else {
            SocialUser::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'phone' => $user['phone'],
            ]);
            // return redirect()->to('/thankyou');
            return view('thankyou');
        }


       
    }
    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        //  $user = Socialite::driver('google')->user();
         $user = Socialite::driver('google')->stateless()->user();
        //  dd($user);
        $existingUser = SocialUser::where('email', $user->email)->first();
        if($existingUser){
            // return redirect()->to('/thankyou');
            return view('thankyou');
        }else {
            SocialUser::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'social_id' => $user['id'],
            ]);
            // return redirect()->to('/thankyou');
            return view('thankyou');
        }
        
    }

    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback()
    {
         $user = Socialite::driver('facebook')->user();
        dd($user);

    }
}
