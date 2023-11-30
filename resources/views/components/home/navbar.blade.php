<header class="antialiased">
    <nav class="border-gray-200 px-4 py-2.5 text-lg font-medium text-gray-900 dark:bg-gray-800 lg:px-6">
        @if (url()->current() === url(''))
            <div class="flex flex-wrap items-center justify-end">
                <a href="{{ url('/login') }}">
                    Sign In
                </a>
            </div>
        @else
            <div class="flex flex-wrap items-center justify-start">
                <a
                    class="flex items-center justify-start gap-x-2"
                    href="{{ url('/') }}"
                >
                    <svg
                        class="h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"
                        />
                    </svg>
                    Go Back
                </a>
            </div>
        @endif
    </nav>
</header>
