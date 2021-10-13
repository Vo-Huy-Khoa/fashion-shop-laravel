<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = "comments";
    public function product()
    {
        return $this-> belongsTo(product::class,'product_id','id');
    }

    public function user()
    {
        return $this-> belongsTo(User::class,'user_id','id');
    }
    
}
