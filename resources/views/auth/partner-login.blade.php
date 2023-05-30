<x-guest-layout>
    <div class="relative top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-8/12 border shadow-lg rounded-2xl p-16"
        style="background-color: rgba(255, 255, 255, 0.7)">
        <!-- Session Status -->
        <!-- <x-auth-session-status class="mb-4" :status="session('status')" /> -->
        <form method="POST" action="{{ route('partnerLogin') }}" class="w-7/12 mx-auto">
            <h1 class="text-2xl font-bold mb-4" style="font-family:'Poppins', sans-serif;">Sign in as Partner to
                Reservin</h1>
            @csrf
            @if(Session::has('error'))
            <div class="flex p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50"
                role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">Warning alert!</span> {{ Session::get('error') }}
                </div>
            </div>
            @endif
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" style="font-weight:700;" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-5">
                <div class="flex justify-between">
                    <x-input-label for="password" :value="__('Password')" style="font-weight:700;" />
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
