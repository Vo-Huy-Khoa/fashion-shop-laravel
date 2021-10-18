<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = "comments";
    public function products()
    {
        return $this-> belongsTo(product::class,'product_id','id');
    }

    public function users()
    {
        return $this-> belongsTo(User::class,'user_id','id');
    }
    
}
