@props(['color' => 'success'])

@php
    $alertColor = 'bg-green-50 text-green-800 dark:bg-gray-800 dark:text-green-400';
    if ($color === 'error') {
        $alertColor = 'bg-red-50 text-red-800 dark:bg-gray-800 dark:text-red-400';
    } elseif ($color === 'info') {
        $alertColor = 'bg-blue-50 text-blue-800 dark:bg-gray-800 dark:text-blue-400';
    } elseif ($color === 'warning') {
        $alertColor = 'bg-yellow-50 text-yellow-800 dark:bg-gray-800 dark:text-yellow-400';
    }
@endphp

<div
    {{ $attributes->merge(['class' => 'mb-4 rounded-lg  p-4 text-sm ' . $alertColor, 'role' => 'alert']) }}>
    {{ $slot }}
</div>
