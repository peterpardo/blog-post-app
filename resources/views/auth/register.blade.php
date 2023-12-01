<x-layouts.main>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="mx-auto flex flex-col items-center justify-center px-6 py-8">
            <a
                class="mb-6 flex items-center text-2xl font-semibold text-gray-900 dark:text-white"
                href="#"
            >
                <x-logo />
            </a>
            <div
                class="w-full rounded-lg bg-white shadow dark:border dark:border-gray-700 dark:bg-gray-800 sm:max-w-md md:mt-0 xl:p-0">
                <div class="space-y-4 p-6 sm:p-8 md:space-y-6">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-2xl">
                        Create Account
                    </h1>
                    <form
                        class="space-y-4 md:space-y-6"
                        method="POST"
                        action="{{ url('/register') }}"
                    >
                        @csrf
                        <div>
                            <x-forms.label
                                for="first_name"
                                :hasError="$errors->has('first_name')"
                            >
                                First name
                            </x-forms.label>
                            <x-forms.input
                                id="first_name"
                                name="first_name"
                                type="text"
                                value="{{ old('first_name') }}"
                                placeholder="First Name..."
                                required
                                :hasError="$errors->has('first_name')"
                            />
                            @error('first_name')
                                <x-forms.error-message>
                                    {{ $message }}
                                </x-forms.error-message>
                            @enderror
                        </div>
                        <div>
                            <x-forms.label
                                for="last_name"
                                :hasError="$errors->has('last_name')"
                            >
                                Last name
                            </x-forms.label>
                            <x-forms.input
                                id="last_name"
                                name="last_name"
                                type="text"
                                value="{{ old('last_name') }}"
                                placeholder="Last Name..."
                                required
                                :hasError="$errors->has('last_name')"
                            />
                            @error('last_name')
                                <x-forms.error-message>
                                    {{ $message }}
                                </x-forms.error-message>
                            @enderror
                        </div>
                        <div>
                            <x-forms.label for="email">
                                Email
                            </x-forms.label>
                            <x-forms.input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                placeholder="name@company.com"
                                required
                                :hasError="$errors->has('email')"
                            />
                            @error('email')
                                <x-forms.error-message>
                                    {{ $message }}
                                </x-forms.error-message>
                            @enderror
                        </div>
                        <div>
                            <x-forms.label
                                for="password"
                                :hasError="$errors->has('password')"
                            >
                                Password
                            </x-forms.label>
                            <x-forms.input
                                id="password"
                                name="password"
                                type="password"
                                placeholder="••••••••"
                                required
                                :hasError="$errors->has('password')"
                            />
                            @error('password')
                                <x-forms.error-message>
                                    {{ $message }}
                                </x-forms.error-message>
                            @enderror
                        </div>
                        <div>
                            <x-forms.label for="password">Confirm
                                Password</x-forms.label>
                            <x-forms.input
                                id="password_confirmation"
                                name="password_confirmation"
                                type="password"
                                required
                            />
                        </div>
                        <button
                            class="w-full rounded-lg bg-cyan-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-cyan-700 focus:outline-none focus:ring-4 focus:ring-cyan-300 dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800"
                            type="submit"
                        >Create an account</button>
                        <p
                            class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a
                                class="font-medium text-cyan-600 hover:underline dark:text-cyan-500"
                                href="{{ url('/login') }}"
                            >Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main>
