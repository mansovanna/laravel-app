<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $datas = Brand::get();


        return view('AdminLTE.brands', compact('datas'));
    }

    public function show()
    {
        return view('AdminLTE.pages.brands.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:brands,name',
        ]);

        $data = $request->except(['_token']);

        $brand = Brand::create($data);

        if (empty($brand)) {
            return redirect()->back()->with('error', 'Data is not create now');
        }

        return redirect()->route('brand.index')->with('success', 'Brand created successfully now:' . ' ' . $brand->name);
    }


    public function edit($id)
    {
        $brand = Brand::find($id);

        // Check if the category exists
        if (!$brand) {
            return redirect()->back()->with('error', 'Brand not found.');
        }

        return view('AdminLTE.pages.brands.update', compact('brand'));

    }



    public function update(Request $request, $id)
    {
        $data = Brand::find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'You can\'n update data');
        }


        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $data->name = $request->input('name');

        $data->save();

        return redirect()->route('brand.index')->with('success', 'Brand updated successfully.' . ' ' . $data->name);

    }


    // public function destroy($id)
    // {
    //     $data = Brand::find($id);

    //     if (!$data) {
    //         return redirect()->back()->with('error', 'Not found data!!');
    //     }

    //     $data->delete();

    //     return redirect()->route('brand.index')->with('success', 'Category deleted successfully.' . ' ' . $data->name);
    // }
    public function destroy($id)
    {
        $data = Brand::find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'Data not found!');
        }

        try {
            $data->delete();
            return redirect()->route('brand.index')->with('success', 'Brand deleted successfully: ' . $data->name);
        } catch (\Illuminate\Database\QueryException $e) {
            // Check if the error code is for foreign key constraint violation
            if ($e->getCode() == 23000) {
                return redirect()->back()->with('error', "You can't delete this brand data due to a foreign key constraint!");
            }
            // Handle any other exceptions
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }


}
