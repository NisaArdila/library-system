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
        $books = [
        ['title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'year' => 2005, 'stock' => 5],
        ['title' => 'Bumi', 'author' => 'Tere Liye', 'year' => 2014, 'stock' => 8],
        ['title' => 'Perahu Kertas', 'author' => 'Dee Lestari', 'year' => 2009, 'stock' => 3],
        ['title' => 'Dilan 1990', 'author' => 'Pidi Baiq', 'year' => 2014, 'stock' => 10],
        ['title' => 'Gadis Kretek', 'author' => 'Ratih Kumala', 'year' => 2012, 'stock' => 4],
    ];

    foreach ($books as $book) {
        Book::create($book);
    }

    }
}
