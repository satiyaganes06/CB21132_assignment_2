<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('student')->insert([
                'school' => $faker->randomElement(['GP', 'MS']),
                'sex' => $faker->randomElement(['F', 'M']),
                'age' => $faker->numberBetween(8, 18),
                'address' => $faker->randomElement(['U', 'R']),
                'famsize' => $faker->randomElement(['LE3', 'GT3']),
                'Pstatus' => $faker->randomElement(['T', 'A']),
                'Medu' => $faker->numberBetween(0, 4),
                'Fedu' => $faker->numberBetween(0, 4),
                'Mjob' => $faker->jobTitle(),
                'Fjob' => $faker->jobTitle(),
                'reason' => $faker->randomElement(['home', 'reputation', 'course', 'other']),
                'guardian' => $faker->randomElement(['mother', 'father', 'other']),
                'traveltime' => $faker->numberBetween(1, 4),
                'studytime' => $faker->numberBetween(1, 4),
                'failures' => $faker->numberBetween(1, 4),
                'schoolsup' => $faker->randomElement(['yes', 'no']),
                'famsup' => $faker->randomElement(['yes', 'no']),
                'paid' => $faker->randomElement(['yes', 'no']),
                'activities' => $faker->randomElement(['yes', 'no']),
                'nursery' => $faker->randomElement(['yes', 'no']),
                'higher' => $faker->randomElement(['yes', 'no']),
                'internet' => $faker->randomElement(['yes', 'no']),
                'romantic' => $faker->randomElement(['yes', 'no']),
                'famrel' => $faker->numberBetween(1, 5),
                'freetime' => $faker->numberBetween(1, 5),
                'goout' => $faker->numberBetween(1, 5),
                'Dalc' => $faker->numberBetween(1, 5),
                'Walc' => $faker->numberBetween(1, 5),
                'health' => $faker->numberBetween(1, 5),
                'absences' => $faker->numberBetween(0, 93),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
