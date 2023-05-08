<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => "Hanni",
            'email' => "a@a.a",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            
        ]);

        User::create([
            'id' => 2,
            'name' => "Chaewon",
            'email' => "b@b.b",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            
        ]);

    }
}
