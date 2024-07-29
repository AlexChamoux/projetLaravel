<?php

namespace App\Http\Controllers;

class ProductController
{
    public function index(){
        return 'Liste des produits';
    }

    public function show($id){
        return "Fiche du produit ".$id;
    }

}
