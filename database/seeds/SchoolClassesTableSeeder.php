<?php

use App\SchoolClass;
use Illuminate\Database\Seeder;

class SchoolClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
            [
                'id' => 1,
                'name' => '414 аудитория'
            ],
            [
                'id' => 2,
                'name' => '220 аудитория'
            ]
        ];

        SchoolClass::insert($classes);
    }
}
