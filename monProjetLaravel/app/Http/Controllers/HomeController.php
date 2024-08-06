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

    public function about(){
        $data = Order::all();

        return View('about.about', compact('data'));
    }
}
