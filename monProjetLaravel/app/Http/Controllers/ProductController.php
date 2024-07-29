<?php

namespace App\Http\Controllers;

class ProductController
{
    public function index(){
        return View('product-list');
    }

    public function show($id){
        return View('product-details', ['id' => $id]);
    }

}
