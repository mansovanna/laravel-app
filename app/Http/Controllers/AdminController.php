<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view("AdminLTE.index");
    }

    public function login(){
        return view("AdminLTE.pages.examples.login");
    }

    public function adminLogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // return redirect()->intended('/home');
            return redirect()->route('admin');

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register(){
        return view("AdminLTE.pages.examples.register");
    }

    public function adminRegister(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        User::create($data);
    //    return redirect()->route('login');


    }
}
