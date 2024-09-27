<?php

namespace Database\Seeders;

use App\Models\Bb;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'email' => 'admin@bboard.ru',
            'password' => Hash::make('admin')
        ]);

        Bb::create([
            'title' => 'Пылесос',
            'content' => 'Новый',
            'price' => '500',
            'user_id' => 1,
        ]);
    }
}
