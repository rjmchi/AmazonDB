<?php

use App\Models\Book;
use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component
{
    use WithFileUploads;
    
    public $title='';
    public $link = '';
    public $description = '';
    public $cover_image;


    public function with() {
        return ['books'=> Book::orderBy('sort_order', 'asc')->get()];
    }

    public function addBook() {

    }
};