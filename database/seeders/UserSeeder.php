<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::createOrFirst(
            [
                'name' => 'Generik User',
            ],
            [
                'email'    => 'generik@user.nl',
                'password' => bcrypt('password'),
            ]);
    }
}
