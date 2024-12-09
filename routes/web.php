<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

// Menampilkan daftar buku
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Menampilkan form untuk menambah buku baru
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');

// Menyimpan buku baru
Route::post('/books', [BookController::class, 'store'])->name('books.store');

// Menampilkan detail buku
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

// Menampilkan form untuk mengedit buku
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');

// Memperbarui buku
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');

// Menghapus buku
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');