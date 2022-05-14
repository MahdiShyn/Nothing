<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        for($i=0;$i<20;$i++){
            DB::table('users')
            ->insert([
                // 'id' => $i,
                'name' => 'name'.$i,
                'email' => 'email'.$i.'@gmail.com',
                'password' => Hash::make('password'.$i),
            ]);
        }
    }
}
