<?php

use Faker\Generator as Faker;

$factory->define(App\Schedule::class, function (Faker $faker) {
    $arraySchedule=array('9:00 am-10:00 am','10:00 am-12:00 am','1:00 pm-3:00 pm','5:00 pm-7:00 pm','8:00 pm-10:00 pm','10:00 pm-11:00 pm');
    return [
        //
        'restaurant_id'=>rand(1,6),
		'schedule'=> $faker->randomElement($arraySchedule),    
    ];

});
