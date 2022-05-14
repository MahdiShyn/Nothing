<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<20;$i++){
            DB::table('car_models')
            ->insert([
                // '' => ''.$i,
                'brandName' => 'brandName'.$i,
                'modelName' => 'modelName'.$i,
                'plateNumber' => 'plateNumber'.$i,
                'description' => 'description'.$i,
            ]);
        }
    }
}
