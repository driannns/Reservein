
<x-guest-layout>
    <div class="py-8 text-white text-center">

        <h1 class="Poppins text-5xl font-bold" style="font-family:'Poppins', sans-serif;">Reservein.CO</h1>
        <p class="PTserif text-2xl" style="font-family: 'PT Serif', serif;">Effortless Meeting At Your Finger Tips</p>
    </div>
    <form method="POST" action="{{ route('register') }}" class="w-7/12 mx-auto">
        @csrf
        <!-- Role -->
    <input type="hidden" name="role" value="{{session('data')}}">
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Full Name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="">

            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <!-- Nomor Telepon-->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Phone Number')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="nomor" :value="old('nomor')" placeholder="+62 .." required autofocus autocomplete="nomor" />
            <x-input-error :messages="$errors->get('nomor')" class="mt-2" />
        </div>
        
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" 
                            placeholder="Konfirmasi Password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            
            <x-primary-button class="ml-4" style="margin: auto; font-size: 20px ;padding: 20px 50px;">
                {{ __('Register') }}
            </x-primary-button>
        </div>
        <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a> -->
    </form>
</x-guest-layout>
