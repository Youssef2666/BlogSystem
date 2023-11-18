@props(['active'])

@php
    $classes = $active ?? false ? 'inline-flex items-center hover:text-yellow-900 text-sm text-yellow-500  ml-2.5' : 'inline-flex items-center hover:text-gray-900 text-sm text-yellow-500  ml-2.5';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
