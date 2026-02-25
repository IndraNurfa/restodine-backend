<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name'     => 'Pelayan Satu',
            'email'    => 'pelayan@sismedika.com',
            'password' => Hash::make('password'),
            'role'     => 'pelayan',
        ]);

        User::create([
            'name'     => 'Kasir Satu',
            'email'    => 'kasir@sismedika.com',
            'password' => Hash::make('password'),
            'role'     => 'kasir',
        ]);
    }
}
