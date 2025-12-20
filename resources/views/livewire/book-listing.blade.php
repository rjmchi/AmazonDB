<div class="mb-5 p-4 border rounded bg-teal-50">
    <a href="{{ $book->link }}" class="flex">
        <img class="h-auto w-[200px]" src="{{ asset('/images/' . $book->image) }}">
        <div class="ml-4">
            <p class="text-2xl font-medium">{{ $book->title }}</p>
            <p class="mt-3">{{ $book->description }}</p>
        </div>
    </a>
    <p class="flex space-x-2 mt-3 p-3">
        {{ $book->sort_order }}
        <a href="">Edit</a>
        <a href="">Delete</a>
        <button wire:click='up'>Up</button>
        <button wire:click='down'>Down</button>
    </p>
</div>
