<x-app-layout>
    <div class="p-10 text-[#051036]">
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
            @if (count($order) < 1) <div class="grid place-content-center text-4xl font-bold" style="height: 60vh;">
                You haven't ordered yet
        </div>
        @else
        <div class="p-5">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-[#D9D9D9]">
                        <tr>
                            <th scope="col" class="text-center px-6 py-3">
                                Number
                            </th>
                            <th scope="col" class="text-center px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="text-center px-6 py-3">
                                Order Date
                            </th>
                            <th scope="col" class="text-center px-6 py-3">
                                Additional
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
                        <tr class="border-b border-black text-center" id="tableHistory">
                            <td class="px-6 py-4 font-bold">
                                {{ $n++ }}
                            </td>
                            <td class="px-6 py-4 text-center" id="room_name">
                                <h3>{{ $orders->room->room_name }}</h3>
                            </td>
                            <td class="text-center px-6 py-4">
                                {{ \Carbon\Carbon::parse($orders->created_at)->format('j F Y') }}
                            </td>
                            <td class="text-center px-6 py-4">
                                @if(count($orders->additional) > 0)
                                <label for="my-modal-{{ $orders->id }}"
                                    class="btn normal-case border-none bg-[#3C6A91] hover:bg-[#081440] text-white rounded-full">
                                    Additional Order</label>

                                <!-- Put this part before </body> tag -->
                                <input type="checkbox" id="my-modal-{{ $orders->id }}" class="modal-toggle" />

                                <label for="my-modal-{{ $orders->id }}" class="modal cursor-pointer">
                                    <label class="modal-box w-11/12 max-w-5xl relative bg-white text-center" for="">
                                        <h3 class="text-lg font-bold text-">Additional
                                            Order</h3>
                                        <div class="">
                                            <table class="w-full text-sm text-left text-gray-500 rounded-2xl">
                                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                                    <tr>
                                                        <th scope="col" class="px-6 py-3">
                                                            No
                                                        </th>
                                                        <th scope="col" class="px-6 py-3">
                                                            Menu
                                                        </th>
                                                        <th scope="col" class="px-6 py-3">
                                                            Pcs
                                                        </th>
                                                        <th scope="col" class="px-6 py-3">
                                                            Price
                                                        </th>
                                                        <th scope="col" class="px-6 py-3">
                                                            Total
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                    $totalQuantity = 0;
                                                    $totalPrice = 0;
                                                    $number = 1;
                                                    @endphp
                                                    @foreach($orders->additional as $value)
                                                    <tr class="bg-white border-b">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                                            {{ $number++ }}
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{ $value['additional_name'] }}
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            {{ $value['quantity'] }}
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            @currency($value['price'])
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            @currency($value['total'])
                                                        </td>
                                                    </tr>
                                                    @php
                                                    $totalQuantity += $value['quantity'];
                                                    $totalPrice += $value['total'];
                                                    $totalTaxServices = $totalPrice * 0.1;
                                                    $total = $totalPrice + $totalTaxServices;
                                                    @endphp
                                                    @endforeach
                                                    <tr class="bg-white">
                                                        <th rowspan="2" colspan="4" scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                                            Tax & Services (10%)
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            @currency($totalPrice)
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-white border-b">
                                                        <td class="px-6 py-4">
                                                            @currency($totalTaxServices)
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-white">
                                                        <th colspan="4" scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                                            Total
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            <input name="totalQuantity" type="hidden"
                                                                value="{{$totalQuantity}}">
                                                            <p>@currency($total)</p>
                                                            <input name="totalPrice"
                                                                class="border-0 focus:border-transparent focus:ring-0"
                                                                placeholder type="hidden" value="{{ $total }}" readonly>
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-white">
                                                        <th colspan="4" scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </label>
                                </label>
                                @else
                                0 Additional Order
                                @endif
                            </td>
                            <td class="text-center px-6 py-4">
                                @currency($orders->totalprice)
                            </td>
                            <td class="px-6 py-4">
                                <div class="mx-auto w-fit font-bold py-2 px-3 rounded-full text-white 
                                @if($orders->status == "Processing")
                                    bg-[#2DCAED]
                                @elseif($orders->status == "Reject")
                                    bg-[#E02424]
                                @elseif($orders->status == "Success")
                                    bg-[#057A55]
                                @endif
                                    ">
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
    <!-- Open the modal using ID.showModal() method -->
    <!-- You can open the modal using ID.showModal() method -->
</x-app-layout>
