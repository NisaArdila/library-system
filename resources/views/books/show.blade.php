
@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')

    <h2>Detail Buku</h2>

    <p><strong>ID:</strong> {{ $book->id }}</p>
    <p><strong>Judul:</strong> {{ $book->title }}</p>
    <p><strong>Penulis:</strong> {{ $book->author }}</p>
    <p><strong>Tahun Terbit:</strong> {{ $book->year }}</p>
    <p><strong>Stok:</strong> {{ $book->stock }}</p>

    @if($book->stock > 0)
        <p>Status: Buku tersedia</p>
    @else
        <p>Status: Buku sedang habis</p>
    @endif

    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>

@endsection
