@props(['name', 'to'])
<li>
    <a href="{{ route($to) }}" class="{{ request()->routeIs($to) ? 'text-blue-500' : '' }} block mb-2 capitalize">
        {{ $name }}
    </a>
</li>
