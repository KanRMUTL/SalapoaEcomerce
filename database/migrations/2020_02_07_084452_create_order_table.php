<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{

    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('order_id');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->integer('order_que');
            $table->char('order_code', 5);
            $table->integer('order_amount');
            $table->decimal('order_total', 8, 2);
            $table->integer('order_payment_type');
            $table->integer('order_shipping_type');
            $table->integer('order_shipping_price');
            $table->text('order_remark')->nullable();
            $table->text('order_address')->nullable();
            $table->string('order_slip')->nullable();
            $table->integer('status_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order');
    }
}
