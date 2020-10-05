<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function productImages()
    {
    	return $this->hasMany('App\Models\ProductImage', 'product_id');
    }

    public function productCategories()
    {
        return $this->belongsTo('App\Models\ProductCategory');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }
}
