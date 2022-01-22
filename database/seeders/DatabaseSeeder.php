<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\School;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Shool::factory()->count(20)->create();
        AttendanceGroup::factory()->count(20)->create();
        Student::factory()->count(20)->create();
        
       
    }
}
