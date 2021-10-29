<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oder_Detail extends Model
{
    use HasFactory;
    protected $table = "oder_details";

    public function oders()
    {
        return $this->belongsTo(Oder::class,'users_id','user_id');
    }
    public function shippings()
    {
        return $this->belongsTo(Shipping::class,'shipping_id','id');
    }




}
