<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
//        {
//            return view('product-list');
//        }
    {

        $products = DB::select('SELECT * FROM products');


        return view('product.index', ['products' => $products]);
    }
//
//    public function show($id)
//    {
//        return view('homepage', ['id' => $id]);
//    }

}
