
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul Buku</label>
        <input type="text" name="title"
            value="{{ old('title', $book->title) }}" required>
        <br><br>

        <label>Penulis</label>
        <input type="text" name="author"
            value="{{ old('author', $book->author) }}" required>
        <br><br>

        <label>Tahun Terbit</label>
        <input type="number" name="year"
            value="{{ old('year', $book->year) }}" required>
        <br><br>

        <label>Stok</label>
        <input type="number" name="stock"
            value="{{ old('stock', $book->stock) }}" min="0" required>
        <br><br>

        <button type="submit">Update Buku</button>
    </form>

    <a href="{{ route('books.index') }}">Kembali</a>
</body>
</html>
