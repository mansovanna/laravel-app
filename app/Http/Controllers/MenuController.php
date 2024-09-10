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

        // Attempt to create the menu
        $menu = Menu::create($data);

        if ($menu) {
            // If creation is successful, flash a success message
            return redirect()->route('addmenu')->with('success', 'Menu created successfully.');
        }

        // If creation fails, flash an error message (no need for else)
        return redirect()->route('addmenu')->with('error', 'Failed to create menu.');
    }



    public function destroy($id)
    {

        $menu = Menu::find($id);


        if ($menu->children()->count() > 0) {

            return redirect()->back()->with('error', 'You cannot delete this menu item because it has child items.');
        }


        $menu->delete();


        return redirect()->route('adminmenu')->with('success', 'Menu item deleted successfully.');
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        $menu->name = $request->input('name');
        $menu->parent_id = $request->input('parent_id');
        $menu->save();

        return redirect()->back()->with('success', 'Menu updated successfully.');
    }


}


