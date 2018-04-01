<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $fillable = [
        'id', 'restaurante_id', 'fecha'
    ];

     public function restaurant(){
    	return $this->belongsTo(Restaurant::class);
    }

    public function dishes(){
    	return $this->hasMany(Dish::class);
    }

}
