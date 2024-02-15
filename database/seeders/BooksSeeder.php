<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            Book::create([
                'titulo' => '¿Y si lo probamos...',
                'autor' => 'john@example.com',
            ]);

            Book::create([
                'titulo' => 'John Doe',
                'autor' => 'john@example.com',
            ]);
    }
}
