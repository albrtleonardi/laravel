@extends('layouts.app')

@section('content')
    <h1>Edit Buku</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{ $book->nama }}" required>
        
        <label for="content">Content</label>
        <textarea name="content" id="content" required>{{ $book->content }}</textarea>
        
        <label for="harga">Harga</label>
        <input type="number" name="harga" id="harga" value="{{ $book->harga }}" required>
        
        <button type="submit">Simpan Perubahan</button>
    </form>
@endsection