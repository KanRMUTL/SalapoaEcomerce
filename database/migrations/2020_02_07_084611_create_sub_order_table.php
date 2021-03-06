<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubOrderTable extends Migration
{

    public function up()
    {
        Schema::create('sub_order', function (Blueprint $table) {
            $table->increments('sub_order_id');
            $table->integer('sub_order_amount');
            $table->decimal('sub_order_price');
            $table->string('product_id');
            $table->string('order_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_order');
    }
}
