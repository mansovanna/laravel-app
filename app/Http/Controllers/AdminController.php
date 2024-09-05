<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        return view("AdminLTE.index");
    }

    public function login(){
        return view("AdminLTE.pages.examples.login");
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

       return User::create($data);


    }
}
