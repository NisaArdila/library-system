<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
                'unique:books,title',
            ],
            'author' => [
                'required',
                'string',
                'max:255',
                'regex:/^[\pL\s.\'-]+$/u',
            ],
            'year' => [
                'required',
                'integer',
                'min:1900',
                'max:2100',
            ],
            'stock' => [
                'required',
                'integer',
                'min:0',
                'max:10000',
            ],
        ], [
            'title.required' => 'Judul buku wajib diisi.',
            'title.unique' => 'Judul buku sudah terdaftar.',
            'author.regex' => 'Nama penulis hanya boleh berisi huruf, spasi, titik, apostrof, dan tanda hubung.',
            'year.integer' => 'Tahun terbit harus berupa angka bulat.',
            'year.min' => 'Tahun terbit minimal 1900.',
            'year.max' => 'Tahun terbit maksimal 2100.',
            'stock.integer' => 'Stok harus berupa angka bulat.',
            'stock.min' => 'Stok tidak boleh negatif.',
            'stock.max' => 'Stok maksimal 10000.',
        ]);

        Book::create($validated);

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil ditambahkan.');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('books', 'title')->ignore($book->id),
            ],
            'author' => [
                'required',
                'string',
                'max:255',
                'regex:/^[\pL\s.\'-]+$/u',
            ],
            'year' => [
                'required',
                'integer',
                'min:1900',
                'max:2100',
            ],
            'stock' => [
                'required',
                'integer',
                'min:0',
                'max:10000',
            ],
        ], [
            'title.required' => 'Judul buku wajib diisi.',
            'title.unique' => 'Judul buku sudah terdaftar.',
            'author.regex' => 'Nama penulis hanya boleh berisi huruf, spasi, titik, apostrof, dan tanda hubung.',
            'year.integer' => 'Tahun terbit harus berupa angka bulat.',
            'year.min' => 'Tahun terbit minimal 1900.',
            'year.max' => 'Tahun terbit maksimal 2100.',
            'stock.integer' => 'Stok harus berupa angka bulat.',
            'stock.min' => 'Stok tidak boleh negatif.',
            'stock.max' => 'Stok maksimal 10000.',
        ]);

        $book->update($validated);

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil dihapus.');
    }
}
