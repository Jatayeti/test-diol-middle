<?php

namespace App\Http\Controllers;

use App\Helpers\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    public function index(Request $request)
    {
        $cart = new Cart;
        $products = $cart->getCartProducts();

        return view('cart.index', compact('products'));
    }

    public function toggle(Product $product)
    {
        $cart = new Cart;
        $cart->addToCart($product);

        return response()->json(true);
    }

    public function remove(Product $product)
    {
        $cart = new Cart;
        $cart->removeFromCart($product);

        return response()->json(true);
    }
}
