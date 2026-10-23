<?php

namespace App\Models;

class Genre
{
    public static function getAll()
    {
        return [
            ['id' => 1, 'nama' => 'Punk Rock', 'deskripsi' => 'Aliran musik cepat dan penuh energi.'],
            ['id' => 2, 'nama' => 'Indie Rock', 'deskripsi' => 'Musik independen dengan eksplorasi nada bebas.'],
            ['id' => 3, 'nama' => 'Post-Punk', 'deskripsi' => 'Eksperimentasi nada punk dengan atmosfer unik.'],
            ['id' => 4, 'nama' => 'Hardcore', 'deskripsi' => 'Tempo super cepat dengan lirik lurus dan tegas.'],
            ['id' => 5, 'nama' => 'Math Rock', 'deskripsi' => 'Struktur ritme dan ketukan yang kompleks.'],
        ];
    }
}