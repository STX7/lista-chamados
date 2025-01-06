<?php

namespace Database\Seeders;

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

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'permission'=> '0',
            'status'=>'0',
        ]);
        User::factory()->create([
            'name' => 'Samuel',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'permission'=> '1',
            'status'=>'1',
        ]);
        User::factory()->create([
            'name' => 'Sérgio',
            'email' => 'sergio@admin.com',
            'password' => Hash::make('12345678'),
            'permission'=> '2',
            'status'=>'2',
        ]);
        User::factory()->create([
            'name' => 'Lucas',
            'email' => 'lucas@admin.com',
            'password' => Hash::make('12345678'),
            'permission'=> '1',
            'status'=>'1',
        ]);
    }
}
