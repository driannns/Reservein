<x-guest-layout>
    <div class="relative top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-8/12 border shadow-lg rounded-2xl p-16 bg-white bg-opacity-70" style="background-color: rgba(255, 255, 255, 0.7)">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <p class="absolute top-5 right-5 text-sm font-medium">Not a member? <a class="text-[#4F3CC9]" href="{{ route('register') }}">Sign up now</a></p>
        <form method="POST" action="{{ route('login') }}" class="w-7/12 mx-auto">
            <h1 class="text-2xl font-bold mb-4" style="font-family:'Poppins', sans-serif;">Sign in as Customer to Reservin</h1>
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" style="font-weight:700;"/>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-5">
                <div class="flex justify-between">
                    <x-input-label for="password" :value="__('Password')" style="font-weight:700;"/>
                    <div>
                        @if (Route::has('password.request'))
                        <a class="text-sm text-[#4F3CC9] hover:text-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                    </div>
                </div>

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mt-4">

                <button class="text-sm bg-[#3C6A91] text-white px-10 py-2 rounded-lg">
                    {{ __('Sign in') }}
                    <button>
            </div>
        </form>
    </div>
</x-guest-layout>
