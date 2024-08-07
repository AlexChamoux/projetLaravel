<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
class HomeController
{
    public function index()
    {
//        try {
////            $data = DB::select('SELECT * FROM products'); sans utiliser un Model!!
//            // Log the data to see what is being retrieved
////            Log::info('Data retrieved from DB:', ['products' => Product::all()]);
//
//            return view('homepage', ['products' =>  Product::all()]);
//        } catch (\Exception $e) {
//            // Log the error message
//            Log::error('Error retrieving data from DB:', ['error' => $e->getMessage()]);
//
//            return view('homepage', ['data' => [], 'error' => $e->getMessage()]);
//        }
        $categories = Category::with('products')->get();
        $categorie = Category::with('products')->find(1);

        return view('homepage', ['categories' => $categories], ['categorie' => $categorie]);

    }
//    public function show_by_category(){
//
//
//    }

}
