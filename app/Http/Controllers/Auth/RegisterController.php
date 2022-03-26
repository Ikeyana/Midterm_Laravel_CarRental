<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
   

    public function register()
    {
        return view('auth.register');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'IDnum'      => 'required|string|max:255',
            'name'     => 'required|string|max:255',
            'role'     => 'required|string|max:255',
            'password'  => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);


        User::create([
            'IDnum'      => $request->IDnum,
            'name'     => $request->name,
            'role'     => $request->role,
            'password'  => Hash::make($request->password),
        ]);
        return redirect('login');
    }
}
