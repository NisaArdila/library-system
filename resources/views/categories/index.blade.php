
@extends('layouts.app')

@section('title', 'Kategori Buku')

@section('content')

    <h2>Kategori Buku</h2>

    <ul>
        @forelse ($categories as $category)
            <li>{{ $category->name }}</li>
        @empty
            <li>Belum ada kategori.</li>
        @endforelse
    </ul>

@endsection
