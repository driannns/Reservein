<x-partner-layout>
    <!-- Pitcure -->
    <div class="w-8/12 flex justify-between mx-auto">
        <div class="flex justify-end w-1/2 pr-1">
            <div class="w-full rounded-lg" style="background-image: url('/room/{{ $room->foto1 }}'); background-size: cover; background-position: center">
                <img class="invisible" src="/assets/foto1.png" alt="">
            </div>
        </div>
        <div class="w-1/2 grid grid-cols-2 place-items-center gap-1">
            <div class="rounded-lg" style="background-image: url('/room/{{ $room->foto1 }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <img class="invisible" src="/assets/foto1.png" alt="Photo of  $room->room_name  }}">
            </div>
            <div class="rounded-lg" style="background-image: url('/room/{{ $room->foto2 }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <img class="invisible" src="/assets/foto1.png" alt="Photo of  $room->room_name  }}">
            </div>
            <div class="rounded-lg" style="background-image: url('/room/{{ $room->foto3 }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <img class="invisible" src="/assets/foto1.png" alt="Photo of  $room->room_name  }}">
            </div>
            <div class="rounded-lg" style="background-image: url('/room/{{ $room->foto4 }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <img class="invisible" src="/assets/foto1.png" alt="Photo of  $room->room_name  }}">
            </div>
        </div>
    </div>

    <!-- Description -->
    <div class="w-10/12 flex mx-auto mt-12 pb-14 text-[#051036]" style="font-family: 'Poppins', sans-serif;">
        <!-- Detail -->
        <div class="w-8/12">
            <div class="border border-gray-200 rounded-xl p-5" id="main-detail">
                <div class="flex justify-between">
                    <div>
                        <h1 class="text-3xl font-semibold">{{ $room->room_name }}</h1>
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
                        <p>{{ $ratingMean }}<span class="text-[#6B7280]">({{ $totalRatings }})</span></p>
                    </div>
                    <p>·</p>
                    <div>
                        <p>{{ $room->location }}</p>
                    </div>
                </div>
                <div class="flex items-center gap-2 w-6/12 mt-4">
                    <img src="/assets/poto1.png" alt="" class="w-1/12 rounded-full">
                    <p class="text-[#6B7280]">by {{ $partnerName }}</p>
                </div>
                <div class="flex gap-8 ml-10 mt-6 text-[#374151]">
                    <div>{{ $room->person }}</div>
                    <div>{{ $room->room_type }}</div>
                    <div>{{ $room->room_area    }}</div>
                </div>
            </div>
            <div class="pr-20 border border-gray-200 rounded-xl p-5" id="room-information">
                <h1 class="text-2xl font-semibold mb-14">Room Information</h1>
                <p class="leading-loose text-[#4B5563]">
                    {{ $room->room_description }}
                </p>
            </div>
            <div class="border border-gray-200 rounded-xl p-5" id="properties">
                <div class="mb-16">
                    <h1 class="text-2xl font-semibold mb-2">Properties</h1>
                    <p class="text-[#6B7280]">About the property's and services</p>
                </div>
                <div class="grid grid-cols-2 gap-y-7 pl-5 mb-10 text-[#374151]">
                    <div>{{ $room->properties1 }}</div>
                    <div>{{ $room->properties2 }}</div>
                    <div>{{ $room->properties3 }}</div>
                    <div>{{ $room->properties4 }}</div>
                    <div>{{ $room->properties5 }}</div>
                    <div>{{ $room->properties6 }}</div>
                </div>
                <div class="">
                    <button class="bg-white py-2 px-3 rounded-full">View Less</button>
                </div>
            </div>
            <div class="rounded-xl p-5 h-fit" id="review">
                <h1 class="text-2xl font-semibold mb-8">Reviews ({{ $totalRatings }} reviews)</h1>
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
                @foreach ($rating as $ratings)
                <div class="mt-7">
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            @if( $ratings->user->foto == null)
                            <img src="/assets/svg/avatar.png" alt="" class="w-12 h-12 rounded-full">
                            @else
                            <img src="/foto/{{ $ratings->user->foto }}" alt="" class="w-12 h-12 rounded-full">
                            @endif
                            <div class="ml-4">
                                <p class="font-semibold">{{ $ratings->user->name }}</p>
                                <p class="text-[#6B7280]">May 20,2021</p>
                            </div>
                        </div>
                        <div class="flex">
                            @for($i = 1; $i <= ($ratings->star_rating); $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#EAB308" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="#EAB308" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                </svg>
                                @endfor
                        </div>
                    </div>
                    <p class="ml-16 mt-2 text-[#4B5563]">{{ $ratings->description }}</p>
                    <hr class="border-white w-11/12 mx-auto my-9">
                </div>
                @endforeach
                <div class="">
                    <button data-modal-target="medium-modal" data-modal-toggle="medium-modal"
                        class="bg-white py-2 px-3 rounded-full" style="font-family:'Poppins', sans-serif;">View
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
                    <p>{{ $room->special_note }}</p>
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
                    <h1 class="text-2xl font-bold">@currency($room->price)<span
                            class="text-lg font-normal text-[#6b7280]">/hour</span></h1>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#f97316" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#f97316" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>
                        <p>{{ $ratingMean }} <span class="text-[#6B7280]">({{ $totalRatings }})</span></p>
                    </div>
                </div>
                <a href="#"><button class="btn w-full  bg-[#3C6A91] hover:bg-[#081440] text-white p-2 rounded-full">
                        Date Reserved
                    </button></a>
                <a href="{{ route('properties.edit', $room->id) }}"><button
                        class="btn w-full bg-[#3C6A91] hover:bg-[#081440] text-white p-2 rounded-full">
                        Edit
                    </button></a>
                <!-- The button to open modal -->
                <label for="my-modal-4" class="btn bg-[#3C6A91] hover:bg-[#081440] text-white p-2 rounded-full">Delete Properties</label>

                <!-- Put this part before </body> tag -->
                <input type="checkbox" id="my-modal-4" class="modal-toggle" />
                
                <label for="my-modal-4" class="modal cursor-pointer">
                    <label class="modal-box relative bg-white text-center" for="">
                        <h3 class="text-lg font-bold text-">⚠ Delete Properties ⚠</h3>
                        <p class="py-4">Are you sure you want to delete this property?</p>
                        <div class="flex justify-center gap-5">
                            <form action="{{ route('properties.destroy', $room->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn bg-red-600 hover:bg-red-800 text-white focus:outline-none focus:ring-red-300">Delete</button>
                            </form>
                            <label for="my-modal-4" class="btn bg-white hover:bg-gray-100 focus:outline-none focus:ring-red-300 text-black">Cancel</label>
                        </div>
                    </label>
                </label>
            </div>
        </div>
    </div>
    <!-- Rating Modal -->
    <div id="medium-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-lg max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 border-b rounded-t">
                    <h3 class="text-xl font-medium text-gray-900">
                        {{ $room->room_name }}
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-hide="medium-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6 transition-all">
                    @foreach ($allRating as $ratings)
                    <div class="mt-7">
                        <div class="flex justify-between">
                            <div class="flex items-center">
                                @if( $ratings->user->foto == null)
                                <img src="/assets/svg/avatar.png" alt="" class="w-12 h-12 rounded-full">
                                @else
                                <img src="/foto/{{ $ratings->user->foto }}" alt="" class="w-12 h-12 rounded-full">
                                @endif
                                <div class="ml-4">
                                    <p class="font-semibold">{{ $ratings->user->name }}</p>
                                    <p class="text-[#6B7280]">May 20,2021</p>
                                </div>
                            </div>
                            <div class="flex">
                                @for($i = 1; $i <= ($ratings->star_rating); $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#EAB308" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="#EAB308" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    @endfor
                            </div>
                        </div>
                        <p class="ml-16 mt-2 text-[#4B5563]">{{ $ratings->description }}</p>
                        <hr class="border-white w-11/12 mx-auto my-9">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        const inputField = document.getElementById('duration');

        inputField.addEventListener('input', (event) => {
            const inputValue = event.target.value;

            const displayValue = document.getElementById('durationValue');
            displayValue.value = inputValue;
        });

        function calculate() {
            const input1 = parseInt(document.getElementById("harga").textContent);
            const input = parseInt(document.getElementById("durationValue").value);

            const result = input1 * input;

            document.getElementById("result").textContent = result;
        }
        calculate();

    </script>
</x-partner-layout>
