<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=20; $i < 30; $i++) { 
            $faker = Faker::create('id_ID');
            $employee = new Employee;
            $employee->name = $faker->name();
            $employee->age = $i;
            $employee->department = $faker->jobTitle;
            $employee->address = $faker->address;
            $employee->save();
        }
    }
}
