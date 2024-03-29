@props(['name', 'value' => ''])
<x-form.field>
    <x-form.label :name="$name" />

    <textarea class="border border-gray-400 p-2 w-full" name="{{ $name }}" id="{{ $name }}" rows="5"
        required>{{ old($name) ?? $value }}</textarea>

    <x-form.error :name="$name" />
</x-form.field>
