<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>
    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Login into Your account.</h2>
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="email">e-mail</x-form-label>
                        <div class="mt-2">
                            <x-form-input
                                name="email"
                                id="email"
                                type="email"
                                :value="old('email')"
                                required
                            />
                            <x-form-error name="email"/>
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input
                                name="password"
                                id="password"
                                type="password"
                                :value="old('password')"
                                required
                            />
                            <x-form-error name="password"/>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-between">
            <div>
                <x-form-error name="notification"/>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <x-a-button href="/">Cancel</x-a-button>
                <x-button>Login</x-button>
            </div>
        </div>

    </form>
</x-layout>
