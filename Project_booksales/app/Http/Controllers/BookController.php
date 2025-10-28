<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $data = new Book(); // membuat object
        $books = $data->getBooks(); //mengakses method getbooks

        return view('books', ['books' => $books]);//mengirim data buku  ke view
    }
}
