<x-layouts.main>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="mx-auto flex flex-col items-center justify-center px-6 py-8 md:h-screen lg:py-0">
            <a
                class="mb-6 flex items-center text-2xl font-semibold text-gray-900 dark:text-white"
                href="#"
            >
                <x-logo />
            </a>
            <div class="w-full rounded-lg bg-white shadow dark:border dark:border-gray-700 dark:bg-gray-800 sm:max-w-md md:mt-0 xl:p-0">
                <div class="space-y-4 p-6 sm:p-8 md:space-y-6">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-2xl">
                        Create Account
                    </h1>
                    <form
                        class="space-y-4 md:space-y-6"
                        action="#"
                    >
                        <div>
                            <x-forms.label for="first_name">
                                First name
                            </x-forms.label>
                            <x-forms.input
                                id="first_name"
                                name="first_name"
                                type="text"
                                placeholder="First Name..."
                                required
                            />
                        </div>
                        <div>
                            <x-forms.label for="last_name">
                                Last name
                            </x-forms.label>
                            <x-forms.input
                                id="last_name"
                                name="last_name"
                                type="text"
                                placeholder="Last Name..."
                                required
                            />
                        </div>
                        <div>
                            <x-forms.label for="email">
                                Email
                            </x-forms.label>
                            <x-forms.input
                                id="email"
                                name="email"
                                type="email"
                                placeholder="name@company.com"
                                required
                            />
                        </div>
                        <div>
                            <x-forms.label for="password">Password</x-forms.label>
                            <x-forms.input
                                id="password"
                                name="password"
                                type="password"
                                placeholder="••••••••"
                                required
                            />
                        </div>
                        <div>
                            <x-forms.label for="password">Confirm Password</x-forms.label>
                            <x-forms.input
                                id="password_confirmation"
                                name="password_confirmation"
                                type="password"
                                required
                            />
                        </div>
                        <div class="flex items-start">
                            <div class="flex h-5 items-center">
                                <x-forms.checkbox
                                    id="terms"
                                    type="checkbox"
                                    aria-describedby="terms"
                                    required=""
                                />
                            </div>
                            <div class="ml-3 text-sm">
                                <label
                                    class="font-light text-gray-500 dark:text-gray-300"
                                    for="terms"
                                >I accept the <a
                                        class="text-primary-600 dark:text-primary-500 font-medium hover:underline"
                                        href="#"
                                    >Terms and Conditions</a></label>
                            </div>
                        </div>
                        <button
                            class="bg-primary-600 hover:bg-primary-700 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 w-full rounded-lg px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4"
                            type="submit"
                        >Create an account</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a
                                class="text-primary-600 dark:text-primary-500 font-medium hover:underline"
                                href="{{ url('/login') }}"
                            >Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main>
