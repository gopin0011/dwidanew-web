<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'product';

    public function image()
    {
        return $this->hasMany(ProductImage::class,'id_product');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'id_category');
    }
}
