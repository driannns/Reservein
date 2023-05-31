<x-app-layout>
    <x-slot name="header">
        <h2 class="Poppins text-center font-bold text-2xl text-gray-800 leading-tight" style="font-family:'Poppins', sans-serif;">
            Reversein.CO
        </h2>
        <p class="PTserif text-xl text-center text-[#051036]" style="font-family: 'PT Serif', serif;">Effortless Meeting At Your Finger Tips</p>

        @include('profile.partials.navigation')
    </x-slot>

    <div class="py-12 text-[#051036]">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg h-fit">
                <div class="w-full">
                    @include('profile.partials.faqs-information')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
