<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('product-list', compact('products'));
    }

    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('product-details', compact('product'));
    }

}
