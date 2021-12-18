<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Suppliers extends Eloquent

{
    use HasFactory;
    protected $table = 'suppliers';

    public function products() {
        return $this-> hasMany('App\Models\Products');
    }
}
