<x-app-layout>
    <!-- Search Bar -->
    <div class="flex flex-col items-center gap-7 my-10">
        <div class="">
            <h1 class="text-3xl font-bold">Find Your Best Meeting Room</h1>
        </div>

        <div class="w-fit">
            <div class="flex justify-around shadow-lg gap-12 rounded-full bg-white px-1 pl-3">
                <div class="flex items-center py-3 w-fit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#CACACA" class="w-8 h-8 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <div class="">
                        <p class="font-bold text-xl">Location</p>
                        <p class="text-[#CACACA]">Where are you going?</p>
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
                <div class="bg-[#00518C] my-auto rounded-full">
                    <div class="my-auto p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="white" class="w-11 h-11">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-screen h-screen flex justify-between bg-gray-200 p-10">

        <!-- Filter -->
        <div class="w-3/12">
            <div class="w-full h-20 bg-white mb-4" id="maps">

            </div>
            <div class="w-full h-40 bg-white" id="filter">

            </div>
        </div>

        <!-- Room -->
        <div class="w-8/12">
            <div class="w-full flex h-fit bg-white p-5">
                <!-- Image -->
                <div id="controls-carousel" class="relative w-2/12 mr-3" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-full overflow-hidden rounded-lg">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/assets/poto1.png"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="/assets/poto2.png"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/assets/poto3.png"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

                <!-- Description -->
                <div class="w-6/12" id="description">
                    <!-- Room name -->
                    <div>
                        <h1 class="font-bold" id="title">
                            The Montcalm At Brewery London City
                            Westminster Borough, London
                        </h1>
                    </div>
                    <!-- Address -->
                    <div>
                        <p class="text-sm">Westminster Borough, London</p>
                    </div>
                    <div class="mt-3" id="room-desc">
                        <h1 class="font-medium">King Room</h1>
                        <p class="text-sm">1 extra-large double bed</p>
                    </div>
                    <div class="mt-4 text-sm text-[#008009]">
                        <h1 class="font-semibold">Free Cancellation</h1>
                        <p>You can cancel later, so lock in this great price today.</p>
                    </div>
                    <div class="flex text-sm gap-4 mt-3">
                        <div class="border rounded-xl px-3 py-1">Breakfast</div>
                        <div class="border rounded-xl px-3 py-1">WiFi</div>
                        <div class="border rounded-xl px-3 py-1">Spa</div>
                        <div class="border rounded-xl px-3 py-1">Bar</div>
                    </div>
                </div>
                <div class="w-4/12 flex flex-col items-end justify-around">
                    <div class="mt-2">
                        <p>0 reviews</p>
                    </div>
                    <div>
                        <p>8 nigths, 2 adult</p>
                        <h1>Rp. 499.000</h1>
                    </div>
                    <div>
                        <button class="flex bg-[#3554D1] hover:bg-[#081440] px-5 py-3 text-white font-medium rounded-lg">
                            See Availability<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                        </button>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
