<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        $validate = $request->validate(
            ['nama' => 'required', 'content' => 'required', 'harga' => 'required']
        );

        Book::create($validate);
        return redirect()->route('books.index');
    }

    public function show ($id){

        $book = Book::findOrFail($id);

        return view('books.show', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
    
        // Pass the book to the view
        return view('books.edit', compact('book'));
    }
    
    public function update(Request $request, $id)
    {
        // Fetch the book by its ID
        $book = Book::findOrFail($id);
    
        // Validate the request
        $validated = $request->validate([
            'nama' => 'required',
            'content' => 'required',
            'harga' => 'required',
        ]);
    
        // Update the book
        $book->update($validated);
    
        // Redirect back to the book index
        return redirect()->route('books.index');
    }
    
    public function destroy($id)
    {
        // Fetch the book by its ID
        $book = Book::findOrFail($id);
    
        // Delete the book
        $book->delete();
    
        // Redirect back to the book index
        return redirect()->route('books.index');
    }
    
}
