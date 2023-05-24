<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\House;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            //dati per ogni casa
            [
                'title'=>'titolo',
                'address'=>'address',

            ],
            [
                'title'=>'titolo',
                'address'=>'address',

            ]
            ];
    }
}
