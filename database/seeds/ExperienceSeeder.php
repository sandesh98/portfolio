<?php

use Illuminate\Database\Seeder;
use App\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experience = new Experience();
        $experience->text = 'Ace training';
        $experience->type = 'training';
    }
}
