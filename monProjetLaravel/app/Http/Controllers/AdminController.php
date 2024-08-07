<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $messages = [
            'name.required' => 'Le nom du produit est obligatoire.',
            'price.required' => 'Le prix du produit est obligatoire.',
            'price.min' => 'Le prix du produit ne peut pas être négatif.',
            ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|integer|min:0',
            'weight' => 'required|integer|min:0',
            'discount' => 'required|integer|min:0',
            'image' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'status' => 'required|integer|min:0',
            'categories_id' => 'required|integer|min:0',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->route('admin.create')
                ->withErrors($validator)
                ->withInput();
        }

        Product::create($validator->validated());

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('admin.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

//        dump($product);
        return view('admin.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'name.required' => 'Le nom du produit est obligatoire.',
            'price.required' => 'Le prix du produit est obligatoire.',
            'price.min' => 'Le prix du produit ne peut pas être négatif.',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|integer|min:0',
            'weight' => 'required|integer|min:0',
            'discount' => 'required|integer|min:0',
            'image' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'status' => 'required|integer|min:0',
            'categories_id' => 'required|integer|min:0',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->route('admin.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $product = Product::findOrFail($id);

        $product->update($validator->validated());

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
