<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bill', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')
                ->references('id')
                ->on('clients');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('products');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')
                ->references('id')
                ->on('orders');
            $table->integer('provideer_id')->unsigned();
            $table->foreign('provideer_id')
                ->references('id')
                ->on('provideers');
            $table->integer('nit_id')->unsigned();
            $table->foreign('nit_id')
                ->references('id')
                ->on('nit');
            $table->integer('qrcode_id')->unsigned();
            $table->foreign('qrcode_id')
                ->references('id')
                ->on('qr');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('bill');
    }
}
