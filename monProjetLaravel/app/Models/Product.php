<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false; // it has to be false if you dont use timestamps such as created_at updated_at
    protected $fillable = [
        'name', 'description', 'price', 'weight', 'image', 'quantity', 'status', 'categories_id1', 'pointure'
    ];
}
