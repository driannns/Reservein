<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="py-10 text-white text-center">

        <h1 class="Poppins text-5xl font-bold" style="font-family:'Poppins', sans-serif;">Reservein.CO</h1>
        <p class="PTserif text-3xl" style="font-family: 'PT Serif', serif;">Effortless Meeting At Your Finger Tips</p>
    </div>
    <form method="POST" action="{{ route('login') }}" class="w-7/12 mx-auto">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between text-white mt-4">
            <div>    
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div>    
                @if (Route::has('password.request'))
                <a class="underline text-sm hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ml-3 text-3xl" style="margin: auto; font-size: 20px ;padding: 20px 50px;">
                {{ __('LOGIN') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
