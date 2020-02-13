<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'order_id';

    public function subOrder()
    {
        return $this->hasMany('App\Suborder', 'order_id', 'order_id');
    }

    public function scopeGetLatestQue($query)
    {
        return $query
            ->latest()
            ->where([[
                DB::raw('CAST(created_at AS DATE)'), '=', date('Y-m-d'),
            ]])
            ->first();
    }

    public function scopeGetCurrentQue($query)
    {
        $latestQue = $this->getLatestQue();

        if (isset($latestQue->order_que)) {
            return $latestQue->order_que + 1;
        } else {
            return 1;
        }
    }
    public function scopeWaitingQue($query)
    {
        $request = $query
            ->where([
                [
                DB::raw('CAST(created_at AS DATE)'), '=', date('Y-m-d'),
                ],
                [
                    'status_id', '=', '10',
                ]
            ])
            ->get();
        return count($request);
    }
}
