<?php

namespace App\Http\Controllers\Eshop;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\Language;
use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    //
    public function index()
    {

        $menus = Menu::get();
        $languages = Language::get();
        $currencies = Currency::get();
        $wishs = session()->get('wishs', []);

        // dd($wishs );

        return view('eshop.pages.wishList.wish', compact('menus', 'languages', 'currencies','wishs'));
    }

    public function store($id)
    {
        $product = Product::find($id);
        $wishs = session()->get('wishs', []);

        if (isset($wishs[$id])) {
            unset($wishs[$id]);
        } else {
            $wishs[$id] = [
                'id' => $product->id,
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->discount > 0 ? $product->discount : $product->price,
                'image' => $product->image,
            ];
        }

        session()->put('wishs', $wishs);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    public function distroy($id)
    {
        $wishs = session()->get('wishs');

        if ($wishs && isset($wishs[$id])) {
            unset($wishs[$id]);
            session()->put('wishs', $wishs);
            return redirect()->back()->with('success', 'Product removed from cart successfully!');
        }
        return redirect()->back()->with('error', 'Product not found in cart.');
    }
}
