<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jaon = File::get(path:'database/json/user.json');
        $users = collect(json_decode($jaon));
        $users->each(function ($u){
            user::create([
                 "name"=> $u->name,
        "email"=> $u->email,
        "password"=> $u->password,
        "password_confirmation"=> $u->password_confirmation,
        "city"=> $u->city,
        "address"=> $u->address
            ]);
        });
    }
}
