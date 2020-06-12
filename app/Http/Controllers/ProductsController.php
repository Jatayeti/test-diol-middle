<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('in_stock', 'desc')
            ->sort()
            ->paginate(10);

        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('products.product', compact('product'));
    }
}
