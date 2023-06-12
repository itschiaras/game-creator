<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */






    public function run()
    {
              $json = file_get_contents('storage/app/public/classes.json');

              //converting json object to php associative array
              $types = json_decode($json, true);

              foreach($types as $type) {
                $newType = new Type();
                $newType->name = $type['name'];
                $newType->slug = Str::slug($type['name'], '-');
                $newType->description = $type['desc'];
                $newType->save();



              }
    }
}
