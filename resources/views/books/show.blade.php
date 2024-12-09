@extends('layouts.app')

@section('content')
    <h1>Detail Buku</h1>

    <p>ID: {{ $book->id }}</p>
    <p>Nama: {{ $book->nama }}</p>
    <p>Content: {{ $book->content }}</p>
    <p>Harga: Rp {{ number_format($book->harga, 0, ',', '.') }}</p>

    <a href="{{ route('books.edit', $book->id) }}">Edit</a>
    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
    </form>
    <a href="{{ route('books.index') }}">Kembali</a>
@endsection