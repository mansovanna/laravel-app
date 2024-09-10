<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\rc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{


    public function index()
    {
        //


        $products =  Product::with('category')->get();

        return view('AdminLTE.products', compact('products'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('AdminLTE.pages.products.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'quantity' => 'required',
            'description' => 'nullable',
        ]);



        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        $request->except(['_token']);


        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'discount' => $request->discount ?? 0,
            'category_id' => $request->category_id,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'image' => $imageName,
        ]);


        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        // $product = Product::find($id);

        // return view('AdminLTE.pages.products.update', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

        $product = Product::find($id);
        $categories = Category::all();

        return view('AdminLTE.pages.products.update', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)

    {

        // Find the existing product
        $product = Product::findOrFail($id);

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'category_id' => 'required',
            'quantity' => 'required',
            'description' => 'nullable',
        ]);



        // Initialize filename variable
        $filename = $product->image;

        // Handle the image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            $oldImagePath = public_path('images/' . $product->image);
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }

            // Store the new image
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
        }

        // Update the product
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'discount' => $request->discount ?? 0,
            'category_id' => $request->category_id,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'image' => $filename,
        ]);

        // Redirect back with a success message
        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $product = Product::findOrFail($id);


        $path_image = public_path('images/' . $product->image);


        if (File::exists($path_image)) {
            File::delete($path_image);
        }

        $product->delete();


        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
}
