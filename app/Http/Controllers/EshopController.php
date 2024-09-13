<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Currency;
use App\Models\Product;
use App\Models\Language;
use App\Models\Brand;
class EshopController extends Controller
{
    //

    public function index()
    {
        $menus = Menu::with(['children'])->where("parent_id", null)->get();
        $languages = Language::get();

        $products = Product::with('category')->get();
        $orderDir = "asc";
        
        $brands = Brand::get();
        if(request()->get('orderDir')){
            $orderDir = request()->get('orderDir');
        }
        // return $brands;

        $products = Product::with('category')->orderBy('price', $orderDir)->get();
        $currencies = Currency::get();

        return view('eshop.pages.home', compact('menus', 'products', 'languages', 'currencies', 'brands'));
    }

}
