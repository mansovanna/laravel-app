<?php

namespace App\Http\Controllers;

use App\Models\language;
use Illuminate\Http\Request;

class languageController extends Controller
{
    public function index()
    {
        $language = language::get();
        return view('AdminLTE.language', compact('language'));

    }

    public function show()
    {
        return view('AdminLTE.language.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        language::create([
            'name' => $request->name
        ]);


        return redirect()->route('language.index')->with('success', 'language created Successfully now!! of' . $request->name);
    }

    public function edit($id)
    {
        $language = language::find($id);

        return view('AdminLTE.language.update', compact('language'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',  // Ensure the name is required and a string
        ]);

        // Find the currency by its ID
        $language = language::find($id);

        // Check if the currency exists
        if (empty($language)) {
            return redirect()->back()->with('error', 'Data not found!');
        }

        // Use the update method to update the currency
        $language->update([
            'name' => $request->name,
        ]);

        // Redirect back to the currency index with a success message
        return redirect()->route('language.index')->with('success', 'language updated successfully!');
    }


    public function destroy($id)
{
   
    $language = language::find($id);

  
    if (empty($language)) {
        return redirect()->back()->with('error', 'language not found!');
    }
    $language->delete();
    return redirect()->route('language.index')->with('success', 'language deleted successfully!');
}

}
