<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Products extends Eloquent
{
    use HasFactory;

    protected $table = "products";

    public function comments() {
        return $this-> hasMany('App\Models\Comments');
    }

    public function supplier() {
        return $this-> belongsTo('App\Models\Suppliers');
    }

}
