<?php

use Faker\Generator as Faker;

$factory->define(App\Dish::class, function (Faker $faker) {
    $title = $faker->word(20);
    return [
        //
		'name'=> $title,
		'slug'=> str_slug($title),
		'price'=>rand(10,30),
		'file'=>$faker->imageUrl($width=250, $height=200),     
    ];
});
