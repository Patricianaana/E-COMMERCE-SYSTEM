<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fiallable=
    [
        'category_name'
    ];
    
    public function Products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

}
