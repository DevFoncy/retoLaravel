<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'district_id', 'name','description','address','phone_number','file'
    ];

    public function district(){
    	return $this->belongsTo(District::class);
    }

    public function schedules(){
        return $this->hasMany(Schedule::class);
    }

   
}
