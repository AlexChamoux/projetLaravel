<?php
// Dans app/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::select('SELECT * FROM products');
        return view('product.index', ['products' => $products]);
    }

    public function listProductsSortedByName()
    {
        $products = DB::select('SELECT * FROM products ORDER BY name');
        return view('products_sorted_by_name', ['products' => $products]);
    }

    public function listProductsSortedByPrice()
    {
        $products = DB::select('SELECT * FROM products ORDER BY price ASC');
        return view('products_sorted_by_price', ['products' => $products]);
    }

    public function show($id)
    {
        $product = DB::select('SELECT * FROM products WHERE id = ?', [$id]);
        if (empty($product)) {
            abort(404); // Produit non trouvé, retourner une page 404
        }
        return view('product_detail', ['product' => $product[0]]);
    }
}