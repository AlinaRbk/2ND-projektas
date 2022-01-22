<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\School;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        School::factory()->count(20)->create();
        AttendanceGroup::factory()->count(20)->create();
        Student::factory()->count(20)->create();
        
       
    }
}
