<x-app-layout>
    <div class="w-10/12 mx-auto text-[#051036]">
        <div class="flex items-center justify-between mx-auto pt-10" style="font-family: 'Poppins', sans-serif;">
        
            <div class="flex items-center gap-2">
                <div class="w-7 h-7 rounded-full grid place-items-center bg-[#3c6a91]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="white"
                        class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <p>Personal Details</p>
            </div>
            <hr class="border-[#e1e1e1] w-1/5">
            <div class="flex items-center gap-2">
            <div class="w-7 h-7 rounded-full grid place-items-center font-semibold bg-[#e4e5ec] text-[#3554D1]">
                    2
                </div>
                <p>Payment Details</p>
            </div>
            <hr class="border-[#e1e1e1] w-3/12">
            <div class="flex items-center gap-2">
                <div class="w-7 h-7 rounded-full grid place-items-center font-semibold bg-[#e4e5ec] text-[#3554D1]">
                    3
                </div>
                <p>Final Step</p>
            </div>
        </div>
        @include('order.partials.personal-detail')
    </div>
</x-app-layout>
