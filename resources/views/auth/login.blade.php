<x-layouts.home>
    <section class="dark:bg-gray-900">
        <div class="mx-auto flex flex-col items-center justify-center px-6 py-8">
            <a
                class="mb-6"
                href="#"
            >
                <x-logo />
            </a>
            <div
                class="w-full rounded-lg bg-white shadow dark:border dark:border-gray-700 dark:bg-gray-800 sm:max-w-md md:mt-0 xl:p-0">
                <div class="space-y-4 p-6 sm:p-8 md:space-y-6">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-2xl">
                        Sign in to your account
                    </h1>

                    {{-- Alert --}}
                    @if (session('status'))
                        <x-alert :color="session('status')">
                            {{ session('message') }}
                        </x-alert>
                    @endif

                    {{-- Sign in Form --}}
                    <form
                        class="space-y-4 md:space-y-6"
                        action="{{ route('login') }}"
                        method="POST"
                    >
                        @csrf
                        <div>
                            <x-forms.label
                                for="email"
                                :hasError="$errors->has('email')"
                            >
                                Your email
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
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex h-5 items-center">
                                    <x-forms.checkbox
                                        id="remember"
                                        type="checkbox"
                                        aria-describedby="remember"
                                    />
                                </div>
                                <div class="ml-3 text-sm">
                                    <label
                                        class="text-gray-500 dark:text-gray-300"
                                        for="remember"
                                    >Remember me</label>
                                </div>
                            </div>
                            <a
                                class="text-sm font-medium text-cyan-600 hover:underline dark:text-cyan-500"
                                href="#"
                            >Forgot password?</a>
                        </div>
                        <x-forms.btn-confirm type="submit">Sign
                            in</x-forms.btn-confirm>
                        <p
                            class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Don’t have an account yet? <a
                                class="font-medium text-cyan-600 hover:underline dark:text-cyan-500"
                                href="{{ url('/register') }}"
                            >Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </x-layouts.main>
