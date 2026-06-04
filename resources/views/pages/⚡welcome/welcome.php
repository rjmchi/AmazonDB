<?php

use App\Models\Book;
use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts::guest')]class extends Component
{

    public function with() {
        return ['books'=> Book::orderBy('sort_order', 'asc')->get()];
    }
};
