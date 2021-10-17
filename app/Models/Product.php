<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    public function categories(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function comment(){
        return $this->hasMany(comment::class,'product_id','id');
    }
}
