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
                        <form action="{{ route('partnerHistory') }}" method="post">
                            @csrf
                            <input type="hidden" name="partner_id" value="{{ Auth::guard('partner')->user()->id }}">
                            <button type="submit" class="block px-4 py-2">Order History</button>
                        </form>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2">
                            <img src="file:///C:/Users/asus/Downloads/Fill%201.svg" alt=""> Dashboard Chart</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-10/12 py-10 px-10">
            <h1 class="text-[#3C6A91] text-2xl font-bold">Order History</h1>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Time
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Duration
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Properties
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Payment
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ date('d M Y', strtotime($order->checkinday)) }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $order->checkinhour }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->duration }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->fullname }}
                            </td>
                            <td class="px-6 py-4">
                                @foreach ($order->room_id as $roomName)
                                {{ $roomName }}
                                @endforeach
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->email }}
                            </td>
                            <td class="px-6 py-4">
                                @if($order->status == "Processing")
                                <!-- The button to open modal -->
                                <label for="my-modal-4{{ $order->id }}"
                                    class="btn bg-white border-none text-[#DBDF00] hover:bg-[#DBDF00] hover:text-white">
                                    {{ $order->status }}</label>
                                <!-- Put this part before </body> tag -->
                                <input type="checkbox" id="my-modal-4{{ $order->id }}" class="modal-toggle" />
                                <label for="my-modal-4{{ $order->id }}" class="modal cursor-pointer">
                                    <label class="modal-box relative bg-white" for="">
                                        <h3 class="text-lg font-bold">Update Payment Status</h3>
                                        <form action="{{ route('updateStatus', $order->id) }}" method="post">
                                            @csrf
                                            @method('patch')
                                            <div
                                                class="flex items-center justify-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                                                <input type="hidden" name="partner_id"
                                                    value="{{ Auth::guard('partner')->user()->id }}">

                                                <button type="submit" name="status" value="Success"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                                    Accept Payment</button>
                                                <button type="submit" name="status" value="Reject"
                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10">
                                                    Decline Payment</button>
                                            </div>
                                        </form>
                                    </label>
                                </label>
                                @elseif($order->status == "Success")
                                <!-- The button to open modal -->
                                <label for="my-modal-4"
                                    class="btn bg-white border-none text-[#178047] hover:bg-[#178047] hover:text-white">
                                    {{ $order->status }}</label>
                                @elseif($order->status == "Reject")
                                <!-- The button to open modal -->
                                <label for="my-modal-4"
                                    class="btn bg-white border-none text-[#FF0000] hover:bg-[#FF0000] hover:text-white">
                                    {{ $order->status }}</label>
                                @endif

                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>

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
</x-partner-layout>