<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menu_id')->unsigned();
        
            $table->string('name',120);
            $table->double('price',8,2);
            $table->string('slug',128)->nullable();//url amigable
            $table->string('file', 128)->nullable();
            $table->timestamps();

            //Relation
            $table->foreign('menu_id')->references('id')->on('menus')
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
        Schema::dropIfExists('dishes');
    }
}
