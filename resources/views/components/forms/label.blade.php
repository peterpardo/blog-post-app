@props(['hasError' => false])

@php
    $textColor = 'text-gray-900 dark:text-white';

    if ($hasError) {
        $textColor = 'text-red-700 dark:text-red-500';
    }
@endphp

<label {{ $attributes->merge(['class' => 'mb-2 block text-sm font-medium ' . $textColor]) }}>
    {{ $slot }}
</label>
