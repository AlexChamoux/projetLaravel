<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->only(
            'name',
            'description',
            'price',
            'weight',
            'discount',
            'image',
            'quantity',
            'status',
            'categories_id'));

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);

        return view('admin.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);

//        dump($product);
        return view('admin.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
//    public function update(Request $request, string $id)
//    {
//        $product = Product::find($id);
//        $data = [
//            'name' => $request->input('name'),
//            'description' => $request->input('description'),
//            'price' => $request->input('price'),
//            'weight' => $request->input('weight'),
//            'discount' => $request->input('discount'),
//            'image' => $request->input('image'),
//            'quantity' => $request->input('quantity'),
//            'status' => $request->input('status'),
//            'categories_id' => $request->input('categories_id'),
//];
//        $product->update($data);
//
//        return redirect()->route('admin.index');
//    }

    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        $product->update($request->only(
            'name',
            'description',
            'price',
            'weight',
            'discount',
            'image',
            'quantity',
            'status',
            'categories_id'));

        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('admin.index');
    }
}
