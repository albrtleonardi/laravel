<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Book Management')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Opsional: Tambahkan file CSS -->
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('books.index') }}">Home</a>
            <a href="{{ route('books.create') }}">Tambah Buku</a>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content') <!-- Bagian untuk konten dinamis -->
        </div>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Book Management</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Opsional: Tambahkan file JS -->
</body>
</html>