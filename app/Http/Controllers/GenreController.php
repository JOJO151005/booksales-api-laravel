<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::getAll();

        return response()->json([
            'success' => true,
            'message' => 'Data Genre Berhasil Diambil',
            'data'    => $genres
        ], 200);
    }
}