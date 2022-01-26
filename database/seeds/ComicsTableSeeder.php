<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ottenere dati da config file
        $comics = config('comics');

        foreach ($comics as $comic) {
            $new_comic = new Comic();


            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];
            
            //salviamo
            $new_comic->save();


        }
    }
}