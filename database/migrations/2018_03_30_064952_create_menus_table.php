<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('restaurant_id')->unsigned();
            $table->integer('dish_id')->unsigned();
            $table->string('fecha',30);
           
            $table->timestamps();
            
             //Relation
            $table->foreign('restaurant_id')->references('id')->on('restaurants')
            ->onDelete('cascade')->onUpdate('cascade');
            
            $table->foreign('dish_id')->references('id')->on('dishes')
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
        Schema::dropIfExists('menus');
    }
}
