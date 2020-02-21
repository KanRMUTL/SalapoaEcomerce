<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    public $fillable = ['product_id', 'product_name', 'product_img', 'product_price', 'created_at', 'updated_at'];

    public function subOrder()
    {
        return $this->hasMany('App\SubOrder', 'product_id', 'product_id');
    }

    public function scopeReportOrder($query)
    {
        return $query
            ->leftJoin('sub_order', 'sub_order.product_id', '=', 'product.product_id')
            ->select(
                'product.product_id',
                'product_name',
                'product_img',
                DB::raw('COUNT(sub_order.product_id) AS amount'),
                DB::raw('SUM(sub_order.sub_order_price) AS total'),
            )
            ->groupBy('product_id', 'product_name', 'product_img')
            ->get();

    }
}
