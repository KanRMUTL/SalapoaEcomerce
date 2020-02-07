<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';

    public function subOrder()
    {
        return $this->hasMany('App\SubOrder', 'product_id', 'product_id');
    }
}
