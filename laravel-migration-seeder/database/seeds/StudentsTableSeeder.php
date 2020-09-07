<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 10; $i++){
        $n_student = new Student();
        $n_student->name = $faker->firstName('male'|'female');
        $n_student->lastname = $faker->lastName;
        $n_student->rating = $faker->numberBetween(1,10);
        $n_student->description = $faker->paragraph(5);
        $n_student->save();
      }
    }
}
