<?php


namespace App\Helpers;


use App\Product;
use Illuminate\Http\Request;

class Cart
{
    public function getCartProducts()
    {
        $products = [];
        $cartItems = request()->session()->get('cart');

        if ($cartItems) {
            $products = Product::whereIn('id', $cartItems)->get();
        }

        return $products;
    }

    public function addToCart(Product $product)
    {
        $cartItems = [];

        if (request()->session()->has('cart')) {
            $cartItems = request()->session()->get('cart')->toArray();
        }

        if (!in_array($product->id, $cartItems)) {
            $cartItems[] = $product->id;
        }

        request()->session()->put('cart', collect($cartItems));

        return true;
    }

    public function removeFromCart(Product $product)
    {
        $cartItems = [];

        if (request()->session()->has('cart')) {
            $cartItems = request()->session()->get('cart')->toArray();
        }

        if (($key = array_search($product->id, $cartItems)) !== false) {
            unset($cartItems[$key]);
        }

        request()->session()->put('cart', collect($cartItems));

        return true;
    }
}
