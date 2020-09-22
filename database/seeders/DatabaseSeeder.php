<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Staff;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Department::factory(10)->create();
        Staff::factory(20)->create();
    }
}
