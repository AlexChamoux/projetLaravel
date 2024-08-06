<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return View('homepage');
    }

//    public function about($id){
//
//        $data = Order::findOrFail($id);
//        dd('toto');
//        return View('about.about');
//    }

    public function productsByOrder($id)
    {
        $order = Order::with('products')->findOrFail($id);

        return View('about.about', compact('order'));
    }

    public function productsByOrderAndCategory($id)
    {
        $order = Order::with(['products.category'])->findOrFail($id);

        return View('about.about', compact('order'));
    }
}
