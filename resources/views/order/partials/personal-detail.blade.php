<div class="flex py-16">
    <div class="w-4/6">
        <form class="flex flex-col gap-3" action="{{ route('store', $room->id) }}" method="post">
            @csrf
            <h1 class="font-semibold">Let us know who you are</h1>
            <input class="w-full bg-transparent border-[#dddddd] p-4 text-sm" type="text" name="fullname"
                autocomplete="name" placeholder="Full Name" value="{{ old('my-input', session('order.fullname')) }}" required>
            <div class="flex w-full gap-3">
                <div class="w-full">
                    <input class="w-full bg-transparent p-4 text-sm border-[#dddddd]" type="text" name="email"
                        placeholder="Email" value="{{ old('my-input', session('order.email')) }}" required>
                </div>
                <div class="w-full">
                    <input class="w-full bg-transparent p-4 text-sm border-[#dddddd]" type="tel" name="phonenumber"
                        placeholder="Phone Number" value="{{ old('my-input', session('order.phonenumber')) }}" required>
                </div>
            </div>
            <textarea class="w-full bg-transparent p-4 text-sm border-[#dddddd]" name="specialrequest"
                id="specialrequest" rows="6" cols="40" style="resize:none" placeholder="Special Requests" required>{{ old('my-input', session('order.specialrequest')) }}</textarea>
            <p class="text-[#697488] text-sm">By proceeding with this reservation, I agree to ReserveIn Terms of
                Use and Privacy Policy.</p>
            <div class="flex gap-4 mt-3">
                <a href=""><button class="bg-white text-[#b0b0b0] py-4 px-4 rounded-lg">Previous</button></a>
                <a href="/order/payment/{{ $room->id }}"><button class="bg-[#3554D1] text-white py-4 px-4 rounded-lg"
                        type="submit">
                        <div class="flex items-center gap-2">
                            Next
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
                <p class="font-semibold">{{ $values['date'] }}</p>
                <p>{{ $values['hour'] }}</p>
            </div>
            <div class="border-l-2 border-[#dddddd]"></div>
            <div class="text-end">
                <p class="font-medium">Check-out</p>
                <p class="font-semibold">{{ $values['date'] }}</p>
                <p>{{ $values['checkouthour'] }}</p>
            </div>
        </div>
        <hr class="my-2 border-[#dddddd]">
        <div>
            <a href="{{ route('additional', $room->id)}}"><button class="bg-[#ffffff] mx-auto flex items-center px-3 py-1 mt-3 rounded-lg">
                    <img class="w-10 h-9" src="/assets/svg/food&beverage.png" alt="">
                    <p class="font-bold text-[#3C6A91]">Order Foods</p>
                </button></a>
        </div>
    </div>
</div>
