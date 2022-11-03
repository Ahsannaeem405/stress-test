<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);
        // User::create([
        //     'name' => 'Billy Adamsen',
        //     'email' => 'bian@zealand.dk',
        //     'password' => Hash::make('Vestervang-42'),
        //     'role' => 'admin',
        // ]);
    }
}
