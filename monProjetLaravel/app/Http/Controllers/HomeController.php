<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController
{
    public function index(){
        return View('homepage');
    }
}
