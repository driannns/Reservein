<x-app-layout>
    <x-slot name="header">
        <h2 class="Poppins text-center font-bold text-2xl text-gray-800 leading-tight" style="font-family:'Poppins', sans-serif;">
            Reversein.CO
        </h2>
        <p class="PTserif text-xl text-center" style="font-family: 'PT Serif', serif;">Effortless Meeting At Your Finger Tips</p>

        @include('profile.partials.navigation')
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h1 class="text-3xl font-bold mb-5">Edit your password</h1>
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
