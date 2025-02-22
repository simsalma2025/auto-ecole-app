<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Profile::factory(100)->create();

        DB::table('profiles')->insert(
            [
                'name'=>Str::random(20),
                'email'=>Str::random(20).'@gmail',
                'password'=>Hash::make('password'),
                'bio'=>Str::random(255),
            ]
        );
    }
}