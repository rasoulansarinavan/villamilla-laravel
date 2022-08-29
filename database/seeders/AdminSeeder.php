<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::query()->insert([
            'name' => 'rasoul',
            'email' => 'rasoul@gmail.com',
            'email_verified_at' => now(),
            'mobile' => '091183221',
            'password' => bcrypt(123456), // password
            'remember_token' => Str::random(10),
        ]);
    }
}
