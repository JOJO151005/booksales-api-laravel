<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Read All Data
    public function index()
    {
        $books = Book::with('author')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data Buku Berhasil Diambil',
            'data'    => $books
        ], 200);
    }

    // Create Data
    public function store(Request $request)
    {
        $validated = $request->validate([
            'author_id'   => 'required|exists:authors,id',
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric',
            'stock'       => 'required|integer',
        ]);

        $book = Book::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Buku Berhasil Ditambahkan',
            'data'    => $book
        ], 201);
    }

    // Read Detail Data
    public function show($id)
    {
        $book = Book::with('author')->find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Buku Tidak Ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Buku Berhasil Diambil',
            'data'    => $book
        ], 200);
    }

    // Update Data
    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Buku Tidak Ditemukan'
            ], 404);
        }

        $validated = $request->validate([
            'author_id'   => 'sometimes|required|exists:authors,id',
            'title'       => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'sometimes|required|numeric',
            'stock'       => 'sometimes|required|integer',
        ]);

        $book->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Data Buku Berhasil Diperbarui',
            'data'    => $book
        ], 200);
    }

    // Delete Data
    public function destroy($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Buku Tidak Ditemukan'
            ], 404);
        }

        $book->delete();

        return response()->json([
            'success' => true,
            'message' => 'Buku Berhasil Dihapus'
        ], 200);
    }
}