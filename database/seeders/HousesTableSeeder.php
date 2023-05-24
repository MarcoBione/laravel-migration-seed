<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Fake\Generator as Faker;
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
        foreach($data as $house){
            $newHouse = new House(); //invoco il model
            $newHouse->title= $house['title']; //popolo i campi
            $newHouse->address= $house['address'];
            //..
            $newHouse->save();
        }
    }
}
