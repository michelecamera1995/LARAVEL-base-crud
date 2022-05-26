<?php

use Illuminate\Database\Seeder;
use App\ComicsModel;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = config('comics');

        foreach ($data as $comic) {

            $comicInstance = new ComicsModel();
            $comicInstance->title = $comic['title'];
            $comicInstance->description = $comic['description'];
            $comicInstance->thumb = $comic['thumb'];
            $comicInstance->price = $comic['price'];
            $comicInstance->series = $comic['series'];
            $comicInstance->sale_date = $comic['sale_date'];
            $comicInstance->type = $comic['type'];
            $comicInstance->save();
        }
    }
}
