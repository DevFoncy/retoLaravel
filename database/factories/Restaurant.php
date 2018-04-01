<?php

use Faker\Generator as Faker;

$factory->define(App\Restaurant::class, function (Faker $faker) {
    $arrayDescription=array('Comida Chatarra','Saludable y Frutas','Frituras y Hamburguesas','Comida Gourmet','Tequeños y Aperitivos','Pizzas y Mojitos','Cevicheria y algo más','Comida Francesa');
    return [
        //
        'district_id'=>rand(1,10),
		'name'=> $faker->company(),
		'description'=>$faker->randomElement($arrayDescription),
		'file'=>$faker->imageUrl($width=300, $height=200),
		'address'=>$faker->address(),    
		'phone_number'=>$faker->phoneNumber(),    
    ];
});
