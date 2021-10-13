<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classify extends Model
{
    use HasFactory;
    protected $table = "classifies";

    public function category(): HasMany
    {
        return $this->hasMany(Category::class, 'category_id','id');
    }

    public function product()
    {
        return $this-> hasManyThrough(product::class,Category::class,'class_id','category_id','id');
    }

}
