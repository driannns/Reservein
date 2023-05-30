<x-guest-layout>
    <div class="relative top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-8/12 flex border gap-8 shadow-lg rounded-2xl p-10"
        style="background-color: rgba(255, 255, 255, 0.7)">
        <a class="w-1/2" href="{{ route('register') }}">
            <button class="w-full bg-[#3C6A91] py-9 px-7 hover:scale-105 transition rounded-xl" type='submit'>
                <div id="customer">
                    <div class="flex justify-center mb-6">
                        <img class="w-6/12" src="/assets/svg/customer.png" alt="">
                    </div>
                    <p class="text-4xl font-bold text-white" style="font-family: 'Poppins', sans-serif;">
                        Customer</p>
                </div>
            </button>
        </a>
        <a class="w-1/2" href="{{ route('partnerRegister-form') }}">
            <button class="w-full bg-[#3C6A91] py-9 px-7 hover:scale-105 transition rounded-xl" type='submit'>
                <div id="partner">
                    <div class="flex justify-center mb-6">
                        <img class="w-6/12" src="/assets/svg/partner.png" alt="">
                    </div>
                    <p class="text-4xl font-bold text-white" style="font-family: 'Poppins', sans-serif;">Partner</p>
                </div>
            </button>
        </a>
    </div>
</x-guest-layout>
