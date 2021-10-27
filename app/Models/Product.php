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
    public function comments(){
        return $this->hasMany(comment::class,'product_id','id');
    }

    public function sizes()
    {
        return $this->belongsTo(Size::class,'size','id');
    }
    public function colors()
    {
        return $this->belongsTo(Color::class,'color','id');
    }

    public function brands()
    {
        return $this->belongsTo(Brand::class,'brand','id');
    }

 
    // public function properties()
    // {
    //     return $this->belongsTo(Properties::class,'properties_id','id');
    // }
}
