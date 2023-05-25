<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'product';

    protected $primaryKey = 'id';

    public function image()
    {
        return $this->hasMany(ProductImage::class,'id_product');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'id_category');
    }

    public function related()
    {
        return $this->hasMany(Product::class,'id_category','id_category')->with(['image.media']);
    }
}
