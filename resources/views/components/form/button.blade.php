@props(['text'])
<x-form.field>
    <button type="submit"
        class="flex w-1/4 justify-center rounded-full bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 uppercase">{{ $text }}</button>
</x-form.field>
