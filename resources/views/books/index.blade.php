
@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')

    <h2>Daftar Buku</h2>

    <a href="{{ route('books.create') }}">+ Tambah Buku</a>

    <br><br>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($books as $book)
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

                    <td>
                        <a href="{{ route('books.show', $book) }}">
                            Detail
                        </a>

                        |

                        <a href="{{ route('books.edit', $book) }}">
                            Edit
                        </a>

                        |

                        <form
                            action="{{ route('books.destroy', $book) }}"
                            method="POST"
                            style="display: inline;"
                            onsubmit="return confirm('Yakin ingin menghapus buku ini?')"
                        >
                            @csrf
                            @method('DELETE')

                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Belum ada data buku.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
