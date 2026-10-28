<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Read all data author
    public function index()
    {
        $authors = Author::all();

        return response()->json([
            'success' => true,
            'message' => 'Data Author Berhasil Diambil',
            'data'    => $authors
        ], 200);
    }

    // Create data author
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'   => 'required|string|max:255',
            'negara' => 'required|string|max:255',
        ]);

        $author = Author::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Author Berhasil Ditambahkan',
            'data'    => $author
        ], 201);
    }
}