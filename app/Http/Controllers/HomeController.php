<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\SocialUser;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

         // $users = DB::table('social_users')->get();
        $users= SocialUser::orderBy('id','DESC')->paginate(20);

        return view('home', ['users' => $users]);
        
    }
}
