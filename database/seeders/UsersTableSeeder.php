<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;

class  UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'sandesh',
            'email' => 'sandeshb981@gmail.com',
            'password' => bcrypt('Welcome1234')
        ]);
    }
}
