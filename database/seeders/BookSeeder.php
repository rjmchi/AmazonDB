<?php

namespace Database\Seeders;

use App\Models\Book;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $path = database_path("books.json");

        $string = file_get_contents($path);
        $json_a = json_decode($string);
        $sort_order = 0;
        foreach ($json_a as $books){

            foreach($books as $book) {

                Book::create([
                    'title'=>$book->title,
                    'image'=>$book->image,
                    'description'=>$book->description,
                    'link'=>$book->link,
                    'sort_order'=> $sort_order+=10,
                ]);
            }
        }
    }
}
