<?php

use App\Models\Book;
use Livewire\Component;

new class extends Component
{   
    public Book $book;
    
    public function mount(Book $book){
        $this->book = $book;
    }
    
    public function moveUp() {
        $this->book->sort_order -=1;
        $this->book->save();
        $this->redirect(route('dashboard', true));
    }

    public function moveDown() {
        $this->book->sort_order +=1;
        $this->book->save();
        $this->redirect(route('dashboard', true));
    }
};