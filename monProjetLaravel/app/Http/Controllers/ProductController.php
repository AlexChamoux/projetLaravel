<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(array $data = [])
    {
        $this->index($data);
    }
    public function index()
    {
        return view('product-list');
    }

    public function show($id)
    {
        return view('product-details', ['id' => $id]);
    }

}
