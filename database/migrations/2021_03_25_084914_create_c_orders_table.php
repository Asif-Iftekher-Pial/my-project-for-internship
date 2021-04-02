<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->string('c_id');
            $table->string('order_name');
            $table->string('order_quantity');
            $table->integer('shipment_status');
            $table->string('customer_mail');
            $table->string('customer_gender');
            $table->string('customer_password');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_orders');
    }
}
