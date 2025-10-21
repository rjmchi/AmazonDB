<x-layouts.guest :title="__('MyBooks')">

    <div class="py-3">

        <div class="m-4 p-5 border rounded-lg bg-white">
            @foreach ($books as $book)
                <div class="mb-5 p-4 border rounded bg-neutral-100">
                    <a href="{{ $book->link }}" class="flex">
                        <img class="w-40" src="{{ asset('/images/' . $book->image) }}">
                        <div class="ml-4">
                            <p class="text-2xl font-medium">{{ $book->title }}</p>
                            <p class="mt-3">{{ $book->description }}</p>

                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
</x-layouts.guest>
