    <div class="py-3">

        <div class="m-4 p-5 border rounded-lg bg-white grid grid-cols-2">
            @foreach ($books as $book)
                <div class="mb-5 p-4 border rounded bg-neutral-100">
                    <a href="{{ $book->link }}" class="flex">
                        <img class="h-50" src="{{ asset('storage/'.$book->image) }}">
                        <div class="ml-4">
                            <p class="text-2xl font-medium">{{ $book->title }}</p>
                            <p class="mt-3">{{ $book->description }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>