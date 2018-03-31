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
            $table->enum('delivery_type',['DELIVERY','RESTAURANT']);
            $table->text('code_qr');
            $table->string('location',200);
            $table->string('choose_schedule',40);
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
        Schema::dropIfExists('detail__orders');
    }
}
