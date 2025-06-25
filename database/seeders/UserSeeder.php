<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+60123456789',
            'position' => 'System Administrator',
            'status' => 'active'
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '+60987654321',
            'position' => 'Developer',
            'status' => 'active'
        ]);

        User::create([
            'name' => 'Bob Johnson',
            'email' => 'bob@example.com',
            'phone' => '+60555666777',
            'position' => 'Manager',
            'status' => 'inactive'
        ]);
    }
}