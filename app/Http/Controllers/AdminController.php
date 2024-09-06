<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view("AdminLTE.index");
    }

    public function adminLogin(){
        return view("AdminLTE.pages.examples.login");
    }
    public function login(Request $request) {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function register(){
        return view("AdminLTE.pages.examples.register");
    }
    public function adminRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);
        $data = $request->all();
        User::create($data);
        return redirect()->route('adminLogin');
    }



}
