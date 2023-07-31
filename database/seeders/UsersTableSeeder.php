<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'coder',
            'status' => '0',
            'email' => 'coder@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make(12345678), // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@tdo.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => time(),
            'status' => '1',
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null
        ]);
    }
}