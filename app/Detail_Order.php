<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_Order extends Model
{
    //
    protected $fillable = [
        'id', 'order_id','delivery_type','code_qr','location','choose_schedule'
    ];

    
}
