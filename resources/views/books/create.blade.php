@extends('layouts.app')

@section('content')
    <h1>Tambah Buku Baru</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required>
        
        <label for="content">Content</label>
        <textarea name="content" id="content" required></textarea>
        
        <label for="harga">Harga</label>
        <input type="number" name="harga" id="harga" required>
        
        <button type="submit">Simpan</button>
    </form>
@endsection