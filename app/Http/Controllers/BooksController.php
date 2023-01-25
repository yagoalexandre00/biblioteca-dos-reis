<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', ['livros' => $books]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->genre = $request->genre;
        $book->registration_number = $request->registration_number;
        $book->synopsis = $request->synopsis;
        $book->save();

        return redirect('/livros')->with('msg', 'Livro adicionado com sucesso!');
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('books.show', ['livro' => $book]);
    }
}
