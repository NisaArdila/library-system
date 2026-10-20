
@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h2>Edit Buku</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Judul Buku</label><br>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title', $book->title) }}"
                required
            >
            @error('title')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="author">Penulis</label><br>
            <input
                type="text"
                id="author"
                name="author"
                value="{{ old('author', $book->author) }}"
                required
            >
            @error('author')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="category_id">Kategori</label><br>
            <select name="category_id" id="category_id" required>
                <option value="">Pilih kategori</option>

                @foreach ($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        @selected(old('category_id', $book->category_id) == $category->id)
                    >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            @error('category_id')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="year">Tahun Terbit</label><br>
            <input
                type="number"
                id="year"
                name="year"
                value="{{ old('year', $book->year) }}"
                required
            >
            @error('year')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="stock">Stok</label><br>
            <input
                type="number"
                id="stock"
                name="stock"
                value="{{ old('stock', $book->stock) }}"
                min="0"
                required
            >
            @error('stock')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">Update Buku</button>
    </form>

    <br>

    <a href="{{ route('books.index') }}">Kembali</a>
@endsection
