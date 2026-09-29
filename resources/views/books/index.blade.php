@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')

    <h2>Daftar Buku</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->stock }}</td>
                    <td>
                        @if($book->stock > 0)
                            Buku tersedia
                        @else
                            Buku sedang habis
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection