<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'dish_id', 'user_id','note','state'
    ];

    public function dish(){
    	return $this->belongsTo(Dish::class);
    }

    public function detail_orders(){
        return $this->hasMany(Detail_Order::class);
    }
}
