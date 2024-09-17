<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = collect(
            [
            [
                'stu_name' => 'asad',
            'stu_email' => 'asad@gmail',
            'city_id' => 1
            ],
            [
                'stu_name' => 'qamar',
            'stu_email' => 'qamar@gmail',
            'city_id' => 1
            ],
            [
                'stu_name' => 'furqan',
            'stu_email' => 'furqan@gmail',
            'city_id' => 1
            ]
        ]);

        $students->each(function($s){
            student::insert($s);
        });
        // student::create([
        //     'stu_name' => 'hamza',
        //     'stu_email' => 'hamza@gmail',
        //     'city_id' => 1
        // ]);
    }
}
