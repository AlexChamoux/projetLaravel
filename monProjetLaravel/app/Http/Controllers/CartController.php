<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CartController
{
    public function index(): View
    {
        $products = DB::select('select * from products');

        return View('cart', ['products' => $products]);
    }
}
