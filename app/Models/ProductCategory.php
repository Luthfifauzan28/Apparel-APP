<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'category_id'];

    // Relasi dengan produk
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

    // Relasi dengan kategori
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}

