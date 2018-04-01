<?php

use Faker\Generator as Faker;

$factory->define(App\Detail_Order::class, function (Faker $faker) {
      $title = $faker->word(30);
      $arrayDelivery=array('DELIVERY','RESTAURANT');
      $arraySchedule=array('9:00 am-10:00 am','10:00 am-12:00 am','1:00 pm-3:00 pm','5:00 pm-7:00 pm','8:00 pm-10:00 pm','10:00 pm-11:00 pm');
    return [
        //
        'delivery_type'=>$faker->randomElement($arrayDelivery),
		'location'=>$faker->address(),
    	'code_qr'=>$faker->swiftBicNumber(),
    	'choose_schedule'=> $faker->randomElement($arraySchedule),  
    ];
});
