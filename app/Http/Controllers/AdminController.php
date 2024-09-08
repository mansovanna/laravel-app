<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    public function index()
    {
        return view("AdminLTE.index");
    }
    public function adminMenu(){
        return view("AdminLTE.menu");
    }
    public function login()
    {
        return view("AdminLTE.pages.examples.login");
    }

    public function register()
    {
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

        $compare = $request->except(["_token"]);

        if (auth()->attempt($compare)) {
            // Find information of user and create session id to cookie on the browser
            return redirect()->route('admin');
        }
        return redirect()->back()->withErrors(['message' => 'Invalid credential', "dataEmail" => $data["email"]]);
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('adminlogin');
    }
}
