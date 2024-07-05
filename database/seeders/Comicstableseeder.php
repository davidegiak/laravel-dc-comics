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
    public function run(): void
    {
        $data = config("data");
        foreach ($data as $key => $item) {
            $newComic = new Comic();
            $newComic->title = $item['title'];
            $newComic->drop_date = $item['sale_date'];
            $newComic->price = $item['price'];
            $newComic->thumb = $item['thumb'];
            $newComic->description = $item['description'];
            $newComic->save();
        }
    }
}
