<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index()
    {
        $datas = Category::get();


        return view('AdminLTE.categorys', compact('datas'));
    }

    public function show()
    {
        return view('AdminLTE.pages.categorys.create');
    }



    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required|string|max:255|unique:categories,name',
        'description' => 'nullable|string',
        ]);

        $data = $request->except(['_token']);

        $category = Category::create($data);

        if(empty($category)){
            return redirect()->back()->with('error', 'Data is not create now');
        }

        return redirect()->route('category.index')->with('success', 'Categories created successfully now:' .' '. $category->name);
    }


    public function edit($id)
    {
        $category = Category::find($id);

        // Check if the category exists
        if (!$category) {
            return redirect()->back()->with('error', 'Category not found.');
        }

        return view('AdminLTE.pages.categorys.update', compact('category'));

    }



    public function update(Request $request, $id)
    {
        $data = Category::find($id);

        if(!$data){
            return redirect()->back()->with('error', 'You can\'n update datt');
        }


        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $data->name = $request->input('name');
        $data->description = $request->input('description');

        $data -> save();

        return redirect()->route('category.index')->with('success', 'Category updated successfully.'.' '. $data->name);

    }


    public function destroy($id)
    {
        $data = Category::find($id);

        if(!$data){
            return redirect()->back()->with('error', 'Not found data!!');
        }

        $data->delete();

        return redirect()->route('category.index')->with('success', 'Category deleted successfully.'.' '. $data->name);
    }
}
