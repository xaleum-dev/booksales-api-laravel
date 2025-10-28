<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
     public function index(){
        $data = new Author(); // membuat object
        $authors = $data->getAuthors(); //mengakses method

        return view('authors', ['authors' => $authors]);//mengirim data author  ke view
    }
}
