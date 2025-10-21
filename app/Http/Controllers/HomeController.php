<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data['books'] = Book::All();
        return view('welcome')->with($data);
    }
}
