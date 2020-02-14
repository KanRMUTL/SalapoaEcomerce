<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubOrder extends Model
{
    protected $table = 'sub_order';
    protected $primaryKey = 'sub_order_id';

    public function order()
    {
        return $this->belongsTo('App\Order', 'order_id', 'order_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id', 'product_id');
    }
}
