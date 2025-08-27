<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Wesley Scherrenberg',
            'email' => 'wesleyscherrenberg@gmail.com',
            'password' => Hash::make('test'),
            'is_admin' => true,
        ]);


        User::create([
            'name' => 'Yasar Gozudok',
            'email' => 'info@klaververzuim.nl',
            'password' => Hash::make('Klaververzuim@2025'),
            'is_admin' => true,
        ]);

    }
}
