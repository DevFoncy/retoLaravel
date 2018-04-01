<?php

use Faker\Generator as Faker;

$factory->define(App\Dish::class, function (Faker $faker) {
    $title = $faker->word(20);
    return [
        //
        'menu_id'=>rand(1,18),
		'name'=> $title,
		'slug'=> str_slug($title),
		'price'=>rand(10,30),
		'file'=>$faker->imageUrl($width=400, $height=300),     
    ];
});
