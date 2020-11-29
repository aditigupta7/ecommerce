<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = [];

    public function admin()
    {
       return $this->belongsTo(Admin::class);
    }
}
