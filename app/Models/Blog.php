<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table ="blogs";
    public function categories(){
        return $this->belongsTo(Category::class,'categories_id','id');
    }
}
