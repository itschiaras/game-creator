<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Character;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 10; $i++) {
            $newCharacter = new Character();

            $newCharacter->name= $faker->name();
            $newCharacter->description= $faker->paragraph();
            $newCharacter->attack= $faker->numberBetween(5, 15);
            $newCharacter->defence= $faker->numberBetween(5, 15);
            $newCharacter->speed= $faker->numberBetween(5, 15);
            $newCharacter->life= $faker->numberBetween(5, 15);

            $newCharacter->save();
        }
    }
}
