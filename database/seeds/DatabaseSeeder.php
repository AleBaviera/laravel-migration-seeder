<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Place;
use App\Company;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EmployeesSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(PlacesSeeder::class);
        $this->call(EnterprisesSeeder::class);
    }
}
