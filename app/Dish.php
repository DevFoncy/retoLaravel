<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    //
    protected $fillable = [
        'id', 'menu_id', 'name','price','file'
    ];
    
    public function orders(){
    	return $this->belongsToMany(User::class);
    }
}
