<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'student_number' => '094567',
            'student_name' => 'Claudine Wangari Gachiri',
            'email_address' => 'claudine.gachiri@strathmore.edu',
            'faculty' => 'FIT',
            'password' => bcrypt('Claudine@1234'),
        ]);
    }
}
