<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        return view("AdminLTE.menu");
    }
    public function addmenu(){
        return view("AdminLTE.addmenu");
    }
}
