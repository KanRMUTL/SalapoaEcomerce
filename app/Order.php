<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'order_id';
    public function getCreatedFormated(){
        $dateCreate = date_create($this->date_create);
        return date_format($dateCreate, 'd/m/Y เวลา H:i:s');
    }
    public function subOrder()
    {
        return $this->hasMany('App\SubOrder', 'order_id', 'order_id');
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
                ['status_id', '!=', '3'],
                ['order_id', '!=', $this->order_id],
                ['created_at', '<', $this->created_at]
            ])
            ->get();
        return count($request);
    }
}
