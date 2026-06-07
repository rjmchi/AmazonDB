
<div>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-between">
                <h2 class="w-4/5 mx-auto text-2xl font-bold text-accent">New Book Entry</h2>
                <flux:button variant="primary" size="sm" icon="arrow-path" wire:click='reorder'>Reorder</flux:button>
            </div>            
            <form method="POST" class="p-4 space-y-2" wire:submit='addBook'>

                <flux:input label="Title:" name="title" wire:model='title' placeholder="Book Title"/>
                <flux:input label="Link:" name="link" wire:model='link' placeholder="Amazon Link"/>
                <flux:textarea label="Description:" name="description" wire:model='description' placeholder="Description" />

            <div>
                
                @if ($image)
                    <div class="mt-3" wire:transition>
                        <img src="{{ $image->temporaryUrl() }}" class="h-32 w-auto rounded border border-gray-300" alt="Preview">
                    </div>
                @endif
                
                <div wire:loading wire:target="image" class="mt-2 text-sm text-gray-500">
                    Uploading...
                </div>
            </div>

                <div class="flex gap-5">
                    <div class="flex-4">
                        <flux:input label="Cover Image" type="file" name="image" wire:model='image' />
                    </div>        
                    <div class="flex-1">       
                        <flux:input label="Sort order" name="sort_order" wire:model='sort_order'   />
                    </div>                         
                </div>

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