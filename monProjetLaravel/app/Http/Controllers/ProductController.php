<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller
{


    public function index(): View
    {
        $products = DB::select('select * from products');

        return view('product-list', ['products' => $products]);
    }

    public function show($id): View
    {
        $product = DB::select('select * from products where id = ?', [$id]);

        return view('product-details', ['product' => $product[0]]);
    }

}
