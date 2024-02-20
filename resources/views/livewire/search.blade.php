<form wire:submit="search">
    <div class="flex mb-3">
        <div class="w-9/12">
            <label
                for="search"
                class="block"
            >
                <input
                    wire:model="query"
                    type="text"
                    placeholder="Search..."
                    class="w-full p-3 shadow"
                >
            </label>
        </div>

        <button
            type="submit"
            class="bg-green-500 text-white w-3/12"
        >
            Search
        </button>
    </div>

    @error('query')
        <p class="bg-red-500 text-white p-3 mb-3">
            {{ $message }}
        </p>
    @enderror
</form>
