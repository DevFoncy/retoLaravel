<?php

use Illuminate\Database\Seeder;

class DetailOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Detail_Order::class,10)->create();
    }
}
