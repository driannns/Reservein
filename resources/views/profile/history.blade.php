<x-app-layout>
    <div class="p-10">
        <div class="flex justify-between border bg-[#D9D9D9] items-center p-5">
            <h1 class="text-3xl text-[#686868]">Booking History</h1>
            <div class="flex items-center bg-white rounded-2xl px-2">
                <input class="border-none bg-transparent focus:border-transparent focus:ring-0" type="text"
                    name="search" placeholder="Cari Pesanan" id="historySearch">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
        </div>
        <div class="mt-5">
            <div class="flex justify-around">
                <div class="">All Booking</div>
                <div class="">Completed</div>
                <div class="">Processing</div>
                <div class="">Confirmed</div>
                <div class="">Cancelled</div>
            </div>
            @if (count($order) < 1)
                <div class="grid place-content-center text-4xl font-bold" style="height: 60vh;">
                    You haven't ordered yet 
                </div>
            @else
            <div class="p-5">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-[#D9D9D9]">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Number
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Title
                                </th>
                                <th scope="col" class="text-center px-6 py-3">
                                    Order Date
                                </th>
                                <th scope="col" class="text-center px-6 py-3">
                                    Total
                                </th>
                                <th scope="col" class="text-center px-6 py-3">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            @php
                                $n = 1;
                            @endphp
                            @foreach($order as $orders)
                            <tr class="border-b border-black" id="tableHistory">
                                <td class="px-6 py-4">
                                    {{ $n++ }}
                                </td>
                                <td class="px-6 py-4" id="room_name">
                                    <h3>{{ $orders->room->room_name }}</h3>
                                </td>
                                <td class="text-center px-6 py-4">
                                {{ $orders->created_at }}
                                </td>
                                <td class="text-center px-6 py-4">
                                @currency($orders->totalprice)
                                </td>
                                <td class="px-6 py-4">
                                <div class="mx-auto w-fit font-bold py-2 px-3 rounded-full text-white bg-[#2DCAED]">
                                   {{ $orders->status }}
                                </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
