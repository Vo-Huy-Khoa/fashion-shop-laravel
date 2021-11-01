<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $table = "attributes";

    public function product_attribute()
    {
        return $this->hasMany(Product_Attribute::class,'attribute_id','id');
    }



}
