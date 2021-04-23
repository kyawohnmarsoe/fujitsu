<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\SocialUser;
use App\Mail\NotifyMail;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class SocialLoginController extends Controller
{
    public function submitinfo(Request $request){
        $user = $request->all();
        
        // $existingUser = SocialUser::where('email', $user['email'])->first();
        // if($existingUser){
        //     return redirect('/thankyou');
        // }else { }
        
        if  ($user['subject'] == "2") {
            $sub = "A brand new air conditioner";
        }elseif  ($user['subject'] == "3") {
            $sub = "A replacement to my old unit";
        }else{
            $sub = "Not Specify";
        }
        
            SocialUser::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'phone' => $user['phone'],
                'subject' => $sub,
            ]);
           
            \Mail::to('contact@winfinity.com.sg')->cc('waiyin@lhm.com.sg')->send(new NotifyMail($user,$sub));
            
            //  \Mail::to('erica.ho@lhm.com.sg')->send(new NotifyMail($user,$sub));
            
            // dd($subject);
        
            return view('thankyou');
       
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

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
        // return User::all();
    }
}
