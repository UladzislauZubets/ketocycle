<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            'question_id' => 1,
            'title' => "Expert",
            'is_correct' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 1,
            'title' => "I've heard a thing or two",
            'is_correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 1,
            'title' => "Beginner",
            'is_correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 2,
            'title' => "I mostly eat well and stay active",
            'is_correct' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 2,
            'title' => "I have some healthy habits, but I'm not perfect",
            'is_correct' => false,
        ]);
        
        DB::table('answers')->insert([
            'question_id' => 2,
            'title' => "My diet and activity levels could use some help",
            'is_correct' => false,
        ]);
    }
}
