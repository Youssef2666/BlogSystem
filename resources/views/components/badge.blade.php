@props(['textColor', 'bgColor'])

@php
    $textColor = match ($textColor) {
        'blue' => 'text-blue-100',
        'cyan' => 'text-cyan-100',
        'emerald' => 'text-emerald-100',
        'gray' => 'text-gray-100',
        'purple' => 'text-purple-100',
        'pink' => 'text-pink-100',
        'red' => 'text-red-100',
        'yellow' => 'text-yellow-100',
        default => 'text-gray-100'    
    };

    $bgColor = match ($bgColor) {
        'blue' => 'bg-blue-800',
        'cyan' => 'bg-cyan-800',
        'emerald' => 'bg-emerald-600',
        'gray' => 'bg-gray-800',
        'purple' => 'bg-purple-600',
        'pink' => 'bg-pink-600',
        'red' => 'bg-red-600',
        'yellow' => 'bg-yellow-600',
        default => 'bg-gray-800'    
    };
@endphp

<button {{ $attributes }} class="{{ $textColor }} {{ $bgColor }} rounded-xl px-3 py-1 text-base">
    {{ $slot }} </button>