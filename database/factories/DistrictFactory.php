<?php

use Faker\Generator as Faker;

$factory->define(App\District::class, function (Faker $faker) {
    $arrayDistrict= array('Ate','La Molina','San Isidro','Santa Anita','San Miguel','Pueblo Libre','Lince','Puente Piedra','Los Olivos','SJL','Chosica');
   // $titleDistrict = $faker->sentence(5);
    return [
        //
		'name'=> $faker->unique()->randomElement($arrayDistrict),
    ];
});
