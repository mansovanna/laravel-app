<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('AdminLTE.menu', compact('menus'));
    }
    public function addmenu()
    {
        $parents = Menu::where('parent_id', null)->get();
        return view("AdminLTE.addmenu", compact('parents'));
    }

    public function createMenu(Request $request)
    {
        $data = $request->except(["_token"]);
        Menu::create($data);
        return redirect()->route('addmenu');
    }
}
