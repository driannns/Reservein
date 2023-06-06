<x-partner-layout>
    <div id="container" class="flex text-[#051036]">
        <div id="side-bar" class="w-2/12 bg-[#EAEAED] pt-10 pl-10">
            <div class="font-medium text-xl">
                <a class="w-fit" href="">
                    <p class="w-fit">
                        Admin Page
                    </p>
                </a>
            </div>
            <button id="dropdownBottomButton" data-dropdown-toggle="dropdownBottom" data-dropdown-placement="bottom"
                class="focus:outline-nonepy-2.5 text-center inline-flex items-center mt-5" type="button">Dropdown bottom
                <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg></button>

            <!-- Dropdown menu -->
            <div id="dropdownBottom" class="z-10 divide-y divide-gray-100 w-2/12 pl-10">
                <ul class="py-2" aria-labelledby="dropdownBottomButton">
                    <li>
                        <a href="{{ route('partnerDashboard') }}" class="block px-4 py-2">Properties</a>
                    </li>
                    <li>
                        <a href="{{ route('notification') }}" class="block px-4 py-2">Notification</a>
                    </li>
                    <li>
                        <a href="{{ route('partnerHistory')}}"><button type="submit" class="block px-4 py-2">Order
                                History</button></a>
                    </li>
                    <li>
                        <a href="{{ route('dashboardChart') }}" class="block px-4 py-2">
                            <img src="file:///C:/Users/asus/Downloads/Fill%201.svg" alt=""> Dashboard Chart</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="content" class="w-10/12 pt-10 px-10">
            <div class="flex justify-between items-center">
                <h1 class="text-[#3C6A91] text-2xl font-bold">Your Properties</h1>
                <div class="flex items-center gap-4">
                    <a href="{{ route('properties.index') }}"><button
                            class="bg-[#3C6A91] text-white rounded-md py-1 px-3 font-medium">Add Properties</button></a>
                    <p>{{ $room->links('vendor.pagination.simple-tailwind') }}</p>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-4 py-5">
                @foreach($room as $rooms)
                <div class="max-w-sm bg-[#E6E8E9] border border-gray-200 shadow mt-5">
                    <div class="relative"
                        style="background-image: url('/room/{{ $rooms->foto1 }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                        <img class="invisible" src="/assets/foto1.png" alt="" />
                        <a href="{{ route('properties.edit', $rooms->id) }}">
                            <button
                                class="absolute top-5 left-5 bg-[#3C6A91] text-white rounded-md py-1 px-3 font-medium">Edit</button>
                        </a>
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $rooms->room_name }}
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $rooms->location }}</p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-2 items-center">
                                @if($rooms->order_count == 0)
                                <div class="w-4 h-4 bg-[#3C6A91] rounded-sm"></div>
                                <p class="text-[#3C6A91] font-medium">{{ $rooms->order_count }} Reserved</p>
                                @else
                                <div class="w-4 h-4 bg-[#178047] rounded-sm"></div>
                                <p class="text-[#3C6A91] font-medium">{{ $rooms->order_count }} Reserved</p>
                                @endif
                            </div>
                            <a href="{{ route('properties.show', $rooms->id) }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Details
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @if (Session::has('message'))
        <div id="toast-undo"
            class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow fixed right-4 bottom-4"
            role="alert">
            <div class="text-sm font-normal text-gray-400">
                {{ Session::get('message') }}
            </div>
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
    </div>
    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }

    </script>
</x-partner-layout>
