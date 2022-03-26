<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\User;
use Carbon\Carbon;
use Session;


class LoginController extends Controller
{
   
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
        $this->middleware('guest')->except([
            'logout',
            'locked',
            'unlock'
        ]);
    }

    public function login()
    {

    return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'IDnum' => 'required|string',
            'password' => 'required|string',
        ]);

        $IDnum    = $request->IDnum;
        $password = $request->password;
        
        $dt         = Carbon::now();
        $todayDate  = $dt->toDayDateTimeString();

      
        
        if (Auth::attempt(['IDnum'=>$IDnum,'password'=>$password])) {
            return redirect()->intended('home');
        } else{
            return redirect('login');
        }

    }

    public function logout()
    {
        $user = Auth::User();
        Session::put('user', $user);
        $user=Session::get('user');

       
        Auth::logout();
        return redirect('login');
    }



}
