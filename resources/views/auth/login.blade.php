<x-guest-layout>
    <div class="relative top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-8/12 border shadow-lg rounded-2xl p-16" style="background-color: rgba(255, 255, 255, 0.7)">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('login') }}" class="w-7/12 mx-auto">
            <h1 class="text-2xl font-bold mb-4" style="font-family:'Poppins', sans-serif;">Sign in to Reservin</h1>
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

            <!-- Remember Me -->
            <div class="flex items-center justify-between mt-4">
                <!-- <div>    
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
                </label>
            </div> -->
            </div>

            <div class="">

                <button class="text-sm bg-[#3C6A91] text-white px-10 py-2 rounded-lg">
                    {{ __('Sign in') }}
                    <button>
            </div>
        </form>
    </div>
</x-guest-layout>
