<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
    [
        'name' => 'Buya Hamka',
        'photo' => 'buya_hamka.jpg',
        'bio' => 'Ulama, sastrawan, dan filsuf asal Indonesia yang dikenal luas melalui karya-karya bernuansa keislaman dan moral.',
    ],

    [
        'name' => 'Quraish Shihab',
        'photo' => 'quraish_shihab.jpg',
        'bio' => 'Ulama dan mufasir Indonesia, mantan Menteri Agama, dikenal dengan tafsir modern yang kontekstual.',
    ],

    [
        'name' => 'Habiburrahman El Shirazy',
        'photo' => 'habiburrahman.jpg',
        'bio' => 'Penulis yang menulis lebih dari 50 novel dengan tema beragam, mulai dari cinta, keluarga, sosial, hingga fantasi seperti seri Bumi. ',
    ],

    [
        'name' => 'Tariq Ramadan',
        'photo' => 'tariq.jpg',
        'bio' => 'Pemikir Muslim kontemporer asal Swiss keturunan Mesir, dikenal karena gagasannya tentang Islam dan modernitas di dunia Barat.',
    ],

    [
        'name' => 'Asma Nadia',
        'photo' => 'asma_nadia.jpg',
        'bio' => 'Penulis dan aktivis literasi Muslimah Indonesia yang banyak menulis kisah inspiratif dengan pesan moral dan nilai Islam.',
    ],

    ];


public function getAuthors() {
    return $this->authors;
}
}
