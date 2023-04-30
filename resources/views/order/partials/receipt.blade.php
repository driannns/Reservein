<div class="flex w-full py-16 justify-center">
    <div class="w-fit">
        <h1 class="font-bold text-3xl">Your booking details</h1>
        <div class="flex w-full mt-10">
            <div class="grid place-items-center" style="width: 15vw;">
                <img class="w-full" src="/assets/poto1.png" alt="Photo">
            </div>
            <div class="w-4/6 h-full ml-3 flex flex-col justify-between">
                <h1 class="mt-3 font-semibold text-2xl">{{ $room->room_name }},<br> {{ $room->location }}</h1>
                <p class="mt-1 text-lg">{{ $room->location }}</p>
                <div class="flex my-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#F8D448" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#F8D448" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#F8D448" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#F8D448" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#F8D448" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#F8D448" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#F8D448" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#F8D448" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#F8D448" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#F8D448" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                </div>
                <div class="flex items-center gap-2 mt-2 mb-3">
                    <div
                        class="grid place-content-center w-7 h-7 text-xs font-semibold rounded-md bg-[#3554D1] text-white">
                        4.8
                    </div>
                    <p class="font-medium text-sm">Exceptional <span>23 Reviews</span></p>
                </div>
            </div>
        </div>
        <div class="border-y-2 mt-5 p-4 flex justify-between text-lg">
            <div class="">
                <h1>Check-in</h1>
                <h1 class="font-semibold">15 March</h1>
                <h1 class="text-[#697488]">15:00 WIB</h1>
            </div>
            <div class="border-r-2"></div>
            <div>
                <h1>Check-out</h1>
                <h1 class="font-semibold">15 March</h1>
                <h1 class="text-[#697488]">17:00 WIB</h1>
            </div>
            <div class="border-r-2"></div>
            <div class="">
                <h1>Total Times</h1>
                <h1 class="font-semibold">2 Hours</h1>
            </div>
        </div>
        <div class="mt-5 text-lg">
            <p>You Selected:</p>
            <div class="flex justify-between">
                <p class="font-semibold">Food and Beverage</p>
                <p>7 Items</p>
            </div>
        </div>
        <div class="mt-5 text-lg">
            <div class="flex justify-between">
                <p>Total</p>
                <p class="font-semibold">Rp. 1.000.000</p>
            </div>
            <div class="flex justify-between">
                <p>Payment Method</p>
                <p class="font-semibold">Credit Card</p>
            </div>
        </div>
    </div>
    <div class="">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500"
            data-dropdown-trigger="hover"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        <!-- Dropdown menu -->
        <div id="dropdownDelay" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDelayButton">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Set Your Order</a>
                </li>
                <hr>
                <li>
                    <a href="#" class="flex items-center gap-1 px-4 py-2 hover:bg-gray-100">
                        <i class='bx bx-calendar text-2xl'></i>
                        <p>
                            Re-Schedule
                        </p>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-1 px-4 py-2 hover:bg-gray-100">
                        <i class='bx bx-x-circle text-2xl'></i>

                        <p>
                            Cancel & Refund
                        </p>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-1 px-4 py-2 hover:bg-gray-100">
                        <i class='bx bxs-paper-plane text-2xl'></i>
                        <p>
                            Share
                        </p>
                    </a>
                </li>
                <hr>
                <li>
                    <a href="#" class="flex items-center gap-1 px-4 py-2 hover:bg-gray-100">
                        <i class='bx bx-message-rounded-dots text-2xl'></i>
                        <div>
                            <p>Need Help? go</p>
                            <p class="text-[#41a8f2]">Contact Service</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
