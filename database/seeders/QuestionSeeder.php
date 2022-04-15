<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'name' => "How familiar are you with the Keto diet?",
            'type' => config('app.available_question_types')['Выбор одного'],
            'order' => 0,
        ]);
        
        DB::table('questions')->insert([
            'name' => "Our lifestyle also has a great impact on our metabolic age. Which of these statements best describes yours?",
            'type' => config('app.available_question_types')['Выбор одного'],
            'order' => 1,
        ]);
    }
}
