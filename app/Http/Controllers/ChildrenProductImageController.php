<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChildrenProductImageController extends Controller
{
    //
    public function index ()
    {
        return view('AdminLTE.pages.products.children.image');
    }

    public function show()
    {
        return view('AdminLTE.pages.products.children.create');
    }

    public function store()
    {

    }


    public function edit()
    {
        return view('AdminLTE.pages.products.children.update');
    }

    public function update()
    {

    }


    public function destroy()
    {

    }
}
