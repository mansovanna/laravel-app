<?php

namespace App\Http\Controllers\Eshop;


use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\Language;
use App\Models\Menu;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {

        $menus = Menu::with(['children'])->where("parent_id", null)->get();
        $languages = Language::get();

        $products = Product::with('category')->get();
        $currencies = Currency::get();

        return view('eshop.pages.cart.cart_view', compact('menus','languages', 'products', 'currencies'));
    }

    //
    // Add to cart
    public function addToCart($id)
    {
        $product = Product::find($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->discount > 0 ? $product->discount : $product->price,
                'image' => $product->image,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    // Update cart
    public function updateCart(Request $request)
    {
        $cart = session()->get('cart');

        if ($cart && isset($cart[$request->id])) {
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Cart updated successfully!');
        }

        return redirect()->back()->with('error', 'Product not found in cart.');
    }

    // Remove from cart
    public function remove($id)
    {
        $cart = session()->get('cart');

        if ($cart && isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product removed from cart successfully!');
        }

        return redirect()->back()->with('error', 'Product not found in cart.');
    }


    public function update(Request $request, $id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->input('quantity');
            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Cart updated successfully!');
        }

        return response()->json(['error' => 'Product not found'], 404);
    }



    public function  wishShow()
    {

        $languages = Language::get();
        $menus = Menu::with(['children'])->where("parent_id", null)->get();
        $products = Product::with('category')->get();
        $currencies = Currency::get();
        // Block Show Wishlist
        return view('eshop.pages.wishList.wish', compact('menus','languages', 'products', 'currencies'));
    }

}
