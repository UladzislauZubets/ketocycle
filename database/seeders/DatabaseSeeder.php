<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\QuestionSeeder;
use Database\Seeders\AnswerSeeder;

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
            QuestionSeeder::class,
            AnswerSeeder::class,
        ]);
    }
}
