<?php

use App\Models\Book;
use Flux\Flux;
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

    public function delete(Book $book){
        $book->delete($book->id);
        Flux::toast(text:'Book has been deleted.', variant: 'success');
        $this->redirect(route('dashboard', true));

    }

};