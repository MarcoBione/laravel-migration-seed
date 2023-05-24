<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\House;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
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
        for($i=0; $i < 50; $i++){

            $newHouse = new House(); //invoco il model
            //$newHouse->title= $house['title']; //popolo i campi
            //$newHouse->address= $house['address'];

            //.. per il faker
            $newHouse->title= '';
            $newHouse->address= '';
            $newHouse->postal_code= '';
            $newHouse->city= '';
            $newHouse->state= '';
            $newHouse->square_meters= '';
            $newHouse->rooms= '';
            $newHouse->bathroom= '';
            $newHouse->garage= '';
            $newHouse->price= '';
            $newHouse->description= '';


            $newHouse->save();
        }
    }
}
