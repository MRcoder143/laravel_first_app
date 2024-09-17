<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\city;
use Illuminate\Support\Facades\File;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $json = File::get(path:'database/json/city.json');
        $cities = collect(json_decode($json));
        $cities->each(function($city){
            city::create([
                'city_name' => $city->city_name
            ]);
        });
        // city::create(
        //     [
        //         'city_name' => 'Gujrat'
        //     ]
        // );
    }
}
