<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookListing extends Component
{
    public $book;

    public function mount(Book $book){
        $this->book = $book;
    }
    public function render()
    {
        return view('livewire.book-listing');
    }

    public function up() {
        $this->book->sort_order -=1;
        $this->book->save();
    }

    public function down() {
        $this->book->sort_order +=1;
        $this->book->save();
    }
}
