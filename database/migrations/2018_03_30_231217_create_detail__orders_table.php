<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail__orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();;
            $table->enum('delivery_type',['DELIVERY','RESTAURANT']);
            $table->text('code_qr');
            $table->string('location',200);
            $table->string('choose_schedule',40);
            $table->timestamps();

            //Relation
            $table->foreign('order_id')->references('id')->on('orders')
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
        Schema::dropIfExists('detail__orders');
    }
}
