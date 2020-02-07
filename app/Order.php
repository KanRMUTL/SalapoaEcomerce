<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'order_id';

    public function subOrder()
    {
        return $this->hasMany('App\Suborder', 'order_id', 'order_id');
    }
}
