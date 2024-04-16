<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => bcrypt('Password1!'),
            'phone' => 88888888,
        ])->assignRole('admin');

        User::create([
            'name' => 'Cliente',
            'email' => 'cliente@cliente.com',
            'password' => bcrypt('Password1!'),
            'phone' => 81818181,
        ])->assignRole('client');
    }
}
