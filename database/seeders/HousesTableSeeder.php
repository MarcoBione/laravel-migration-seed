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
            $newHouse->title= $faker->words(5, true); //stringa di 5 parole mettendo ',true'
            $newHouse->address= $faker->address();
            $newHouse->postal_code= $faker->postcode();
            $newHouse->city= $faker->city();
            $newHouse->state= $faker->state();
            $newHouse->square_meters= $faker->numberBetween(40,500);
            $newHouse->rooms= $faker->randomDigitNotNull();
            $newHouse->bathroom= $faker->randomDigitNotNull();
            $newHouse->garage= $faker->randomDigitNotNull();
            $newHouse->price= $faker->randomFloat(1, 20000, 300000); //un numero tra 20k e 300k
            $newHouse->description= $faker->paragraph();


            $newHouse->save();
        }
    }
}
