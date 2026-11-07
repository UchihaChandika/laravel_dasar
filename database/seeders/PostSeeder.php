<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Belajar Laravel Dasar',
            'image' => 'https://dummyimage.com/850x350/dee2e6/6c757d.jpg',
            'excerpt' => 'Mengenal framework Laravel untuk pengembangan web.',
            'body' => 'Laravel merupakan framework PHP yang digunakan untuk membangun aplikasi web.'
        ]);

        Post::create([
            'title' => 'Belajar Laravel Dasar',
            'image' => 'https://dummyimage.com/850x350/dee2e6/6c757d.jpg',
            'excerpt' => 'Mengenal framework Laravel untuk pengembangan web.',
            'body' => 'Laravel merupakan framework PHP yang digunakan untuk membangun aplikasi web.'
        ]);

        Post::create([
            'title' => 'Belajar Laravel Dasar',
            'image' => 'https://dummyimage.com/850x350/dee2e6/6c757d.jpg',
            'excerpt' => 'Mengenal framework Laravel untuk pengembangan web.',
            'body' => 'Laravel merupakan framework PHP yang digunakan untuk membangun aplikasi web.'
        ]);

        Post::create([
            'title' => 'Belajar Laravel Dasar',
            'image' => 'https://dummyimage.com/850x350/dee2e6/6c757d.jpg',
            'excerpt' => 'Mengenal framework Laravel untuk pengembangan web.',
            'body' => 'Laravel merupakan framework PHP yang digunakan untuk membangun aplikasi web.'
        ]);

        Post::create([
            'title' => 'Belajar Laravel Dasar',
            'image' => 'https://dummyimage.com/850x350/dee2e6/6c757d.jpg',
            'excerpt' => 'Mengenal framework Laravel untuk pengembangan web.',
            'body' => 'Laravel merupakan framework PHP yang digunakan untuk membangun aplikasi web.'
        ]);
    }
}
