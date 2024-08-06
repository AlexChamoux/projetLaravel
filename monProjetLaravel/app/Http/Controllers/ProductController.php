<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product-list');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product-details', ['product' => $product]);
    }

}
