<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
    [
        'title' => 'Pulang',
        'description' => 'Pertualangan seorang pemuda yang kembali ke desa kelahirannya',
        'price' => 40000,
        'stock' => 15,
        'cover_photo' => 'pulang.jpg',
        'genre_id' => 1,
        'author_id' => 1,
    ],

    [
        'title' => 'Sebuah seni untuk bersikap bodo amat',
        'description' => 'Buku yang membahas tentang kehidupan dan filosofi hidup seseorang.',
        'price' => 25000,
        'stock' => 5,
        'cover_photo' => 'sebuah_seni.jpg',
        'genre_id' => 3,
        'author_id' => 3,
    ],
];

public function getBooks() {
    return $this->books;
}
}
