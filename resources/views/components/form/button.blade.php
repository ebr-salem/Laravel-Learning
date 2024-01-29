@props(['text', 'color' => 'blue'])
<x-form.field>
    <button type="submit"
        {{ $attributes->merge(['class' => "flex w-1/4 justify-center rounded-full bg-$color-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-$color-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 uppercase"]) }}>{{ $text }}</button>
</x-form.field>
