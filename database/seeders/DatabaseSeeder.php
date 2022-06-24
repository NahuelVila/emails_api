<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //my user
        if(!User::where('email', 'nahuel@emailsapi.com')->exists()){
            User::factory()->create([
                'name' => 'Nahuel',
                'email' => 'nahuel@emailsapi.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345'), // password
                'remember_token' => Str::random(10),
            ]);
        }
        
        //admin user
        if(!User::where('email', 'admin@emailsapi.com')->exists()){
            User::factory()->create([
                'name' => 'Administrador',
                'email' => 'admin@emailsapi.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345'), // password
                'remember_token' => Str::random(10),
            ]);
        }
        
       //18 random users
        User::factory(18)->create();

    }
}
