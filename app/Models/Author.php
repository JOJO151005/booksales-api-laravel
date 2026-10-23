<?php

namespace App\Models;

class Author
{
    public static function getAll()
    {
        return [
            ['id' => 1, 'nama' => 'Arno', 'negara' => 'Indonesia'],
            ['id' => 2, 'nama' => 'Delpi', 'negara' => 'Indonesia'],
            ['id' => 3, 'nama' => 'Dzikri', 'negara' => 'Indonesia'],
            ['id' => 4, 'nama' => 'Rubena', 'negara' => 'Indonesia'],
            ['id' => 5, 'nama' => 'Dongker', 'negara' => 'Indonesia'],
        ];
    }
}