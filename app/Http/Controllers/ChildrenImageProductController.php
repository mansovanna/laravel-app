<?php

namespace App\Http\Controllers;

use App\Models\ChildrenImageProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class ChildrenImageProductController extends Controller
{
    // Display a list of all children images
    public function index()
    {
        $childImages = ChildrenImageProduct::all();
        return view('AdminLTE.pages.products.children.children', compact('childImages'));
    } 

    // Show the form for creating a new child image
    public function create()
    {

        $products = Product::get();
        return view('AdminLTE.pages.products.children.create', compact('products'));
    } 

    // Store a newly created child image in the database
    public function store(Request $request)
    {
        $request->validate([
            'image_url' => 'required|url',
        ]);

        ChildrenImageProduct::create([
            'image_url' => $request->input('image_url'),
            'product_id' => $request->input('product_id'),  // Ensure product_id is passed
        ]);

        return redirect()->route('children_image_product.index')
                         ->with('success', 'Image added successfully!');
    }

    // Show the form for editing a specific child image
    public function edit($id)
    {
        $image = ChildrenImageProduct::findOrFail($id);
        return view('AdminLTE.pages.products.children.children.update', compact('image'));
    }

    // Update the specified child image in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'image_url' => 'required|url',
        ]);

        $image = ChildrenImageProduct::findOrFail($id);
        $image->update([
            'image_url' => $request->input('image_url'),
        ]);

        return redirect()->route('children_image_product.index')
                         ->with('success', 'Image updated successfully!');
    }

    // Remove the specified child image from the database
    public function destroy($id)
    {
        $image = ChildrenImageProduct::findOrFail($id);
        $image->delete();

        return redirect()->route('children_image_product.index')
                         ->with('success', 'Image deleted successfully!');
    }
}
