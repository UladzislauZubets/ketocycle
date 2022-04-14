<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
            'name' => "How familiar are you with the Keto diet?",
            'type' => config('app.available_test_types')['Выбор одного'],
            'order' => 0,
        ]);
        
        DB::table('tests')->insert([
            'name' => "Our lifestyle also has a great impact on our metabolic age. Which of these statements best describes yours?",
            'type' => config('app.available_test_types')['Выбор одного'],
            'order' => 1,
        ]);
    }
}
