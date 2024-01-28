@props(['name', 'items'])
<x-form.field>
    <x-form.label :name="$name" />

    <select name="{{ $name }}" id="{{ $name }}" class="p-2 w-full">
        @foreach ($items as $item)
            <option value="{{ $item->id }}" {{ old($name) == $item->id ? 'selected' : '' }}>
                {{ $item->name }}</option>
        @endforeach
    </select>

    <x-form.error :name="$name" />
</x-form.field>
