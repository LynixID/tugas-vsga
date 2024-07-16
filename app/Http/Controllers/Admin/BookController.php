<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('admin.books.index', compact('book'));
    }

    public function create()
    {
        return view('admin.books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_title' => 'required',
            'author' => 'required',
            'publisher_name' => 'required',
            'isbn' => 'required',
            'copyright_year' => 'required|integer',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    public function show(Book $book)
    {
        return view('admin.books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('admin.books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'book_title' => 'required',
            'author' => 'required',
            'publisher_name' => 'required',
            'isbn' => 'required',
            'copyright_year' => 'required|integer',
        ]);

        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}
