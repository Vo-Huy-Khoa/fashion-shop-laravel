<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    use HasFactory;
    protected $table = "oders";
    public function products()
    {
        return $this-> belongsTo(product::class,'product_id','id');
    }

    public function users()
    {
        return $this-> belongsTo(User::class,'user_id','id');
    }

    public function oder_details()
    {
        return $this->belongsTo(Oder_Detail::class,'users_id','user_id');
    }
}
