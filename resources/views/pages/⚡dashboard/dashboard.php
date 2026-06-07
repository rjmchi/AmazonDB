<?php

use App\Models\Book;
use Flux\Flux;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component
{
    use WithFileUploads;
    
    #[Validate('required')]
    public $title='';
    #[Validate('required')]
    public $link = '';
    #[Validate('nullable')]
    public $description = '';
    #[Validate('nullable|integer')]
    public $sort_order=5;
    #[Validate('nullable|image|max:2048')]
    public $image;

    public function with() {
        return ['books'=> Book::orderBy('sort_order', 'asc')->get()];
    }

    public function addBook() {
        $validated = $this->validate();

        if ($this->image){
            $validated['image'] = $this->image->store ('images', 'public');
        }

        Book::create($validated);
        $this->reset();

        Flux::toast(text:'Book has been added.', variant: 'success');
        $this->redirectRoute('dashboard', true);
    }

    public function reorder() {
        $books = Book::orderBy('sort_order', 'asc')->get();

        $sort_order = 5;

        foreach($books as $book){
            $book->sort_order = $sort_order;
            $book->save();
            $sort_order += 5;
        }
        Flux::toast(text:'Book have been reorderd.', variant: 'success');
        $this->redirectRoute('dashboard', true);        
    }

};