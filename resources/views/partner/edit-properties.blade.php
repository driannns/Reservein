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

        <div class="w-10/12 py-10 px-10">
            <h1 class="text-[#3C6A91] text-2xl font-bold">Edit Properties</h1>
            <form class="flex" action="/partner/properties/{{ $properties->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <input type="hidden" name="partner_id" value="{{ Auth::guard('partner')->user()->id }}">

                <div class="w-5/12">
                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Name')" style="font-weight:700; color: #3C6A91;" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $properties->room_name }}"
                            placeholder="Full Name" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" />
                    </div>
                    <div class="mt-4">
                        <label for="type" class="block mb-2 font-medium text-sm">Type</label>
                        <select id="type" name="type" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option disabled>Type of Properties</option>
                            <option value="U Shape" {{ $properties->room_type == 'U Shape' ? 'selected' : ''}}>U Shape</option>
                            <option value="Openspace" {{ $properties->room_type == 'Openspace' ? 'selected' : ''}}>Openspace</option>
                            <option value="Indoor" {{ $properties->room_type == 'Indoor' ? 'selected' : ''}}>Indoor</option>
                            <option value="Lounge" {{ $properties->room_type == 'Lounge' ? 'selected' : ''}}>Lounge</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <x-input-label for="kecamatan" :value="__('Address')"
                            style="font-weight:700; color: #3C6A91;" />
                        <x-text-input id="address1" class="block mt-1 w-full" type="text" name="address1"
                        value="{{ $properties->address1 }}" placeholder="Addres line 1" required autofocus
                            autocomplete="address1" />
                        <x-input-error :messages="$errors->get('address1')" />
                    </div>
                    <div class="mt-4">
                        <x-text-input id="address2" class="block mt-1 w-full" type="text" name="address2"
                        value="{{ $properties->address2 }}" placeholder="Addres line 2" required autofocus
                            autocomplete="address2" />
                        <x-input-error :messages="$errors->get('address2')" />
                    </div>
                    <div class="mt-4">
                        <x-text-input id="subdistrict" class="block mt-1 w-full" type="text" name="subdistrict"
                        value="{{ $properties->subdistrict }}" placeholder="Buah Batu" required autofocus
                            autocomplete="subdistrict" />
                        <x-input-error :messages="$errors->get('subdistrict')" />
                    </div>
                    <div class="mt-4">
                        <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" value="{{ $properties->city }}"
                            placeholder="Bandung" required autofocus autocomplete="city" />
                        <x-input-error :messages="$errors->get('city')" />
                    </div>
                    <div class="mt-4">
                        <x-text-input id="zipcode" class="block mt-1 w-full" type="text" name="zipcode"
                        value="{{ $properties->zipcode }}" placeholder="Zip" required autocomplete="zipcode" />
                        <x-input-error :messages="$errors->get('zipcode')" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="price" :value="__('Price')" style="font-weight:700; color: #3C6A91;" />
                        <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" min="1" step="any"
                        value="{{ $properties->price }}" placeholder="459000" required autofocus autocomplete="price" />
                        <x-input-error :messages="$errors->get('price')" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="room_area" :value="__('Room Area')"
                            style="font-weight:700; color: #3C6A91;" />
                        <x-input-label for="room_area" :value="__('Example: 10 x 7 m²')"
                            style="font-weight:700; color: #3C6A91;" />
                        <x-text-input id="room_area" class="block mt-1 w-full" type="text" name="room_area"
                        value="{{ $properties->room_area }}" placeholder="10 x 7 m²" required
                            autocomplete="room_area" />
                        <x-input-error :messages="$errors->get('room_area')" />
                    </div>
                    <div class="mt-4">
                        <label for="person" class="block mb-2 font-medium text-sm text-[#3C6A91]">For how many
                            people</label>
                        <select id="person" name="person" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option disabled>For how many people</option>
                            <option value="5-10 people" {{ $properties->person == '5-10 people' ? 'selected' : ''}}>5-10 people</option>
                            <option value="15-30 people" {{ $properties->person == '15-30 people' ? 'selected' : ''}}>15-30 people</option>
                            <option value="30 people" {{ $properties->person == '30 people' ? 'selected' : ''}}>>30 people</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <label for="room_description" class="block mb-2 text-sm font-medium text-[#3C6A91]">Room
                            Description</label>
                        <textarea id="room_description" rows="4" name="room_description"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Write your thoughts here..." required>{{ $properties->room_description }}</textarea>
                    </div>

                    <div class="grid grid-cols-2 gap-5">
                        <div class="mt-4">
                            <x-input-label for="properties1" :value="__('Properties 1')"
                                style="font-weight:700; color: #3C6A91;" />
                            <x-text-input id="properties1" class="block mt-1 w-full" type="text" name="properties1"
                                value="{{ $properties->properties1 }}" placeholder="Speaker" required
                                autocomplete="properties" />
                            <x-input-error :messages="$errors->get('properties')" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="properties2" :value="__('Properties 2')"
                                style="font-weight:700; color: #3C6A91;" />
                            <x-text-input id="properties2" class="block mt-1 w-full" type="text" name="properties2"
                            value="{{ $properties->properties2 }}" placeholder="Speaker" required
                                autocomplete="properties" />
                            <x-input-error :messages="$errors->get('properties')" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="properties3" :value="__('Properties 3')"
                                style="font-weight:700; color: #3C6A91;" />
                            <x-text-input id="properties3" class="block mt-1 w-full" type="text" name="properties3"
                            value="{{ $properties->properties3 }}" placeholder="Speaker" required
                                autocomplete="properties" />
                            <x-input-error :messages="$errors->get('properties')" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="properties4" :value="__('Properties 4')"
                                style="font-weight:700; color: #3C6A91;" />
                            <x-text-input id="properties4" class="block mt-1 w-full" type="text" name="properties4"
                            value="{{ $properties->properties4 }}" placeholder="Speaker" required
                                autocomplete="properties" />
                            <x-input-error :messages="$errors->get('properties')" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="properties5" :value="__('Properties 5')"
                                style="font-weight:700; color: #3C6A91;" />
                            <x-text-input id="properties5" class="block mt-1 w-full" type="text" name="properties5"
                            value="{{ $properties->properties5 }}" placeholder="Speaker" autocomplete="properties" required />
                            <x-input-error :messages="$errors->get('properties')" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="properties6" :value="__('Properties 6')"
                                style="font-weight:700; color: #3C6A91;" />
                            <x-text-input id="properties6" class="block mt-1 w-full" type="text" name="properties6"
                            value="{{ $properties->properties6 }}" placeholder="Speaker" autocomplete="properties" required />
                            <x-input-error :messages="$errors->get('properties')" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="properties7" :value="__('Properties 7')"
                                style="font-weight:700; color: #3C6A91;" />
                            <x-text-input id="properties7" class="block mt-1 w-full" type="text" name="properties7"
                            value="{{ $properties->properties7 }}" placeholder="Speaker" autocomplete="properties" required />
                            <x-input-error :messages="$errors->get('properties')" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="properties8" :value="__('Properties 8')"
                                style="font-weight:700; color: #3C6A91;" />
                            <x-text-input id="properties8" class="block mt-1 w-full" type="text" name="properties8"
                            value="{{ $properties->properties8 }}" placeholder="Speaker" autocomplete="properties" required />
                            <x-input-error :messages="$errors->get('properties')" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <label for="special_note" class="block mb-2 text-sm font-medium text-[#3C6A91]">Special
                            Note</label>
                        <textarea id="special_note" rows="4" name="special_note"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Write your thoughts here..." required>{{ $properties->special_note }}</textarea>
                    </div>

                    <div class="w-full">
                        <button
                            class="block w-full mt-5 text-white bg-[#3C6A91] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                            type="submit">
                            Save & Add Additional
                        </button>
                        <input  class="block w-full mt-10 text-white bg-[#3C6A91] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        type="submit" value="Save" name="save">
                    </div>
                </div>

                <!-- Photo Input -->
                <div class="w-7/12 flex flex-col items-center">
                    <div class="w-fit flex flex-col gap-4 items-center">
                        <!-- Photo Line 1 -->
                        <div class="w-fit h-fit flex justify-center">

                            <div>
                                <img class="w-[372px] rounded-lg" src="/room/{{ $properties->foto1 }}" id="output"
                                    alt="Photo of Profile">
                            </div>

                        </div>
                        <!-- Photo Line 2 -->
                        <div class="flex gap-4">
                            
                            <div>
                                <img class="w-44 h-40 rounded-lg" src="/room/{{ $properties->foto2 }}" id="output1"
                                    alt="Photo of Profile">
                            </div>
                            <div>
                                <img class="w-44 h-40 rounded-lg" src="/room/{{ $properties->foto3 }}" id="output2"
                                    alt="Photo of Profile">
                            </div>
                            <div>
                                <img class="w-44 h-40 rounded-lg" src="/room/{{ $properties->foto4 }}" id="output3"
                                    alt="Photo of Profile">
                            </div>

                        </div>

                    </div>
                    <div class="w-9/12 mb-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Foto 1</label>
                        <input required
                            class="block w-full text-sm text-[#3C6A91] border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            type="file" accept="image/*" name="foto1" id="file" onchange="loadFile(event)" value="{{ $properties->foto1 }}">
                    </div>
                    <div class="w-9/12 mb-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Foto 2</label>
                        <input required
                            class="block w-full text-sm text-[#3C6A91] border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            type="file" accept="image/*" name="foto2" id="file" onchange="loadFile1(event)">
                    </div>
                    <div class="w-9/12 mb-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Foto 3</label>
                        <input required
                            class="block w-full text-sm text-[#3C6A91] border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            type="file" accept="image/*" name="foto3" id="file" onchange="loadFile2(event)">
                    </div>
                    <div class="w-9/12">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Foto 4</label>
                        <input required
                            class="block w-full text-sm text-[#3C6A91] border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            type="file" accept="image/*" name="foto4" id="file" onchange="loadFile3(event)">
                    </div>

                </div>
            </form>
        </div>

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
    <script>
        var loadFile = function (event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
        var loadFile1 = function (event) {
            var image1 = document.getElementById('output1');
            image1.src = URL.createObjectURL(event.target.files[0]);
        };
        var loadFile2 = function (event) {
            var image2 = document.getElementById('output2');
            image2.src = URL.createObjectURL(event.target.files[0]);
        };
        var loadFile3 = function (event) {
            var image3 = document.getElementById('output3');
            image3.src = URL.createObjectURL(event.target.files[0]);
        };

    </script>
</x-partner-layout>