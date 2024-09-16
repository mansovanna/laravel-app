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
    //
    public function index(Request $request)
    {
        $menus = Menu::with(['children'])->where("parent_id", null)->get();
        $languages = Language::get();
        $brands = Brand::orderBy('name','ASC')->get();
        $categories  = Category::get();

        $products = Product::with('category')->get();
        $orderDir = "asc";

        $f_brands = $request->query('brands');

        if(request()->get('orderDir')){
            $orderDir = request()->get('orderDir');
        }
        // return $brands;

        $products = Product::where(function($query) use ($f_brands){
			$query->whereIn('brand_id',explode(',',$f_brands))->orWhereRaw("'".$f_brands."' = ''");
		})->with('category')->orderBy('price', $orderDir)->get();
        $currencies = Currency::get();

        return view('eshop.pages.home', compact('menus', 'products', 'languages', 'currencies', 'brands', 'categories','brands', 'f_brands'));
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

}
