<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\School;
use App\Models\Student;

class AttendanceGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AttendanceGroup::factory()->count(20)->create();
    }
}
