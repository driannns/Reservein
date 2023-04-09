<x-app-layout>
    <!-- Pitcure -->
    <div class="w-8/12 flex justify-between mx-auto">
        <div class="flex justify-end w-1/2 pr-1">
            <div class="w-full">
                <img class="w-full" src="/assets/poto1.png" alt="">
            </div>
        </div>
        <div class="w-1/2 grid grid-cols-2 place-items-center gap-1">
            <img class="w-full" src="/assets/poto1.png" alt="">
            <img class="w-full" src="/assets/poto2.png" alt="">
            <img class="w-full" src="/assets/poto3.png" alt="">
            <img class="w-full" src="/assets/poto4.png" alt="">
        </div>
    </div>

    <!-- Description -->
    <div class="w-10/12 flex mx-auto mt-12 pb-14" style="font-family: 'Poppins', sans-serif;">
        <!-- Detail -->
        <div class="w-8/12">
            <div class="border border-gray-200 rounded-xl p-5" id="main-detail">
                <div class="flex justify-between">
                    <div>
                        <h1 class="text-3xl font-semibold">Stellar Space Medium</h1>
                    </div>
                    <div class="flex gap-5 text-[#374151]">
                        <div class="flex gap-1 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                            </svg>
                            <p>Share</p>
                        </div>
                        <div class="flex gap-1 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            <p>Save</p>
                        </div>
                    </div>
                </div>
                <div class="flex gap-6 mt-5" id="rating">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#f97316" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#f97316" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>
                        <p>4.5 <span class="text-[#6B7280]">(112)</span></p>
                    </div>
                    <p>·</p>
                    <div>
                        <p>Dago, Bandung</p>
                    </div>
                </div>
                <div class="flex items-center gap-2 w-6/12 mt-4">
                    <img src="assets/poto1.png" alt="" class="w-1/12 rounded-full">
                    <p class="text-[#6B7280]">by Stellar Meetings</p>
                </div>
                <div class="flex gap-8 ml-10 mt-6 text-[#374151]">
                    <div>5-10 Person</div>
                    <div>U Shape</div>
                    <div>10 x 7 m²</div>
                </div>
            </div>
            <div class="pr-20 border border-gray-200 rounded-xl p-5" id="room-information">
                <h1 class="text-2xl font-semibold mb-14">Room Information</h1>
                <p class="leading-loose text-[#4B5563]">
                    Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor
                    swimming
                    pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                    There is a private bathroom with bidet in all units, along with a hairdryer and free toiletries.

                    The Symphony 9 Tam Coc offers a terrace. Both a bicycle rental service and a car rental service are
                    available at the accommodation, while cycling can be enjoyed nearby.
                </p>
            </div>
            <div class="border border-gray-200 rounded-xl p-5" id="properties">
                <div class="mb-16">
                    <h1 class="text-2xl font-semibold mb-2">Properties</h1>
                    <p class="text-[#6B7280]">About the property's and services</p>
                </div>
                <div class="grid grid-cols-2 gap-y-7 pl-5 mb-10 text-[#374151]">
                    <div>Speaker</div>
                    <div>Projector</div>
                    <div>Whiteboard</div>
                    <div>Charging port</div>
                    <div>Food and Baverage</div>
                    <div>Free Cancellation</div>
                </div>
                <div class="">
                    <button class="bg-white py-2 px-3 rounded-full">View Less</button>
                </div>
            </div>
            <div class="border border-gray-200 rounded-xl p-5" id="review">
                <h1 class="text-2xl font-semibold mb-8">Reviews (23 reviews)</h1>
                <div class="flex" id="star">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#EAB308" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#EAB308" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#EAB308" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#EAB308" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#EAB308" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#EAB308" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#EAB308" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#EAB308" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#EAB308" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#EAB308" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                </div>
                <div class="mt-7">
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            <img src="assets/poto1.png" alt="" class="w-12 h-12 rounded-full">
                            <div class="ml-4">
                                <p class="font-semibold">Cody Fisher</p>
                                <p class="text-[#6B7280]">May 20,2021</p>
                            </div>
                        </div>
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#EAB308" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#EAB308" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#EAB308" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#EAB308" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#EAB308" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#EAB308" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#EAB308" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#EAB308" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#EAB308" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#EAB308" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                        </div>
                    </div>
                    <p class="ml-16 mt-2 text-[#4B5563]">This is Crazyy, feels like so comfy</p>
                    <hr class="border-white w-11/12 mx-auto my-9">
                </div>
                <div class="">
                    <button class="bg-white py-2 px-3 rounded-full" style="font-family:'Poppins', sans-serif;">View
                        More</button>
                </div>
            </div>
            <div class="border border-gray-200 rounded-xl p-5" id="thingtoknow">
                <h1 class="text-2xl font-semibold">Things to know</h1>
            </div>
            <div class="border border-gray-200 rounded-xl py-5 pl-5 pr-20">
                <h1 class="text-xl font-semibold mb-4">Cancellation policy</h1>
                <p class="text-[#6B7280]">Refund 50% of the booking value when customers cancel the room within 48 hours
                    after successful
                    booking and 14 days before the check-in time.
                    Then, cancel the room 14 days before the check-in time, get a 50% refund of the total amount paid
                    (minus the service fee).</p>
            </div>
            <div class="border border-gray-200 rounded-xl py-5 pl-5 pr-24">
                <h1 class="text-xl font-semibold mb-4">Check-in time</h1>
                <div class="text-[#6B7280]">
                    <div class="flex w-1/2 justify-between bg-white p-3" id="checkin">
                        <p>Check-in</p>
                        <p>08:00 am - 12:00 am</p>
                    </div>
                    <div class="flex w-1/2 justify-between p-3" id="checkout">
                        <p>Check-out</p>
                        <p>02:00 pm - 04:00 pm</p>
                    </div>
                </div>
            </div>
            <div class="border border-gray-200 rounded-xl py-5 pl-5 pr-24">
                <h1 class="text-xl font-semibold mb-4">Speacial Note</h1>
                <div class="text-[#6B7280]">
                    <p>Ban and I will work together to keep the landscape and environment green and
                        clean by not littering, not using stimulants and respecting people around.</p>
                    <p class="mt-2">Do not sing karaoke past 11:30</p>
                </div>
            </div>
            <div class="border border-gray-200 rounded-xl p-5">
                <div class="mb-10">
                    <h1 class="text-xl font-semibold mb-4">Location</h1>
                    <p class="text-[#6B7280]">San Diego, CA, United States of America (SAN-San Diego Intl.)</p>
                </div>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3356.202976389002!2d-117.1954924848635!3d32.73380058098502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80deab3944f1e6ef%3A0xdc2e46f957550b6b!2sSan%20Diego%20International%20Airport!5e0!3m2!1sen!2sid!4v1680866604210!5m2!1sen!2sid"
                        class="w-full h-96" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!-- Reserve -->
        <div class="w-4/12 h-fit p-5 shadow-lg ml-3 rounded-lg">
            <div class="flex flex-col gap-5">
                <div class="flex justify-between">
                    <h1 class="text-2xl font-bold">IDR 200.000 <span class="text-lg font-normal text-[#6b7280]">/hour</span></h1>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#f97316" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#f97316" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>
                        <p>4.5 <span class="text-[#6B7280]">(112)</span></p>
                    </div>
                </div>
                <div class="border border-[#e5e7eb] rounded-3xl p-3">
                    <div class="flex items-center gap-3 mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#9CA3AF" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                        <div class="">
                            <p class="font-semibold text-lg">15 March 2023</p>
                            <p class="text-[#9CA3AF]">Check in</p>
                        </div>
                    </div>
                    <hr class="border-[#e5e7eb] -mx-3">
                    <div class="flex items-center gap-3 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#9CA3AF" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="">
                            <p class="font-semibold text-lg">5PM - 7PM</p>
                            <p class="text-[#9CA3AF]">Time</p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="flex justify-between">
                        <p>IDR 200.000 x 2 hour</p>
                        <p>IDR 400.000</p>
                    </div>
                    <div class="flex justify-between">
                        <p>Service charge</p>
                        <p>IDR 0</p>
                    </div>
                </div>
                <div class="flex justify-betweenfont-semibold">
                    <p>Total</p>
                    <p>IDR 400.000</p>
                </div>
                <a href="{{ route('order') }}"><button class="w-full bg-[#3C6A91] hover:bg-[#081440] text-white p-2 rounded-full">
                    Reserve
                </button></a>
            </div>
        </div>
    </div>

</x-app-layout>
