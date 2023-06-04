<div class="flex py-16">
    <div class="w-4/6">
        <form class="grid gap-3" action="{{ route('confirmPaymentStore', $room->id) }}" method="post">
            @csrf
            <h1 class="font-semibold">Your Order Payment Detail</h1>
            <div class="flex items-center gap-3 border border-[#dddddd]">
                @if( $paymentInfo['paymentmethod'] == 'BCA Bank')
                <img class="w-1/12" src="/assets/payment/bca.png" alt="Photo of BCA Bank">
                <p>BCA Bank</p>
                @elseif( $paymentInfo['paymentmethod'] == 'Mandiri Bank')
                <img class="w-1/12" src="/assets/payment/mandiri.png" alt="Photo of Mandiri Bank">
                <p>Mandiri Bank</p>
                @elseif( $paymentInfo['paymentmethod'] == 'BRI Bank')
                <img class="w-1/12" src="/assets/payment/bri.png" alt="Photo of BRI Bank">
                <p>BRI Bank</p>
                @elseif( $paymentInfo['paymentmethod'] == 'BNI Bank')
                <img class="w-1/12" src="/assets/payment/bni.png" alt="Photo of BNI Bank">
                <p>BNI Bank</p>
                @elseif( $paymentInfo['paymentmethod'] == 'Permata Bank')
                <img class="w-1/12" src="/assets/payment/permatabank.png" alt="Photo of Permata Bank">
                <p>Permata Bank</p>
                @elseif( $paymentInfo['paymentmethod'] == 'Sea Bank')
                <img class="w-1/12" src="/assets/payment/seabank.png" alt="Photo of Sea Bank">
                <p>Sea Bank</p>
                @endif
            </div>
            <div>
                <p class="font-semibold">Virtual Account</p>
                <div class="border border-[#dddddd] text-center py-4 font-bold text-xl text-[#3554D1]">
                    {{ $virtualNumber }}
                </div>
            </div>
            <p class="text-[#697488] text-sm">By proceeding with this reservation, I agree to ReserveIn Terms of
                Use and Privacy Policy.</p>
            <div class="flex gap-4 mt-3">
                <a href=""><button class="bg-white text-[#b0b0b0] py-4 px-4 rounded-lg">Cancel</button></a>
                <a href=""><button class="bg-[#3554D1] text-white py-4 px-4 rounded-lg"
                        type="submit">
                        <div class="flex items-center gap-2">
                            Confirm Payment
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                        </div>
                    </button>
                </a>
            </div>
        </form>

    </div>
    <div class="w-2/6 h-fit ml-16 p-5 border border-[#dddddd]">
        <h1 class="text-xl font-bold mb-4">Your booking details</h1>
        <div class="flex w-full">
            <div class="w-2/6 mt-1 grid place-items-center">
                <img class="w-full" src="/room/{{ $room->foto1 }}" alt="Photo">
            </div>
            <div class="w-4/6 h-full ml-3 flex flex-col justify-between">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#F8D448" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#F8D448" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#F8D448" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#F8D448" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#F8D448" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#F8D448" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#F8D448" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#F8D448" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#F8D448" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#F8D448" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                </div>
                <h1 class="mt-3 font-semibold">{{ $room->room_name }}, {{ $room->location }}</h1>
                <p class="mt-1 text-sm">{{ $room->location }}</p>
                <div class="flex items-center gap-2 mt-2 mb-3">
                    <div
                        class="grid place-content-center w-7 h-7 text-xs font-semibold rounded-md bg-[#3554D1] text-white">
                        4.8
                    </div>
                    <p class="font-medium text-sm">Exceptional <span>{{ $totalrating }} Reviews</span></p>
                </div>
            </div>
        </div>
        <hr class="my-2 border-[#dddddd]">
        <div class="flex justify-between my-2">
            <div>
                <p class="font-medium">Check-in</p>
                <p class="font-semibold">{{ $orderPayment['checkinday'] }}</p>
                <p>{{ $orderPayment['checkinhour'] }}</p>
            </div>
            <div class="border-l-2 border-[#dddddd]"></div>
            <div class="text-end">
                <p class="font-medium">Check-out</p>
                <p class="font-semibold">{{ $orderPayment['checkoutday'] }}</p>
                <p>{{ $orderPayment['checkouthour'] }}</p>
            </div>
        </div>
        <hr class="my-2 border-[#dddddd]">
        <div class="text-center">
            <p class="font-medium">
                Total Amount :
            </p>
            <p class="font-bold">
                @currency($orderPayment['totalprice'])
            </p>
        </div>
    </div>
</div>
