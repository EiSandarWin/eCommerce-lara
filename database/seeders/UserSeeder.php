<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'eisanar',
            'email'=>'eisandar@gmail.com',
            'password'=>Hash::make('12345')

        ]);

        DB::table('users')->insert([
            'name'=>'susu',
            'email'=>'susu@gmail.com',
            'password'=>Hash::make('12345')

        ]);
    }
}
