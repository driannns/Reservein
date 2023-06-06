<x-app-layout>
    <style>
        ::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }

    </style>
    <!-- Search Bar -->
    <div class="py-5 text-[#051036]">
        <div class="w-full flex flex-col items-center bg-[#f5f5f5] gap-6 py-10">
            <div class="">
                <h1 class="text-3xl font-extrabold" style="font-family: 'Jost', sans-serif;">Find Your Best Meeting Room
                </h1>
            </div>

            <div class="w-10/12">
                <form action="{{route('filtered')}}">
                    <div class="flex justify-between gap-12 rounded-full bg-white px-7">
                        <div class="flex items-center py-3 w-fit">
                            <div>
                                <p class="font-bold text-xl pl-2">Location</p>
                                <select class="text-[#CACACA] border-none focus:ring-0" name="location" id="location">
                                    <option value="">Where are you?</option>
                                    <option value="Bandung">Bandung</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Tanggerang">Tanggerang</option>
                                    <option value="Surabaya">Surabaya</option>
                                    <option value="Bekasi">Bekasi</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="#CACACA" class="w-8 h-8 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                            <div class="">
                                <p class="font-bold text-xl pl-2">Check In</p>
                                <input class="border-0 text-[#CACACA] focus:ring-0" type="date" name="date">
                            </div>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="#CACACA" class="w-8 h-8 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                            <div class="">
                                <p class="font-bold text-xl pl-2">Type</p>
                                <select class="text-[#CACACA] border-none focus:ring-0" name="roomType" id="roomType">
                                    <option value="">Room Type</option>
                                    <option value="Openspace">Openspace</option>
                                    <option value="Outdoor">Outdoor</option>
                                    <option value="Indoor">Indoor</option>
                                    <option value="Lounge">Lounge</option>
                                    <option class="rounded-full" value="U Shape">U Shape</option>
                                </select>
                            </div>
                        </div>
                        <div class="bg-[#3C6A91] my-auto rounded-full">

                            <button class="flex items-center my-auto p-3 rounded-full text-white" type='submit'>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="white" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                                Search
                            </button>
                        </div>
                    </div>
                </form>
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
            <div class="w-full h-fit text-[#051036]" id="filter">
                <h1 class="font-medium mb-5">Search by property name</h1>
                <div class="flex items-center px-3 border-2 border-[#dddddd]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <input class="border-none bg-transparent w-full focus:border-transparent focus:ring-0" type="text"
                        name="search" id="inputFindRoom" placeholder="e.g. Brewspace">
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
        <div class="w-8/12 ml-5 text-[#051036]">
            <!-- Room #1 -->
            @foreach($room as $rooms)
            <div class="w-full flex h-fit p-4" id="card-rooms">
                <!-- Image -->
                <div class="carousel w-3/12 mr-5 rounded-lg" style="height: 30vh;">
                    <div id="slide1{{ $rooms->id }}" class="carousel-item relative w-full rounded-lg">
                        <div class="rounded-xl"
                            style="background-image: url('/room/{{ $rooms->foto1 }}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                            <img src="/assets/foto1.png" class="invisible w-full" style="height:30vh;" />
                        </div>
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide4{{ $rooms->id }}" class="btn btn-circle bg-transparent border-none ">❮</a>
                            <a href="#slide2{{ $rooms->id }}" class="btn btn-circle bg-transparent border-none ">❯</a>
                        </div>
                    </div>
                    <div id="slide2{{ $rooms->id }}" class="carousel-item relative w-full rounded-lg">
                        <div class="rounded-xl"
                            style="background-image: url('/room/{{ $rooms->foto2 }}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                            <img src="/assets/foto1.png" class="invisible w-full" style="height:30vh;" />
                        </div>
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide1{{ $rooms->id }}" class="btn btn-circle bg-transparent border-none ">❮</a>
                            <a href="#slide3{{ $rooms->id }}" class="btn btn-circle bg-transparent border-none ">❯</a>
                        </div>
                    </div>
                    <div id="slide3{{ $rooms->id }}" class="carousel-item relative w-full rounded-lg">
                        <div class="rounded-xl"
                            style="background-image: url('/room/{{ $rooms->foto3 }}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                            <img src="/assets/foto1.png" class="invisible w-full" style="height:30vh;" />
                        </div>
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide2{{ $rooms->id }}" class="btn btn-circle bg-transparent border-none ">❮</a>
                            <a href="#slide4{{ $rooms->id }}" class="btn btn-circle bg-transparent border-none ">❯</a>
                        </div>
                    </div>
                    <div id="slide4{{ $rooms->id }}" class="carousel-item relative w-full rounded-lg">
                        <div class="rounded-xl"
                            style="background-image: url('/room/{{ $rooms->foto4 }}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                            <img src="/assets/foto1.png" class="invisible w-full" style="height:30vh;" />
                        </div>
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide3{{ $rooms->id }}" class="btn btn-circle bg-transparent border-none ">❮</a>
                            <a href="#slide1{{ $rooms->id }}" class="btn btn-circle bg-transparent border-none ">❯</a>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="w-6/12 flex flex-col justify-center" id="description">
                    <!-- Room name -->
                    <div>
                        <h4 class="font-bold" id="title">
                            {{ $rooms->room_name}}
                        </h4>
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
                        <div class="border border-gray-300 rounded-xl px-3 py-1 text-center flex items-center">
                            {{ $rooms->properties1}}</div>
                        <div class="border border-gray-300 rounded-xl px-3 py-1 text-center flex items-center">
                            {{ $rooms->properties2}}</div>
                        <div class="border border-gray-300 rounded-xl px-3 py-1 text-center flex items-center">
                            {{ $rooms->properties3}}</div>
                        <div class="border border-gray-300 rounded-xl px-3 py-1 text-center flex items-center">
                            {{ $rooms->properties4}}</div>
                    </div>
                </div>
                <div class="w-4/12 flex flex-col items-end justify-around">
                    <div class="mt-2">
                        <p>{{ $rooms->rating_count }} reviews</p>
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
            <p>{{ $room->links() }}</p>
        </div>
    </div>
    @if(Session::has('refundMessage'))
    <div id="toast-undo"
        class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow absolute right-4 bottom-4"
        role="alert">
        <div class="text-sm font-normal text-gray-500"> {{ Session::get('refundMessage') }}</div>
        <div class="flex items-center ml-auto space-x-2">
            <button type="button"
                class="bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8"
                data-dismiss-target="#toast-undo" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
    @endif
</x-app-layout>
