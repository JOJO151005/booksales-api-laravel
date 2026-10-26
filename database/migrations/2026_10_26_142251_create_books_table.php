<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        // Menghubungkan ke tabel authors (foreign key)
        $table->foreignId('author_id')->constrained('authors')->onDelete('cascade');
        $table->string('title');
        $table->text('description')->nullable();
        $table->integer('price');
        $table->integer('stock');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
