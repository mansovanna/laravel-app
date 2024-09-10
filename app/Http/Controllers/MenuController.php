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
        // Validate the request data
        $request->validate([
            'parent_id' => 'nullable|integer|exists:menus,id',
            'name' => 'required|unique:menus,name'
        ]);

        // Retrieve data except the CSRF token
        $data = $request->except('_token');

        // Create the menu item
        $menu = Menu::create($data);
        return redirect()->route('adminmenu')->with('success', 'Menu item created successfully:' .' ' .$menu->name);
    }


    public function  edit($id)
    {

        $menu = Menu::find($id);

        if (!$menu) {
            return redirect()->route('adminmenu')->with('error', 'Menu item not found.');
        }
        $parents = Menu::where('parent_id')->get();

        return view('AdminLTE.updatemenu', compact('menu', 'parents'));


    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'parent_id' => 'nullable|integer|exists:menus,id',
            'name' => 'required|unique:menus,name,'
        ]);

        $menu = Menu::find($id);

        // Check if the menu item exists
        if (!$menu) {
            return redirect()->route('adminmenu')->with('error', 'Menu item not found.');
        }

        // Update the menu item
        $menu->update($request->except('_token'));

        // Redirect with a success message
        return redirect()->route('adminmenu')->with('success', 'Menu item updated successfully of: ' . ' ' . $menu->name);
    }


    public function destroy($id)
    {

        $menu = Menu::find($id);


        if ($menu->children()->count() > 0) {

            return redirect()->back()->with('error', 'You cannot delete this menu item because it has child items.' . ' ' . $menu->name);
        }


        $menu->delete();


        return redirect()->route('adminmenu')->with('success', 'Menu item deleted successfully of:' . ' ' . $menu->name);
    }
}
