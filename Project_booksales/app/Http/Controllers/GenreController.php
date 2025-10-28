<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){
        $data = new Genre(); // membuat object
        $genres = $data->getGenres(); //mengakses method getbooks

        return view('genres', ['genres' => $genres]); //mengirim data buku  ke view
    }
}

