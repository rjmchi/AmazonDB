
<div>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h2 class="w-4/5 mx-auto text-2xl font-bold text-accent">New Book Entry</h2>
            <form method="POST" class="p-4 space-y-2" wire:submit='addBook'>

                <flux:input label="Title:" name="title" wire:model='title' placeholder="Book Title"/>
                <flux:input label="Link:" name="link" wire:model='link' placeholder="Amazon Link"/>
                <flux:textarea label="Description:" name="description" wire:model='description' placeholder="Description" />
                <flux:input label="Cover Image" type="file" name="cover_image" wire:model='cover_image' />


                <flux:button variant="primary" type="submit" icon="plus">Add Book</flux:button>

            </form>
        </div>

        <div class="m-4 p-5 border rounded bg-white">
            @foreach ($books as $book)
                <livewire:book-listing :book=$book wire:key='$book->id' />
            @endforeach
        </div>

    </div>
</div>