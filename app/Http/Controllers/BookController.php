<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Mengambil semua data buku beserta relasi data author-nya
        $books = Book::with('author')->get();
        return view('book.index', compact('books'));
    }
}