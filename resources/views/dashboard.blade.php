<x-app-layout>
    <!-- Search Bar -->
    <div class="py-5">
        <div class="w-full flex flex-col items-center bg-[#f5f5f5] gap-6 py-10">
            <div class="">
                <h1 class="text-3xl font-extrabold" style="font-family: 'Jost', sans-serif;">Find Your Best Meeting Room
                </h1>
            </div>

            <div class="w-10/12">
                <div class="flex justify-between gap-12 rounded-full bg-white px-7">
                    <div class="flex items-center py-3 w-fit">
                        <div class="">
                            <p class="font-bold text-xl">Location</p>
                            <p class="text-[#CACACA]">Where are you?</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#CACACA" class="w-8 h-8 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <div class="">
                            <p class="font-bold text-xl">Room Type</p>
                            <p class="text-[#CACACA]">Enter your room</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#CACACA" class="w-8 h-8 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>
                        <div class="">
                            <p class="font-bold text-xl">Date</p>
                            <p class="text-[#CACACA]">Choose your date</p>
                        </div>
                    </div>
                    <div class="bg-[#3C6A91] my-auto rounded-full">

                        <button class="flex items-center my-auto p-3 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="white" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-screen h-fit flex justify-center p-10">
        <!-- Filter -->
        <div class="w-3/12" style="font-family: 'Poppins', sans-serif;">
            <div class="w-full h-fit bg-white mb-4" id="maps">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3356.202976389002!2d-117.1954924848635!3d32.73380058098502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80deab3944f1e6ef%3A0xdc2e46f957550b6b!2sSan%20Diego%20International%20Airport!5e0!3m2!1sen!2sid!4v1681054029095!5m2!1sen!2sid"
                    class="w-full" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- filter -->
            <div class="w-full h-fit " id="filter">
                <h1 class="font-medium mb-5">Search by property name</h1>
                <div class="flex items-center px-3 border-2 border-[#dddddd]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <input class="border-none bg-transparent w-full focus:border-transparent focus:ring-0" type="text"
                        name="search" placeholder="e.g. Brewspace">
                </div>
                <hr class="my-5 border-[#dddddd]">
                <div>
                    <h1 class="mb-3">Deals</h1>
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2">
                        <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900">Free
                            Cancelation</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="checked-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2">
                        <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900">Pay at
                            place</label>
                    </div>
                    <div class="flex items-center">
                        <input id="checked-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2">
                        <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900">Worksplace with
                            f&b</label>
                    </div>
                </div>
                <hr class="my-5 border-[#dddddd]">
                <div>
                    <h1 class="mb-3">Properties</h1>
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2">
                        <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900">Whiteboard</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="checked-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2">
                        <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900">Speaker</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="checked-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2">
                        <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900">Projector</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="checked-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2">
                        <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900">WiFi
                            Included</label>
                    </div>
                    <div class="flex items-center">
                        <input id="checked-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2">
                        <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900">Charging
                            Port</label>
                    </div>
                </div>
                <hr class="my-5 border-[#dddddd]">
                <!-- Rating -->
                <div id="rating">
                    <h1 class="mb-3">Star Rating</h1>
                    <button class="bg-[#e4e5ec] px-5 py-1 rounded-2xl text-[#3554d1]">1</button>
                    <button class="bg-[#e4e5ec] px-5 py-1 rounded-2xl text-[#3554d1]">2</button>
                    <button class="bg-[#e4e5ec] px-5 py-1 rounded-2xl text-[#3554d1]">3</button>
                    <button class="bg-[#e4e5ec] px-5 py-1 rounded-2xl text-[#3554d1]">4</button>
                    <button class="bg-[#e4e5ec] px-5 py-1 rounded-2xl text-[#3554d1]">5</button>
                </div>
                <hr class="my-5 border-[#dddddd]">
                <div>
                    <h1 class="mb-3">Guest</h1>
                    <div class="flex items-center mb-4">
                        <input id="checked-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2">
                        <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900">5-10 person</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="checked-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2">
                        <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900">15-30
                            person</label>
                    </div>
                    <div class="flex items-center">
                        <input id="checked-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2">
                        <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900">> 30 person</label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Room -->
        <div class="w-8/12 ml-5">
            <!-- Room #1 -->
            @foreach($room as $rooms)
            <div class="w-full flex h-fit p-4">
                <!-- Image -->
                <div id="carouselExampleCaptions" class="relative w-3/12 mr-3" data-te-carousel-init
                    data-te-carousel-slide>
                    <!--Carousel indicators-->
                    <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                        data-te-carousel-indicators>
                        <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0"
                            data-te-carousel-active
                            class="box-content w-2 h-2 rounded-full flex-initial cursor-pointer bg-white bg-clip-padding mr-1 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                            aria-current="true" aria-label="Slide 1">
                        </button>
                        <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="1"
                            class="box-content w-2 h-2 rounded-full flex-initial cursor-pointer bg-white bg-clip-padding mr-1 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                            aria-label="Slide 2"></button>
                        <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="2"
                            class="box-content w-2 h-2 rounded-full flex-initial cursor-pointer bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                            aria-label="Slide 3"></button>
                    </div>

                    <!--Carousel items-->
                    <div class="relative w-full h-full overflow-hidden after:clear-both after:block after:content-['']"
                        style="height: 30vh;">
                        <!--First item-->
                        <div class="relative h-full float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                            style="height: 30vh;" data-te-carousel-active data-te-carousel-item
                            style="backface-visibility: hidden">
                            <img src="/assets/poto1.png" class="block object-cover" alt="..." />
                        </div>
                        <!--Second item-->
                        <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                            data-te-carousel-item style="backface-visibility: hidden">
                            <img src="/assets/poto2.png" class="block object-cover" alt="..." />
                        </div>
                        <!--Third item-->
                        <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                            data-te-carousel-item style="backface-visibility: hidden">
                            <img src="/assets/poto3.png" class="block object-cover" alt="..." />
                        </div>
                    </div>

                    <!--Carousel controls - prev item-->
                    <button
                        class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
                        <span class="inline-block h-8 w-8">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
                    </button>
                    <!--Carousel controls - next item-->
                    <button
                        class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
                        <span class="inline-block h-8 w-8">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
                    </button>
                </div>

                <!-- Description -->
                <div class="w-6/12" id="description">
                    <!-- Room name -->
                    <div>
                        <h1 class="font-bold" id="title">
                            {{ $rooms->room_name}}
                        </h1>
                    </div>
                    <!-- Address -->
                    <div>
                        <p class="text-sm">{{ $rooms->location}}</p>
                    </div>
                    <div class="mt-3" id="room-desc">
                        <h1 class="font-medium">{{ $rooms->room_type}}</h1>
                        <p class="text-sm">{{ $rooms->extra}}</p>
                    </div>
                    <div class="mt-4 text-sm text-[#008009]">
                        <h1 class="font-semibold">Free Cancellation</h1>
                        <p>You can cancel later, so lock in this great price today.</p>
                    </div>
                    <div class="flex text-sm gap-4 mt-3">
                        <div class="border border-gray-300 rounded-xl px-3 py-1">{{ $rooms->properties1}}</div>
                        <div class="border border-gray-300 rounded-xl px-3 py-1">{{ $rooms->properties2}}</div>
                        <div class="border border-gray-300 rounded-xl px-3 py-1">{{ $rooms->properties3}}</div>
                        <div class="border border-gray-300 rounded-xl px-3 py-1">{{ $rooms->properties4}}</div>
                    </div>
                </div>
                <div class="w-4/12 flex flex-col items-end justify-around">
                    <div class="mt-2">
                        <p>0 reviews</p>
                    </div>
                    <div>
                        <p>{{ $rooms->people}}</p>
                        <h1 class="font-extrabold text-xl">@currency($rooms->price)</h1>
                    </div>
                    <div>
                        <a href="/room/{{$rooms->id}}"><button
                                class="flex bg-[#3C6A91] hover:bg-[#081440] px-5 py-3 text-white font-medium rounded-lg">
                                See Availability<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>
                            </button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
