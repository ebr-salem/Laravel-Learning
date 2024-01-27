<x-layout>
    <div class="p-6 m-auto w-1/2">
        <form method="POST" action="/admin/posts/store">
            @csrf

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                    title
                </label>

                <input class="border border-gray-400 p-2 w-full" type="text" name="title" value="{{ old('title') }}"
                    id="title" required>

                @error('title')
                    <div class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="exerpt">
                    exerpt
                </label>

                <input class="border border-gray-400 p-2 w-full" type="text" name="exerpt"
                    value="{{ old('exerpt') }}" id="exerpt" required>

                @error('exerpt')
                    <div class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category">
                    category
                </label>

                <select name="category_id" id="category" class="p-2 w-full">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}</option>
                    @endforeach
                </select>

                @error('category')
                    <div class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">
                    body
                </label>

                <textarea class="border border-gray-400 p-2 w-full" name="body" id="body" rows="5" required>{{ old('body') }}</textarea>

                @error('body')
                    <div class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit"
                    class="flex w-1/4 justify-center rounded-full bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Publish</button>
            </div>
        </form>
    </div>
</x-layout>
