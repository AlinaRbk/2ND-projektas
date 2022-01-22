<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\School;

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
