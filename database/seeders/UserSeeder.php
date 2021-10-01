<?php

namespace Database\Seeders;

use app\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        // DB::table('users')->insert
        // (
        //     [
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //         'password' => Hash::make('password'),
        //         'created_at'=> Carbon::now(),
        //         'updated_at'=> Carbon::now()
        //     ]
        // );

        // $user = User::create([
        //     'name' => 'elias felipe',
        //     'email' => 'elias@gmail.com',
        //     'password' => Hash::make('password')
        // ]);

        \App\Models\User::factory(5)->create();
    }
}
