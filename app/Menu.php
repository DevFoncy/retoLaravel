<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $fillable = [
        'id', 'restaurant_id', 'fecha','dish_id'
    ];

     public function restaurant(){
    	return $this->belongsTo(Restaurant::class);
    }


    public function dish(){
    	return $this->belongsTo(Dish::class);
    }


}
