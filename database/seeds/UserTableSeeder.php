<?php

use SMS\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->delete();
        User::create([
            'name'     => 'Chris Sevilleja',
            'email'    => 'chris@scotch.io',
            'password' => Hash::make('awesome'),
        ]);

        User::create([
            'name'     => 'Osama Yawar',
            'email'    => 'osamayawar@hotmail.com',
            'password' => Hash::make('welcome'),
        ]);
    }
}
