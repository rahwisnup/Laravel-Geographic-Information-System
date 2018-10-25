<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'ngurah',
            'email' => 'ngurah@gmail.com',
            'password' => Hash::make('ngurah123'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'wisnu',
            'email' => 'wisnu@gmail.com',
            'password' => Hash::make('wisnu123'),
            'role' => 'member'
        ]);
    }
}

