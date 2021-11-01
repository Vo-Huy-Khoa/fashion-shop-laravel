<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Attribute extends Model
{
    use HasFactory;
    protected $table = "product_attributes";
    public function products()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function attributes()
    {
        return $this->belongsTo(Attribute::class,'attribute_id','id');
    }
}
