<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
private $genres = [
        [
            'name' => 'Filsafat & Tasawuf Islam',
            'description' => 'Genre yang membahas pemikiran mendalam tentang makna hidup, hubungan manusia dengan Tuhan, serta perjalanan spiritual menuju kesempurnaan diri berdasarkan ajaran Islam.',
        ],
        [
            'name' => 'Tasawuf & Etika Islam',
            'description' => 'Fokus pada pembinaan akhlak dan pembersihan hati, mengajarkan cara mencapai ketenangan batin melalui nilai-nilai moral dan spiritual dalam Islam.',
        ],
        [
            'name' => 'Tafsir Al-Qur’an',
            'description' => 'Genre yang mengulas makna ayat-ayat Al-Qur’an secara mendalam, menjelaskan konteks, hikmah, dan penerapannya dalam kehidupan modern.',
        ],
        [
            'name' => 'Fiksi Religi',
            'description' => 'Cerita atau novel yang menggabungkan unsur naratif dengan nilai-nilai keislaman, bertujuan menginspirasi pembaca melalui kisah cinta, perjuangan, dan keimanan.',
        ],
        [
            'name' => 'Pemikiran Islam Kontemporer',
            'description' => 'Genre yang mengeksplorasi isu-isu modern seperti sosial, politik, dan budaya dari sudut pandang Islam, seringkali menekankan dialog antara tradisi dan modernitas.',
        ],
        [
            'name' => 'Fiksi Religi & Inspiratif',
            'description' => 'Genre yang menampilkan kisah nyata atau fiksi dengan pesan moral positif, menggugah semangat, dan memperkuat nilai-nilai Islam dalam kehidupan sehari-hari.',
        ],
    ];

    public function getGenres() {
        return $this->genres;
    }
}
