<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $stock = 15;
        $books = [
            'Pemrograman PHP',
            'Laravel untuk Pemula',
            'Basis Data',
            'Algoritma dan Pemrograman',
            'Pemrograman Berorientasi Objek',
            'Laut Bercerita',
            'Bumi Manusia',
            'Anak Semua Bangsa',
            'Jejak Langkah',
            'Rumah Kaca',
            'Saman',
            'Pulang',
            'Amba',
            'Cantik Itu Luka',
            'Laskar Pelangi',
            'Sang Pemimpi'
            ];

            return view('books.index', compact('books', 'stock'));
    }
}
