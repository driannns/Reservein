<x-guest-layout>
    <div class="relative top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-8/12 border gap-8 shadow-lg rounded-2xl p-10"
        style="background-color: rgba(255, 255, 255, 0.7)">
        <p class="absolute top-5 right-5 text-sm font-medium">Already a member? <a class="text-[#4F3CC9]" href="{{ route('partnerLogin-form') }}">Sign In</a></p>
        <form method="POST" action="{{ route('partnerRegister') }}" class="w-8/12 mx-auto">
            <h1 class="text-xl font-bold mb-4" style="font-family:'Poppins', sans-serif;">Sign up as Partner to Reservin</h1>
            @csrf
            <div class="">
                <div class="mt-4">
                    <x-input-label for="username" :value="__('Username')" style="font-weight:700;"/>
                    <x-text-input id="username" class="block mt-1 w-full" type="text" name="username"
                        :value="old('username')" placeholder="User Name" required autofocus />
                    <x-input-error :messages="$errors->get('username')" />
                </div>
            </div>

            <!-- Email Address -->
            <div class="">
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" style="font-weight:700;"/>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        placeholder="Email" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" style="font-weight:700;"/>

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                    placeholder="Password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" style="font-weight:700;"/>

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" placeholder="Konfirmasi Password" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="mt-4">
                <div class="flex items-center mb-4">
                    <input id="default-checkbox" type="checkbox" required value="Check" name="termsofservice"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2">
                    <label for="default-checkbox"
                        class="ml-2 text-sm font-medium text-[#6E6D7A]">Creating an account means
                        you’re okay with our <span class="text-[#4F3CC9]">Terms of Service</span>, <span class="text-[#4F3CC9]">Privacy Policy</span>, and our default <span class="text-[#4F3CC9]">Notification
                        Settings</span>.</label>
                </div>
            </div>

            <div class=" mt-4">
                <button class="text-sm bg-[#3C6A91] text-white px-10 py-2 rounded-lg">
                    {{ __('Create Account') }}
                    <button>
            </div>

            <div class="mt-3 w-10/12">
                <p class="text-sm font-medium text-[#6E6D7A]">This site is protected by reCAPTCHA and the Google <span class="text-[#4F3CC9]">Privacy Policy</span> and <span class="text-[#4F3CC9]">Terms of Service</span> apply.</p>
            </div>
            <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a> -->
        </form>
    </div>
</x-guest-layout>
