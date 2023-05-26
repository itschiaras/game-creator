<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Character;
use Illuminate\Database\Seeder;

class VideogameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videoGamesData = [];//da dove li prendiamo?

        foreach($videoGamesData as $game) {
            $newCharacter = new Character();

            $newCharacter->name= $game['name'];
            $newCharacter->description= $game['description'];
            $newCharacter->attack= $game['attack'];
            $newCharacter->defence= $game['defence'];
            $newCharacter->speed= $game['speed'];
            $newCharacter->life= $game['life'];

            $newCharacter->save();
        }
    }
}
