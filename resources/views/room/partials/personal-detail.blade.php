<div class="flex py-16">
    <div class="w-4/6">
        <form class="grid gap-3" action="" method="">
            <h1 class="font-semibold">Let us know who you are</h1>
            <input class="w-full bg-transparent border-[#dddddd] p-4 text-sm" type="text" name="name"
                placeholder="Full Name">
            <div class="flex w-full gap-3">
                <div class="w-full">
                    <input class="w-full bg-transparent p-4 text-sm border-[#dddddd]" type="text" name="email"
                        placeholder="Email">
                </div>
                <div class="w-full">
                    <input class="w-full bg-transparent p-4 text-sm border-[#dddddd]" type="tel" name="phonenumber"
                        placeholder="Phone Number">
                </div>
            </div>
            <input class="w-full bg-transparent p-4 text-sm border-[#dddddd]" type="text" name="address1"
                placeholder="Address line 1">
            <input class="w-full bg-transparent p-4 text-sm border-[#dddddd]" type="text" name="address2"
                placeholder="Address line 2">
            <div class="flex w-full gap-3">
                <div class="w-full">
                    <input class="w-full bg-transparent p-4 text-sm border-[#dddddd]" type="text" name="region"
                        placeholder="State/Province/Region">
                </div>
                <div class="w-full">
                    <input class="w-full bg-transparent p-4 text-sm border-[#dddddd]" type="text" name="zip"
                        placeholder="ZIP code/Postal code">
                </div>
            </div>
            <textarea class="w-full bg-transparent p-4 text-sm border-[#dddddd]" name="request" id="request" rows="6"
                placeholder="Special Requests"></textarea>
            <p class="text-[#697488] text-sm">By proceeding with this reservation, I agree to ReserveIn Terms of
                Use and Privacy Policy.</p>
            </form>
            <div class="flex gap-4 mt-3">
                <a href="#"><button class="bg-white text-[#b0b0b0] py-4 px-4 rounded-lg">Previous</button></a>
                <a href="{{ route('payment') }}"><button class="bg-[#3554D1] text-white py-4 px-4 rounded-lg">
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
    </div>
    <div class="w-2/6 h-fit ml-16 p-5 border border-[#dddddd]">
        <h1 class="text-xl font-bold mb-4">Your booking details</h1>
        <div class="flex w-full">
            <div class="w-2/6 mt-1">
                <img class="w-full" src="/assets/poto1.png" alt="Photo">
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
                <h1 class="mt-3 font-semibold pr-20">Stellar Space, Dago, Bandung</h1>
                <p class="mt-1 text-sm">Dago, Bandung</p>
                <div class="flex items-center gap-2 mt-2 mb-3">
                    <div
                        class="grid place-content-center w-7 h-7 text-xs font-semibold rounded-md bg-[#3554D1] text-white">
                        4.8
                    </div>
                    <p class="font-medium text-sm">Exceptional <span>23 Reviews</span></p>
                </div>
            </div>
        </div>
        <hr class="my-2 border-[#dddddd]">
        <div class="flex justify-between my-2">
            <div class="">
                <p>Check-in</p>
                <p class="font-semibold">15 March</p>
                <p>15:00 WIB</p>
            </div>
            <div class="border-l-2 border-[#dddddd]"></div>
            <div class="">
                <p>Check-out</p>
                <p class="font-semibold">15 March</p>
                <p>17:00 WIB</p>
            </div>
        </div>
        <hr class="my-2 border-[#dddddd]">
        <div class="">
            <p>Total times:</p>
            <p class="font-semibold">2 Hourse</p>
        </div>
        <hr class="my-2 border-[#dddddd]">
        <div class="">
            <p>You selected:</p>
            <p class="font-semibold flex justify-between">Food and Baverage <span>7 Items</span></p>
        </div>
    </div>
</div>
