<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::insert([
            [
                'id' => 'admin'
            ], [
                'id' => 'seller'
            ], [
                'id' => 'customer'
            ]
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Admin1234!'),
            'role_id'=>'admin'
        ]);
        User::create([
            'name' => 'seller',
            'email' => 'seller@gmail.com',
            'password' => bcrypt('Seller1234!'),
            'role_id'=>'seller'
        ]);
        User::create([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'password' => bcrypt('Customer1234!'),
            'role_id'=>'customer'
        ]);
    }
}
