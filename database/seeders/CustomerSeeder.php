<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customers;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<40;$i++){
            $customer = new Customers;
            
            $faker = Faker::create();
            $customer->name = $faker->name;
            $customer->email = $faker->email;
            $customer->gender = "O";
            $customer->address = $faker->address;
            $customer->dob = $faker->date;
            $customer->password = $faker->password;
            $customer->save();
        }

    }
}
