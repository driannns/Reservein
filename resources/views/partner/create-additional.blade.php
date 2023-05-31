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
                        <a href="#" class="block px-4 py-2">Notification</a>
                    </li>
                    <li>
                    <a href="{{ route('partnerHistory', (Auth::guard('partner')->user()->id)) }}"><button type="submit" class="block px-4 py-2">Order History</button></a>

                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2">
                            <img src="file:///C:/Users/asus/Downloads/Fill%201.svg" alt=""> Dashboard Chart</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-full py-10 px-10">
            <h1 class="text-[#3C6A91] text-2xl font-bold">Add Additional</h1>
            <form class="flex justify-center mt-5" action="{{ route('additional.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="w-8/12 flex flex-col">
                    <div id="additional">
                        <div class="mt-3">
                            <x-input-label for="Additional" :value="__('Additional Name')"
                                style="font-weight:700; color: #3C6A91;" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" placeholder="Fried Fries" autocomplete="additional_name" required
                                autofocus />
                            <x-input-error :messages="$errors->get('name')" />
                        </div>
                        <div class="mt-3">
                            <label for="type" class="block mb-2 font-medium text-sm" style="font-weight:700; color: #3C6A91;">Type</label>
                            <select id="type" name="type"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected disabled>Type of Additional</option>
                                <option value="Starter">Starter</option>
                                <option value="Main Course">Main Course</option>
                                <option value="Desserts & Drinks">Desserts & Drinks</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="room_description" class="block mb-2 text-sm font-medium text-[#3C6A91]">Room
                                Description</label>
                            <textarea id="room_description" rows="4" name="description"
                                class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Write your thoughts here..."></textarea>
                        </div>
                        <div class="mt-3">
                            <x-input-label for="price" :value="__('Price')" style="font-weight:700; color: #3C6A91;" />
                            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" min="1"
                                step="any" :value="old('price')" placeholder="499000" autocomplete="price" />
                            <x-input-error :messages="$errors->get('price')" />
                        </div>
                        <div class="mt-3">
                            <label class="block mb-2 text-sm font-medium" for="file_input" style="font-weight:700; color: #3C6A91;">Photo 1</label>
                            <input
                                class="block w-full text-sm text-[#3C6A91] border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                type="file" accept="image/*" name="foto" id="foto" onchange="loadFile(event)">
                        </div>
                    </div>
                    <!-- <div id="additional 2">
                        <div class="mt-3">
                            <x-input-label for="Additional" :value="__('Additional 2')"
                                style="font-weight:700; color: #3C6A91;" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name2"
                                :value="old('name')" placeholder="Fried Fries" autocomplete="additional_name" />
                            <x-input-error :messages="$errors->get('name')" />
                        </div>
                        <div class="mt-3">
                            <label for="type" class="block mb-2 font-medium text-sm">Type</label>
                            <select id="type" name="type2"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected disabled>Type of Additional</option>
                                <option value="Starter">Starter</option>
                                <option value="Main Course">Main Course</option>
                                <option value="Desserts & Drinks">Desserts & Drinks</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="room_description" class="block mb-2 text-sm font-medium text-[#3C6A91]">Room
                                Description</label>
                            <textarea id="room_description" rows="4" name="description2"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Write your thoughts here..."></textarea>
                        </div>
                        <div class="mt-3">
                            <x-input-label for="price" :value="__('Price')" style="font-weight:700; color: #3C6A91;" />
                            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price2" min="1"
                                step="any" :value="old('price')" placeholder="499000" required autofocus
                                autocomplete="price" />
                            <x-input-error :messages="$errors->get('price')" />
                        </div>
                        <div class="mt-3">
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Photo 2</label>
                            <input
                                class="block w-full text-sm text-[#3C6A91] border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                type="file" accept="image/*" name="foto2" id="file" onchange="loadFile(event)">
                        </div>
                    </div>
                    <div id="additional 3">
                        <div class="mt-3">
                            <x-input-label for="Additional" :value="__('Additional 3')"
                                style="font-weight:700; color: #3C6A91;" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name3"
                                :value="old('name')" placeholder="Fried Fries" autocomplete="additional_name" />
                            <x-input-error :messages="$errors->get('name')" />
                        </div>
                        <div class="mt-3">
                            <label for="type" class="block mb-2 font-medium text-sm">Type</label>
                            <select id="type" name="type3"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected disabled>Type of Additional</option>
                                <option value="Starter">Starter</option>
                                <option value="Main Course">Main Course</option>
                                <option value="Desserts & Drinks">Desserts & Drinks</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="room_description" class="block mb-2 text-sm font-medium text-[#3C6A91]">Room
                                Description</label>
                            <textarea id="room_description" rows="4" name="description3"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Write your thoughts here..."></textarea>
                        </div>
                        <div class="mt-3">
                            <x-input-label for="price" :value="__('Price')" style="font-weight:700; color: #3C6A91;" />
                            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price3" min="1"
                                step="any" :value="old('price')" placeholder="499000" required autofocus
                                autocomplete="price" />
                            <x-input-error :messages="$errors->get('price')" />
                        </div>
                        <div class="mt-3">
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Photo 3</label>
                            <input
                                class="block w-full text-sm text-[#3C6A91] border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                type="file" accept="image/*" name="foto3" id="file" onchange="loadFile(event)">
                        </div>
                    </div> -->

                    <div class="w-full flex gap-5">
                        <button
                            class="block w-1/2 mt-10 text-white bg-[#3C6A91] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                            type="submit">
                            Add More Additional
                        </button>
                        <input  class="block w-1/2 mt-10 text-white bg-[#3C6A91] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        type="submit" value="Done" name="done">
                    </div>
                </div>
            </form>
        </div>
        @if (Session::has('message'))
        <div id="toast-bottom-left"
            class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-white divide-x divide-gray-200 rounded-lg shadow bottom-5 right-5"
            role="alert">
            <div class="text-sm font-normal">{{ Session::get('message') }}</div>
        </div>
        @endif
    </div>
    <script>
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
