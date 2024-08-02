<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Product;

class ProductController extends Controller
{


    public function index(): View
    {
//        $products = DB::select('select * from products');
        $products = Product::all();

        return view('product-list', ['products' => $products]);
    }

    public function show($id): View
    {
//        $product = DB::select('select * from products where id = ?', [$id]);
        $product = DB::table('products')->where('id', $id)->first();
        $product = Product::where('id', $id)->first();
//        dump($product);
        return view('product-details', ['product' => $product]);
    }

    public function productByName()
    {
        $products = Product::all()->sortBy('name');

        return view('productByName', ['products' => $products]);
    }

    public function productByPrice()
    {
        $products = Product::all()->sortBy('price');

        return view('productByPrice', ['products' => $products]);
    }

}
