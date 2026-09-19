<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['judul' => 'Pemrograman PHP', 'penulis' => 'Andi', 'tahun' => 2021],
            ['judul' => 'Laravel untuk Pemula', 'penulis' => 'Budi', 'tahun' => 2022],
            ['judul' => 'Basis Data', 'penulis' => 'Citra', 'tahun' => 2020],
            ['judul' => 'Algoritma dan Pemrograman', 'penulis' => 'Dewi', 'tahun' => 2023],
            ['judul' => 'Pemrograman Berorientasi Objek', 'penulis' => 'Eko', 'tahun' => 2021],
            ['judul' => 'Jaringan Komputer', 'penulis' => 'Fajar', 'tahun' => 2022],
            ['judul' => 'Sistem Informasi', 'penulis' => 'Gita', 'tahun' => 2020],
            ['judul' => 'Pemrograman Web', 'penulis' => 'Hadi', 'tahun' => 2023],
            ['judul' => 'Basis Data Lanjut', 'penulis' => 'Indra', 'tahun' => 2021],
            ['judul' => 'Pemrograman Mobile', 'penulis' => 'Joko', 'tahun' => 2022]
        ];
        
        $stock = 7;
        
        return view('books.index', compact('books', 'stock'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}