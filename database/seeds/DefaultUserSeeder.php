<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              => 'John Doe',
            'email'             => 'admin@localhost',
            'email_verified_at' => now(),
            'username'          => 'admin',
            'password'          => Hash::make('passw0rd'),
            'remember_token'    => Str::random(12),
        ]);
    }
}
