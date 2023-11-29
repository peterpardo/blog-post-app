<button
    {{ $attributes->merge(['class' => 'w-full rounded-lg bg-cyan-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-cyan-700 focus:outline-none focus:ring-4 focus:ring-cyan-300 dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800', 'type' => 'button']) }}
>
    {{ $slot }}
</button>
