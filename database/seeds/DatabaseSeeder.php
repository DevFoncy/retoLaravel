<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DistrictsTableSeeder::class);
        $this->call(RestaurantsTableSeeder::class);
        $this->call(SchedulesTableSeeder::class);
        $this->call(DishesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(DetailOrdersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
