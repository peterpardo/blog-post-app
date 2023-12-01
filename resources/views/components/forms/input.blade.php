@props(['hasError' => false])

@php
    $errorColor = 'focus:ring-cyan-600 focus:border-cyan-60 border-gray-300 bg-gray-50';

    if ($hasError) {
        $errorColor = ' border-red-500 bg-red-50 focus:border-red-500 focus:ring-red-500';
    }
@endphp

<input {{ $attributes->merge(['class' => 'block w-full rounded-lg border  p-2.5 text-gray-900 sm:text-sm outline-none ' . $errorColor]) }} />
