<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;

class Product extends Model
{

    protected $guarded = [];

    public function admin()
    {
       return $this->belongsTo(Admin::class);
    }


    public function order()
    {
       return $this->hasMany(Order::class);
    }
}
