<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApparelSize extends Model
{
    use HasFactory;

    protected $primaryKey = 'size_id';
    protected $fillable = ['size_code', 'sort_order'];

    // Relasi dengan produk jika dibutuhkan di masa depan
    // public function products()
    // {
    //     return $this->belongsToMany(Product::class, 'product_sizes', 'size_id', 'product_id');
    // }
}
