<x-app-layout>
    <div class="text-[#051036]" style="height: 95vh;">
        <!-- Wallpaper -->
        <div class="w-8/12 mt-0 absolute right-32 z-0"
            style="height: 87vh; background-image: url(/assets/wallpaper.png); background-size: cover; background-repeat: no-repeat; background-position: center;">
        </div>

        <!-- Title -->
        <div class="absolute top-1/4 bg-[#6196B4]" style="width: 30vw ;height: 37vh;">
        </div>
        <div class="absolute flex items-center top-1/4 w-5/12 my-auto pl-32" style="height: 37vh;">
            <h1 class="font-extrabold leading-tight  text-6xl text-white">Effortless Meeting
                at Your Fingertips</h1>
        </div>

        <!-- Search Bar -->
        <div class="absolute left-1/2 -translate-x-1/2 w-9/12" style="bottom: 17vh">
            <div class="w-full relative">
                <div class="flex justify-between gap-12 rounded-full bg-white px-7 py-3">
                    <div class="flex items-center py-3 w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#CACACA" class="w-7 h-7 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>

                        <div class="">
                            <p class="font-bold text-lg">Location</p>
                            <p class="text-[#CACACA]">Where are you?</p>
                        </div>
                    </div>
                    <div class="flex items-center py-3">
                        <div class="border-l-2 h-3/4 p-3"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#CACACA" class="w-7 h-7 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <div class="">
                            <p class="font-bold text-lg">Check In</p>
                            <p class="text-[#CACACA]">15 March</p>
                        </div>
                    </div>
                    <div class="flex items-center py-3">
                        <div class="border-l-2 h-3/4 p-3"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#CACACA" class="w-7 h-7 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <div class="">
                            <p class="font-bold text-lg">Type</p>
                            <p class="text-[#CACACA]">Room Type</p>
                        </div>
                    </div>
                    <div class="bg-[#3C6A91] my-auto rounded-full">

                        <button class="flex items-center my-auto p-3 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="white" class="w-7 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How it Work-->
    <div class="w-full flex flex-col items-center mx-auto p-14 text-[#051036]">
        <h1 class="text-4xl font-extrabold">How it work</h1>
        <p class="text-center mt-3 text-[#64748B]">From cozy place to perfect feeling, come and enjoy<br>our plaform to
            find your room.</p>
        <div class="mt-12">
            <img src="/assets/work1.png" alt="">
        </div>
    </div>
    <!-- Space to inspire -->
    <div class="py-28 px-10 text-[#051036]">
        <div class="bg-white h-full rounded-2xl p-20" id="story">
            <h1 class="text-3xl font-extrabold text-center">Space to inspire</h1>
            <p class="text-[#64748B] text-center mt-1">Popular workplaces that ReserveIn recommends for you</p>
            <div class="w-full grid grid-cols-4 gap-2 mt-4">
                @foreach($room as $rooms)
                <div class="flex flex-col h-96">
                    <div class="w-4/5 h-4/6 mx-auto" id="carousel">
                        <div class="carousel w-full">
                            <div id="slide1{{ $rooms->id }}" class="carousel-item relative w-full rounded-lg">
                                <img src="/properties/{{ $rooms->foto1 }}" class="w-full" style="height:30vh;" />
                                <div
                                    class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                    <a href="#slide4{{ $rooms->id }}"
                                        class="btn btn-circle bg-transparent border-none ">❮</a>
                                    <a href="#slide2{{ $rooms->id }}"
                                        class="btn btn-circle bg-transparent border-none ">❯</a>
                                </div>
                            </div>
                            <div id="slide2{{ $rooms->id }}" class="carousel-item relative w-full rounded-lg">
                                <img src="/properties/{{ $rooms->foto2 }}" class="w-full" style="height:30vh;" />
                                <div
                                    class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                    <a href="#slide1{{ $rooms->id }}"
                                        class="btn btn-circle bg-transparent border-none ">❮</a>
                                    <a href="#slide3{{ $rooms->id }}"
                                        class="btn btn-circle bg-transparent border-none ">❯</a>
                                </div>
                            </div>
                            <div id="slide3{{ $rooms->id }}" class="carousel-item relative w-full rounded-lg">
                                <img src="/properties/{{ $rooms->foto3 }}" class="w-full" style="height:30vh;" />
                                <div
                                    class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                    <a href="#slide2{{ $rooms->id }}"
                                        class="btn btn-circle bg-transparent border-none ">❮</a>
                                    <a href="#slide4{{ $rooms->id }}"
                                        class="btn btn-circle bg-transparent border-none ">❯</a>
                                </div>
                            </div>
                            <div id="slide4{{ $rooms->id }}" class="carousel-item relative w-full rounded-lg">
                                <img src="/properties/{{ $rooms->foto4 }}" class="w-full" style="height:30vh;" />
                                <div
                                    class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                    <a href="#slide3{{ $rooms->id }}"
                                        class="btn btn-circle bg-transparent border-none ">❮</a>
                                    <a href="#slide1{{ $rooms->id }}"
                                        class="btn btn-circle bg-transparent border-none ">❯</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-4/5 h-2/6 mx-auto">
                        <div class="w-fit">
                            <p class="text-[#6B7280] text-sm">{{ $rooms->person }}</p>
                            <p class="font-semibold">{{ $rooms->room_name }}</p>
                            <div class="flex gap-2 text-[#6B7280]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="text-sm">{{ $rooms->subdistrict }}, {{ $rooms->city}}</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="text-[#6B7280]"><span class="text-black font-extrabold">@currency($rooms->price)
                                </span>/hour</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="flex justify-center">
                <a href="{{ route('dashboard') }}"><button class="bg-[#3C6A91] text-white px-6 py-2 rounded-full">Show
                        me more</button></a>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center w-full px-10 gap-14 text-[#051036]" style="height: 90vh;">
        <div class="w-fit flex justify-end">
            <div class="w-9/12">
                <h1 class="text-4xl font-bold">Why Choose Us?</h1>
                <div class="flex flex-col gap-3 mb-5 mt-5">
                    <div class="w-fit rounded-full py-1 px-2 font-semibold text-[#1E40AF] bg-[#DBEAFE]">
                        <p>Advertising</p>
                    </div>
                    <h1 class="font-bold">Cost-effective advertising</h1>
                    <p>With a free listing, you can advertise your rooms with no upfront costs</p>
                </div>
                <div class="flex flex-col gap-3 mb-5">
                    <div class="w-fit rounded-full py-1 px-2 font-semibold text-[#166534] bg-[#DCFCE7]">
                        <p>Exporsure</p>
                    </div>
                    <h1 class="font-bold">Reach millions with ReserveIn</h1>
                    <p>Millions of people are searching for unique places to stay around the world</p>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="w-fit rounded-full py-1 px-2 font-semibold text-[#991B1B] bg-[#FEE2E2]">
                        <p>Advertising</p>
                    </div>
                    <h1 class="font-bold">Secure and simple</h1>
                    <p>A Meeting Lettings listing gives you a secure and easy way to take reserve and payments
                        online
                    </p>
                </div>
            </div>
        </div>
        <div class="w-fit">
            <img class="w-9/12" src="/assets/wallpaper2.png" alt="">
        </div>
    </div>
    <div class="p-10">
        <div class="flex bg-white justify-center items-center gap-32 px-5 py-16 rounded-3xl shadow-lg">
            <div class="w-4/12 rounded-xl"
                style="background-image: url('/assets/learn1.png'); background-repeat: no-repeat; background-size:cover; height: 70vh;font-family: 'Poppins', sans-serif;">
                <div class="flex justify-end relative top-1/4 -translate-y-1/2">
                    <h1 class=" text-white font-bold text-3xl pr-5">PROVIDE F&B WITH<br>
                        SPECIAL BUDGET</h1>
                </div>
                <button
                    class="relative top-1/2 -translate-y-full ml-10 bg-[#3C6A91] text-white px-4 py-3 rounded-lg font-semibold">Learn
                    More</button>
            </div>
            <div class="w-4/12 rounded-xl"
                style="background-image: url('/assets/learn2.png'); background-repeat: no-repeat; background-size:cover; height: 70vh; font-family: 'Poppins', sans-serif;">
                <div class="flex justify-end relative top-3/4 -translate-y-1/2">
                    <h1 class="text-white font-bold text-3xl pr-5">OPEN SPACE AREA WITH<br>
                        COZY PLACE</h1>
                </div>
                <button
                    class="relative top-1/2 -translate-y-full ml-10 bg-[#3C6A91] text-white px-4 py-3 rounded-lg font-semibold">Learn
                    More</button>
            </div>
        </div>
    </div>
    <div class="text-[#051036]">
        <div>
            <div class="flex flex-col justify-center py-10">
                <h1 class="font-bold text-3xl text-center">Good news from far away</h1>
                <p class="text-[#6B7280] text-center">Let's see what people think of ReserveIn</p>
                <img class="w-7/12 mx-auto py-8" src="assets/quote.png" alt="">
            </div>
        </div>
    </div>
</x-app-layout>
