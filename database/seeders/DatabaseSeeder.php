<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $author1 = Author::create(['nama' => 'Arno', 'negara' => 'Indonesia']);
        $author2 = Author::create(['nama' => 'Delpi', 'negara' => 'Indonesia']);
        $author3 = Author::create(['nama' => 'Dzikri', 'negara' => 'Indonesia']);
        $author4 = Author::create(['nama' => 'Rubena', 'negara' => 'Indonesia']);
        $author5 = Author::create(['nama' => 'Dongker', 'negara' => 'Indonesia']);

        Book::create([
            'author_id' => $author5->id,
            'title' => 'Melankolia Radikal',
            'description' => 'Album dan lagu tentang pergolakan batin dan skena independen.',
            'price' => 95000,
            'stock' => 10
        ]);

        Book::create([
            'author_id' => $author5->id,
            'title' => 'Lagu Selepas Hujan',
            'description' => 'Trek yang menceritakan tentang harapan setelah masa sulit.',
            'price' => 75000,
            'stock' => 14
        ]);

        Book::create([
            'author_id' => $author5->id,
            'title' => 'Lautan Bunga Warna Terang',
            'description' => 'Kumpulan lirik dan eksplorasi narasi visual panggung.',
            'price' => 80000,
            'stock' => 15
        ]);

        Book::create([
            'author_id' => $author5->id,
            'title' => 'Bertaruh Pada Api',
            'description' => 'Lagu penuh energi yang membakar semangat masa muda.',
            'price' => 90000,
            'stock' => 30
        ]);

        Book::create([
            'author_id' => $author5->id,
            'title' => 'Tuhan di Reruntuhan Kota',
            'description' => 'Lagu bertema kritik sosial dan refleksi diri.',
            'price' => 85000,
            'stock' => 20
        ]);
    }
}