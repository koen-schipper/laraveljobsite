<x-layout>
    <div class="mx-4">
        <x-card class='!p-10 max-w-xl mx-auto mt-12'>
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Login
                </h2>
                <p class="mb-4">Log in to post jobs</p>
            </header>

            <form method='POST' action="/authenticate">
                @csrf
                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">Email</label>
                    <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                        value="{{ old('email') }}" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="inline-block text-lg mb-2">
                        Password
                    </label>
                    <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 flex justify-between">
                    <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                        Sign In
                    </button>

                    <a href='/auth/redirect' class="bg-black text-white rounded py-3 px-4 ">
                        Sign In with GitHub
                    </a>
                </div>

                <div class="mt-8">
                    <p>
                        Don't have an account?
                        <a href="/register" class="text-laravel">Register</a>
                    </p>
                </div>
            </form>
        </x-card>
    </div>
</x-layout>
