<?php

namespace Database\Seeders;

use App\Models\Messages;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Messages::factory()->count(10)->create();
        }
}
