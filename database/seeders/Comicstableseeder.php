<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class Comicstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newComic = new Comic();
            $newComic->title = $faker->name();
            $newComic->drop_date = $faker->dateTime();
            $newComic->votes = $faker->numberBetween(0,5);
            $newComic->save();
        }
    }
}
