<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'adminganang',
            'email' => NULL,
            'password' => md5('ganangyulii9493'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
