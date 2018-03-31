<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dish_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->integer('order_detail_id')->unsigned();
        
            $table->string('note',120);
            $table->timestamps();

             //Relation
            $table->foreign('dish_id')->references('id')->on('dishes')
            ->onDelete('cascade')->onUpdate('cascade');
            
             //Relation
            $table->foreign('order_id')->references('id')->on('orders')
            ->onDelete('cascade')->onUpdate('cascade');
            
             //Relation
            $table->foreign('order_detail_id')->references('id')->on('detail__orders')
            ->onDelete('cascade')->onUpdate('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
