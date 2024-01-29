@props(['name', 'active' => false])
<li>
    <a {{ $attributes }} class="{{ $active ? 'text-blue-500' : '' }} block mb-2 capitalize">
        {{ $name }}
    </a>
</li>
