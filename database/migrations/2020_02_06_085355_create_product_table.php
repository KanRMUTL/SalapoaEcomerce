<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{

    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name');
            $table->string('product_img');
            $table->decimal('product_price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product');
    }
}
