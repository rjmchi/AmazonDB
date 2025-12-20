<x-layouts.app :title="__('Dashboard')">

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h2 class="w-4/5 mx-auto text-2xl font-bold text-teal-700">New Book Entry</h2>
            <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data" class="p-4">
                @csrf

                <label for="title" class="mt-3 block text-base font-medium text-black">Title:</label>
                <input type="text" name="title" placeholder="Book Title"
                    class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />

                <label for="link" class="mt-3 block text-base font-medium text-black">Link:</label>
                <input type="text" name="link" placeholder="Amazon Link"
                    class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" />
                <x-input-error :messages="$errors->get('link')" class="mt-2" />

                <label for="description" class="mt-3 block text-base font-medium text-black">
                    Book Description
                </label>
                <textarea name="description" rows="3" placeholder="Design Description:"
                    class="w-full rounded-lg border-[1.5px] border-form-stroke py-3 px-5 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"></textarea>

                <label for="imagefile" class="mt-3 block text-base font-medium text-black">
                    Image File:
                </label>
                <input type="file" name="imagefile"
                    class="w-full cursor-pointer rounded-lg border-[1.5px] border-form-stroke font-medium text-body-color placeholder-body-color outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-form-stroke file:bg-[#F5F7FD] file:py-3 file:px-5 file:text-body-color file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" />
                <x-input-error :messages="$errors->get('imagefile')" class="mt-2" />

                <flux:button variant="primary" class="bg-teal-700 hover:bg-teal-900 mt-2" type="submit"
                    data-test="submit-button">
                    Submit
                </flux:button>

            </form>
        </div>

        <div class="m-4 p-5 border rounded bg-white">
            @foreach ($books as $book)
                <livewire:book-listing :book=$book wire:key='$book->id' />
            @endforeach
        </div>

    </div>
</x-layouts.app>
