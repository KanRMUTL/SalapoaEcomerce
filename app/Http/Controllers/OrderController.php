<?php

namespace App\Http\Controllers;

use App\Order;
use App\SubOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        $fullname = $request->firstname . ' ' . $request->lastname;

        // File upload
        $extension = $request->file('slip')->getClientOriginalExtension();
        $fileNameToStore = Str::random(8) . '.' . $extension;
        $path = $request->file('slip')->storeAs('public/images', $fileNameToStore);

        // Save Order
        $order = new Order;
        $order->customer_name = $fullname;
        $order->customer_phone = $request->phone;
        $order->order_que = Order::getCurrentQue();
        $order->order_code = strtoupper(Str::random(5));
        $order->order_amount = $request->amount;
        $order->order_total = $request->total;
        $order->order_remark = $request->remark;
        $order->order_slip = $fileNameToStore;
        $order->status_id = 0;
        $order->save();

        $cart = json_decode($request->cart);
        foreach ($cart as $cartItem) {
            $subOrder = new SubOrder;
            $subOrder->sub_order_amount = $cartItem->sub_order_amount;
            $subOrder->sub_order_price = $cartItem->sub_order_total;
            $subOrder->product_id = $cartItem->product_id;
            $subOrder->order_id = $order->order_id;
            $subOrder->save();
        }
        return response()->json($order);
    }

    public function getOrder($orderId)
    {
        $order = Order::find($orderId);
        $order->subOrder;
        foreach($order->subOrder as $subOrder){
            $subOrder->product;
        }

        $data = [
            'order' => $order,
            'created' => $order->getCreatedFormated(),
            'waitingQue' => $order->waitingQue(),
            'datetime' => date('H:s:i')
        ];
        return response()->json($data);
    }

    public function getOrdersToday(){
        $today = date('Y-m-d');
        $start = $today.' 00:00:00';
        $end = $today.' 23:59:59';
        $orders = Order::whereBetween('created_at', [$start, $end])->get();

        foreach($orders as $key => $order){
            $order->subOrder;
            $orders[$key]['dateformated'] = $order->getCreatedFormated();
            foreach($order->subOrder as $subOrder){
                $subOrder->product;
            }
        }
        return response()->json($orders);
    }

    public function updateStatus($order_id, Request $request)
    {
        $order = Order::find($order_id);
        $order->status_id = $request->statusId;
        $order->save();
        return $order;
    }
}
