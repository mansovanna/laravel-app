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

    public function login(){
        return view("AdminLTE.pages.examples.login");
    }

    public function register(){
        return view("AdminLTE.pages.examples.register");
    }
    public function adminRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:10|confirmed',
        ]);
        $data = $request->all();
        User::create($data);
        return redirect()->route('adminlogin');
    }

    public function stafflogin(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:10',
        ]);

       return User::create($data);


    }
}
