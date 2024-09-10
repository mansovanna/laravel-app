<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
        $currencys = Currency::get();
        //dd($currencys);
        return view('AdminLTE.currency', compact('currencys'));

    }

    public function show()
    {
        return view('AdminLTE.currency.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Currency::create([
            'name' => $request->name
        ]);


        return redirect()->route('currency.index')->with('success', 'Currency created Successfully now!! of' . $request->name);
    }

    public function edit($id)
    {
        $currency = Currency::find($id);

        return view('AdminLTE.currency.update', compact('currency'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',  // Ensure the name is required and a string
        ]);

        // Find the currency by its ID
        $currency = Currency::find($id);

        // Check if the currency exists
        if (empty($currency)) {
            return redirect()->back()->with('error', 'Data not found!');
        }

        // Use the update method to update the currency
        $currency->update([
            'name' => $request->name,
        ]);

        // Redirect back to the currency index with a success message
        return redirect()->route('currency.index')->with('success', 'Currency updated successfully!');
    }




    //delete currency 
    public function destroy($id)
    {
        $currency = Currency::find($id);
        if (empty($currency)) {
            return redirect()->back()->with('error', 'Currency not found!');
        }

        $currency->delete();
        return redirect()->route('currency.index')->with('success', 'Currency deleted successfully!');
    }
}
