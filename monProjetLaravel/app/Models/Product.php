<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'description', 'price', 'weight', 'discount', 'image', 'quantity', 'status', 'categories_id'];

    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product')
            ->withPivot('quantity');
    }
}
