<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'product_name',
        'product_price',
        'product_description',
        'product_category',
        'product_image'
    ];

    public function Categories()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
