<?php

use SMS\Student;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->delete();
        Student::create(array(
            'firstname'     => 'Chris Sevilleja',
            'lastname'    => 'chris@scotch.io',
            'email'     => 'Chris Sevilleja',
            'address'    => 'chris@scotch.io',
            'contact'     => 'Chris Sevilleja',
            'user_id'    => '6',
        ));
    }
}
