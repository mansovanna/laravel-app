<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Currency;
use App\Models\Product;
use App\Models\Language;

class EshopController extends Controller
{
    public function index(Request $request)
    {
        // Get menus, languages, brands, and categories
        $menus = Menu::with(['children'])->where("parent_id", null)->get();
        $languages = Language::get();
        $brands = Brand::orderBy('name', 'ASC')->get();


        $categories = Category::orderBy('name', 'ASC')->get();
        $f_categories = $request->query('categories', ''); // Filter for categories
        $currencies = Currency::get();


        // Fetch products with their category relationship
        $orderDir = $request->query('orderDir', 'asc');
        $products = Product::with('category')->orderBy('price', $orderDir)->get();

        // Filter by brands
        $f_brands = $request->query('brands', '');
      

        // return explode(",",$f_brands);
        // Modify the products query to include brand and category filtering
        $products = Product::where(function ($query) use ($f_brands, $f_categories) {
            if ($f_brands) {
                $query->whereIn('brand_id', explode(',', $f_brands));
            }
            if ($f_categories) {
                $query->whereIn('category_id', explode(',', $f_categories));
            }
        })->with('category')->orderBy('price', $orderDir)->get();

        return view('eshop.pages.home', compact(
            'menus',
            'products',
            'languages',
            'currencies',
            'brands',
            'categories',
            'f_brands',
            'f_categories'
        ));
    }
}


// public function index()
// {
//     $menus = Menu::with(['children'])->where("parent_id", null)->get();
//     $languages = Language::get();
//     $brands = Brand::get();
//     $categories  = Category::get();

//     $products = Product::with('category')->get();
//     $orderDir = "asc";

//     $brands = Brand::get();
//     if(request()->get('orderDir')){
//         $orderDir = request()->get('orderDir');
//     }
//     // return $brands;

//     $products = Product::with('category')->orderBy('price', $orderDir)->get();
//     $currencies = Currency::get();

//     return view('eshop.pages.home', compact('menus', 'products', 'languages', 'currencies', 'brands', 'categories'));
// }

