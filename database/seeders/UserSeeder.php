<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for($i=0; $i<5;$i++){
            DB::table('users')->insert([
                'name' => $i==0 ? 'Admin':Str::random(10),
                'email' => $i==0 ? 'Admin@docs-jatb.com':Str::random(10).'@example.com',
                'password' => $i==0 ? Hash::make('Admin123@'): Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
