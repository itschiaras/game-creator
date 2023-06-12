<?php

namespace Database\Seeders;

use App\Models\Item;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents('storage/app/public/weapons.json');

        //converting json object to php associative array
        $items = json_decode($json, true);


        foreach($items as $item) {
            $newItem = new Item();
            $newItem->name = $item['name'];
            $newItem->slug = Str::slug($item['name'], '-');
            $newItem->type = $item['type'];
            $newItem->category = $item['category'];
            $newItem->weight = $item['weight'];
            $newItem->cost = $item['cost'];
            $newItem->save();



          }

    }
}
