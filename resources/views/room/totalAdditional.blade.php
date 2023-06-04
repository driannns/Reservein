<x-app-layout>
    <div class="relative overflow-x-auto px-16">
        <h1 class="text-2xl font-bold">Total Pesanan</h1>
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
                @foreach($cart as $carts)
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $number++ }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $carts['name'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $carts['quantity'] }}
                    </td>
                    <td class="px-6 py-4">
                        @currency($carts['price'])
                    </td>
                    <td class="px-6 py-4">
                        @currency($carts['total'])
                    </td>
                </tr>
                @php
                $totalQuantity += $carts['quantity'];
                $totalPrice += $carts['total'];
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
                    <th colspan="4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Total
                    </th>
                    <form action="/order/form/{{$room->id}}" method="post">
                        @csrf
                        <td class="px-6 py-4">
                            <input name="totalQuantity" type="hidden" value="{{$totalQuantity}}">
                            <p>@currency($total)</p>
                            <input name="totalPrice" class="border-0 focus:border-transparent focus:ring-0"
                                placeholder type="hidden" value="{{ $total }}" readonly>
                        </td>
                </tr>
                <tr class="bg-white">
                    <th colspan="4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    </th>
                    <td class="px-6 py-4">
                        <button type="submit " class="px-8 py-2 bg-[#3C6A91] font-bold text-white">Pesan</button>
                    </td>
                    </form>
                </tr>
            </tbody>
        </table>

    </div>

</x-app-layout>
