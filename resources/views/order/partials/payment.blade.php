<div class="py-16">
    <form class="gap-3 flex" action="{{route('paymentStore', $room->id)}}" method="post">
        <div class="w-4/6">
            @csrf
            <div class="flex flex-col gap-3">
                <h1 class="font-semibold">Your Information</h1>
                <input class="w-full bg-transparent border-[#dddddd] p-4 text-sm" type="text" name="fullname"
                    autocomplete="name" placeholder="Full Name" value="{{ $order['fullname'] }}" readonly>
                <div class="flex w-full gap-3">
                    <div class="w-full">
                        <input class="w-full bg-transparent p-4 text-sm border-[#dddddd]" type="text" name="email"
                            placeholder="Email" value="{{ $order['email'] }}" readonly>
                    </div>
                    <div class="w-full">
                        <input class="w-full bg-transparent p-4 text-sm border-[#dddddd]" type="tel" name="phonenumber"
                            placeholder="Phone Number" value="{{ $order['phonenumber'] }}" readonly>
                    </div>
                </div>
                <textarea class="w-full bg-transparent p-4 text-sm border-[#dddddd]" name="specialrequest"
                    id="specialrequest" rows="6" cols="40" style="resize:none" placeholder="Special Requests"
                    readonly>{{ $order['specialrequest'] }}</textarea>
                <div>
                    <label for="countries" class="block mb-2 text-gray-900 text-lg font-bold">Payment Method</label>
                    <select id="id_select2_example" name="paymentmethod"
                        class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option data-img_src='/assets/payment/bca.png' value="BCA Bank" selected>BCA Bank</option>
                        <option data-img_src='/assets/payment/mandiri.png' value="Mandiri Bank">Mandiri Bank</option>
                        <option data-img_src='/assets/payment/bri.png' value="BRI Bank">BRI Bank</option>
                        <option data-img_src='/assets/payment/bni.png' value="BNI Bank">BNI Bank</option>
                        <option data-img_src='/assets/payment/seabank.png' value="Sea Bank">Sea Bank</option>
                        <option data-img_src='/assets/payment/permatabank.png' value="Permata Bank">Permata Bank
                        </option>
                    </select>
                </div>
                <div>
                    <p class="text-lg font-bold">Add Points</p>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input id="pointCheck" type="checkbox" value="check" class="sr-only peer" name="points"
                        @if (!empty($point['point'])) 
                            checked
                        @endif
                        >
                        <div
                            class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                        </div>
                        <div class="flex">
                            <span class="ml-3 text-sm font-medium text-gray-900">Add Points</span>
                            <span class="ml-3 text-sm font-medium text-gray-900 flex items-center gap-2 pl-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ auth()->user()->point }} Total Points</span>
                        </div>
                    </label>
                </div>
                <p class="text-[#697488] text-sm">By proceeding with this reservation, I agree to ReserveIn Terms of
                    Use and Privacy Policy.</p>
            </div>
            <div class="flex gap-4 mt-3">
                <a href="{{route('order', $room->id)}}"
                    class="bg-white text-[#b0b0b0] py-4 px-4 rounded-lg">Previous</a>
                <a href="/order/payment/{{ $room->id }}"><button class="bg-[#3554D1] text-white py-4 px-4 rounded-lg"
                        type="submit">
                        <div class="flex items-center gap-2">
                            Next
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                        </div>
                    </button>
                </a>
            </div>
        </div>
        <div class="w-2/6 h-fit ml-16 p-5 border border-[#dddddd]">
            <h1 class="text-xl font-bold mb-4">Your booking details</h1>
            <div class="flex w-full">
                <div class="w-2/6 mt-1 grid place-items-center">
                    <img class="w-full" src="/room/{{ $room->foto1 }}" alt="Photo">
                </div>
                <div class="w-4/6 h-full ml-3 flex flex-col justify-between">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#F8D448" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#F8D448" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#F8D448" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#F8D448" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#F8D448" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#F8D448" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#F8D448" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#F8D448" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#F8D448" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#F8D448" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>
                    </div>
                    <h1 class="mt-3 font-semibold">{{ $room->room_name }}, {{ $room->location }}</h1>
                    <p class="mt-1 text-sm">{{ $room->location }}</p>
                    <div class="flex items-center gap-2 mt-2 mb-3">
                        <div
                            class="grid place-content-center w-7 h-7 text-xs font-semibold rounded-md bg-[#3554D1] text-white">
                            4.8
                        </div>
                        <p class="font-medium text-sm">Exceptional <span>{{ $totalrating }} Reviews</span></p>
                    </div>
                </div>
            </div>
            <hr class="my-2 border-[#dddddd]">
            <!-- Date and Hour -->
            <div class="flex justify-between my-2">
                <div>
                    <p>Check-in</p>
                    <p class="font-semibold">{{ $values['date'] }}</p>
                    <p>{{ $values['hour'] }}</p>
                </div>
                <div class="border-l-2 border-[#dddddd]"></div>
                <div class="">
                    <p>Check-out</p>
                    <p class="font-semibold">{{ $values['date'] }}</p>
                    <p>{{ $values['checkouthour'] }}</p>
                </div>
                <hr class="my-2 border-[#dddddd]">
            </div>
            <hr class="my-2 border-[#dddddd]">
            <!-- Price -->
            <div>
                <p>Order Detail :</p>
                <!-- Room Price -->
                <div class="flex justify-between mb-1">
                    <div>
                        <p class="font-semibold">{{ $room->room_name }}</p>
                        <p class="text-sm">{{ $values['duration'] }} Hours</p>
                    </div>
                    <p>@currency($hargaRuangan)</p>
                </div>
                <!-- Food and Baverage Price -->
                <div class="flex justify-between mb-1">
                    <div>
                        <p class="font-semibold">Food and Baverage</p>
                        @if(!empty($total['quantity']))
                        <p class="text-sm">{{ $total['quantity'] }} Items</p>
                        <input type="hidden" name="additionalItems" value="{{ $total['quantity'] }}">
                        @else
                        <input type="hidden" name="additionalItems" value="0">
                        <p class="text-sm">0 Items</p>
                        @endif
                    </div>
                    <p>
                        @if(!empty($total['price']))
                        @currency($total['price'])
                        @else
                        @currency(0)
                        @endif
                    </p>
                </div>
                <!-- Service Fee -->
                <div class="flex justify-between mb-1">
                    <p class="font-semibold">Service Fee</p>
                    <p>@currency($serviceFee)</p>
                </div>
                <!-- Total before Points -->
                <div class="flex justify-between mb-1">
                    @php
                    if(!empty($total))
                    {
                    $total = $hargaRuangan + $total['price'] + $serviceFee;
                    }
                    else{
                    $total = $hargaRuangan + $serviceFee;
                    }
                    @endphp
                    <p class="font-semibold">Total</p>
                    <p>@currency($total)</p>
                </div>
                <!-- Points -->
                <div class="flex justify-between mb-1">
                    <p class="font-semibold">Points</p>
                    <p>
                        @if(!empty($point))
                            -@currency($point['point'])
                        @else
                            -@currency(0)
                        @endif
                        @php
                        if(!empty($point)){
                            $total -= $point['point'];
                        }
                        @endphp
                    </p>
                </div>
                <!-- Last Total -->
                <div class="flex justify-between">
                    <p class="font-semibold">Total Amount</p>
                    @if(!empty($total))
                    <input type="hidden" value="{{ $total }}" name="totalprice">
                    <p>@currency($total)</p>
                    @endif
                </div>
            </div>
        </div>
    </form>
</div>
<link href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
<script type="text/javascript">
    function custom_template(obj) {
        var data = $(obj.element).data();
        var text = $(obj.element).text();
        if (data && data['img_src']) {
            img_src = data['img_src'];
            template = $("<div class='flex items-center w-20 gap-4 bg-transparent'><img src=\"" + img_src +
                "\" class=\"'w-10;'\"/><p class=\"font-bold \">" + text + "</p></div>");
            return template;
        }
    }
    var options = {
        'templateSelection': custom_template,
        'templateResult': custom_template,
    }
    $('#id_select2_example').select2(options);
    $('.select2-container--default .select2-selection--single').addClass('w-full').css({
        'height': 'max-content',
        'background-color': 'transparent'
    });


    var checkbox = document.querySelector("input[name=points]");

    checkbox.addEventListener('change', function () {
        if (this.checked) {
            window.location.href = "{{URL::to('/order/point')}}"
        } else {
            window.location.href = "{{URL::to('/order/point/remove')}}"
        }
    });

</script>
