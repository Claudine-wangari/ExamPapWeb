<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministratorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrators')->insert([
            'email' => 'fitadmin@strathmore.edu',
            'password' => bcrypt('courseAdmin'),
            'faculty' => 'FIT',
            'role' => 'Course Administrator',
        ]);

        DB::table('administrators')->insert([
            'email' => 'fitdean@strathmore.edu',
            'password' => bcrypt('facultyDean'),
            'faculty' => 'FIT',
            'role' => 'Faculty Dean',
        ]);

        DB::table('administrators')->insert([
            'email' => 'aRegistrar@strathmore.edu',
            'password' => bcrypt('academicRegistrar'),
            'faculty' => 'General',
            'role' => 'Academic Registrar',
        ]);
    }
}
