<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','description','price','discount','discount_price','option','product_type','status'];
}
