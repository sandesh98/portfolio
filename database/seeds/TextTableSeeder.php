<?php

use App\Text;
use Illuminate\Database\Seeder;

class TextTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $text = new Text;
        $text->title = 'Sandesh';
        $text->save();
    }
}
