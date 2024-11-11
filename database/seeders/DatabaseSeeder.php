<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         // \App\Models\User::factory(10)->create();
         //\App\Models\User::factory(5)->create();

        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Chief']);
        Role::create(['name' => 'User']);

        \App\Models\User::factory(3)->create([
          'name' => fake()->name,
          'email' => fake()->unique()->safeEmail,
          'email_verified_at' => now(),
          'password' => Hash::make('recipe'),
          'profile_image' => fake()->imageUrl,
          'phone_number' => fake()->phoneNumber,
          'remember_token' => Str::random(10),
        ]);
    }
}
