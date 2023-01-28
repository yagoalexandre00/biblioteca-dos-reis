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

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $requestImage->move(public_path('/img/books'), $imageName);

            $book->image = $imageName;
        }

        $book->save();

        return redirect('/livros')->with('msg-success', 'Livro adicionado com sucesso!');
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('books.show', ['livro' => $book]);
    }
}
