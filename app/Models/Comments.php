<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Comments extends Eloquent
{
    protected $table = 'comments';

    use HasFactory;

    public function user() {
        return $this -> belongsTo('App\Models\User');
    }

    public function product() {
        return $this-> belongsTo ('App\Models\Products');
    }
}
