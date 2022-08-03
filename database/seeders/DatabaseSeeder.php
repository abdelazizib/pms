<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Reviews;
use Illuminate\Database\Seeder;
use Database\Seeders\BlogTableSeeder;
use Database\Seeders\UserTableSeeder;
use Database\Seeders\CategoryTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            CategoryTableSeeder::class,
            ProductTableSeeder::class,
            BlogTableSeeder::class,
            EmployeeTableSeeder::class,
            NewsletterTableSeeder::class,
            OrdersTableSeeder::class,
            ReservationTableSeeder::class,
            ReviewsTableSeeder::class,
            SliderTableSeeder::class
        ]);
    }
}
