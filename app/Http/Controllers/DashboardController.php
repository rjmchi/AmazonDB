<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $data['books'] = Book::orderBy('sort_order')->get();
        return view('dashboard')->with($data);
    }
}
