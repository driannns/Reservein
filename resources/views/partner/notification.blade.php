<x-partner-layout>
    <div id="container" class="flex text-[#051036]">

        <div id="side-bar" class="w-2/12 bg-[#EAEAED] pt-10 pl-10 min-h-screen">
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
            @foreach($notification as $data)
            <div class="card w-[480px] bg-white shadow-xl mb-3">
                <div class="card-body flex-row gap-4 items-center justify-between">
                    <div class="w-2/12">
                    @if (!empty($data->user_id))
                        @if(empty($data->foto))
                        <div class="w-10 h-10 rounded-full mx-auto"
                            style="background-image: url('/assets/svg/avatar.png'); background-repeat: no-repeat; background-size: cover; background-position: center">
                        </div>
                        @else
                        <div class="w-10 h-10 rounded-full mx-auto"
                            style="background-image: url('/foto/{{ $data->foto }}); background-repeat: no-repeat; background-size: cover; background-position: center">
                        </div>
                        @endif
                    @else
                        <div class="w-10 h-10 rounded-full mx-auto"
                            style="background-image: url('/assets/notification.png'); background-repeat: no-repeat; background-size: cover; background-position: center">
                        </div>
                    @endif
                    </div>
                    <div class="w-8/12">
                        <h2 class="card-title">{{ $data->title }}</h2>
                        <p>{{ $data->description }}</p>
                        @if(!empty($data->user_id))
                            <a class="text-sm text-[#787DFF]"href="{{ route('partnerHistory') }}">Check order here</a>
                        @endif
                    </div>
                    <div class="w-2/12 text-center">
                        <p>{{ date('d F', strtotime($data->created_at)) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-partner-layout>
