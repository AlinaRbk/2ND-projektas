<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Student;
use App\Models\AttendanceGroup;
use App\Models\school;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::factory()->count(20)->create();
    }
}
