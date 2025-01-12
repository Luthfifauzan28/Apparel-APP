<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'color_id'];

    // Relasi dengan produk
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

    // Relasi dengan warna
    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id', 'color_id');
    }
}

