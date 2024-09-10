<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\language;

class languagecontroller extends Controller
{
    //
    public function showlanguagePage()
    {
        $languages = language::all();
        return view("AdminLTE.language", compact('languages'));
    }
    public function showaddlanguage()
    {
        return view("AdminLTE.AddLanguage");
    }
    public function createlanguage(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:language,name'
        ]);

        $data = $request->except('_token');

        $language = language::create($data);
        return redirect()->route('adminlanguage')->with('success', 'Language item created successfully:' . ' ' . $language->name);
    }
    public function  showeditlanguage($id)
    {

        $language = language::find($id);

        if (!$language) {
            return redirect()->route('adminmenu')->with('error', 'Language item not found.');
        }
        return view('AdminLTE.EditLanguage', compact('language','id'));
    }
    public function editlanguage(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|unique:language,name,'
        ]);

        $language = language::find($id);

        // Check if the language item exists
        if (!$language) {
            return redirect()->route('adminlanguage')->with('error', 'Language item not found.');
        }

        // Update the menu item
        $language->update($request->except('_token'));

        // Redirect with a success message
        return redirect()->route('adminlanguage')->with('success', 'Language item updated successfully of: ' . ' ' . $language->name);
    }
    public function deletelanguage($id)
    {

        $language = language::find($id);

        if (!$language) {

            return redirect()->back()->with('error', 'Language Not Found' . ' ' . $language->name);
        }

        $language->delete();

        return redirect()->route('adminlanguage')->with('success', 'Language item deleted successfully of:' . ' ' . $language->name);
    }
}
