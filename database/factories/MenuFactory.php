<?php

use Faker\Generator as Faker;
	
$factory->define(App\Menu::class, function (Faker $faker) {
    return [
        //
        'restaurant_id'=>rand(1,6),
		'fecha'=> $faker->dayOfWeek($max='now'),    
    ];

});
