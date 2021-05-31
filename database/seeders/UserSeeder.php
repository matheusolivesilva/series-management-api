<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'email' => 'test@test.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
    }
}
