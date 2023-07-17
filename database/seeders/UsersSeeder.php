<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Seeder;
use App\Models\SuperAdmin\Login;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {  
        $demoUser1 = User::create([
            'name'              => $faker->name,
            'email'             => 'admin@admin.com',
            'password'          => Hash::make('admin'),
            'user_type' => "0",
            'email_verified_at' => now(),
        ]);

        $demoUser = User::create([
            'name'              => $faker->name,
            'email'             => 'demo@demo.com',
            'password'          => Hash::make('demo'),
            'user_type' => "1",
            'email_verified_at' => now(),
        ]);

        $demoUser = User::create([
            'name'              => $faker->name,
            'email'             => 'guard@guard.com',
            'password'          => Hash::make('guard'),
            'user_type' => "2",
            'email_verified_at' => now(),
        ]);

    }
}
