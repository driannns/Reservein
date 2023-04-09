<div class="flex py-16">
    <div class="w-4/6">
        <h1 class="text-xl font-bold mb-4">How do you want to pay?</h1>
        <form class="grid gap-3" action="" method="">
            <input class="w-full bg-transparent border-[#dddddd] p-5" type="text" name="name"
                placeholder="Select payment method *">
            <div class="flex gap-3">
                <div class="grid gap-3 w-1/2">
                    <input class="w-full bg-transparent border-[#dddddd] p-4" type="text" name="name"
                        placeholder="Card holder name *">
                    <input class="w-full bg-transparent border-[#dddddd] p-4" type="text" name="name"
                        placeholder="Credit/debit card number *">
                    <div class="flex gap-3">
                        <input class="w-full bg-transparent border-[#dddddd] p-4" type="text" name="name"
                            placeholder="Expiry date *">
                        <input class="w-full bg-transparent border-[#dddddd] p-4" type="text" name="name"
                            placeholder="CVC/CVV *">
                    </div>
                </div>
                <div class="w-1/2">
                    <img src="/assets/card.png" alt="">
                </div>
            </div>
            <hr class="border-b border-[#dddddd] my-5">
            <div class="flex items-center mb-4">
                <input id="default-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2">
                <label for="default-checkbox" class="ml-2 text-sm font-medium text-[#6E6D7A]">
                    Get access to members-only deals, just like the millions of other email subscribers.</label>
            </div>
        </form>
        <div class="flex gap-4 mt-3">
            <a href="{{ route('order') }}"><button
                    class="bg-white text-[#b0b0b0] py-4 px-4 rounded-lg">Previous</button></a>
            <a href="{{ route('receipt') }}"><button class="bg-[#3554D1] text-white py-4 px-4 rounded-lg">
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
    <div class="w-2/6 h-fit ml-16 grid gap-4 ">
        <div class="h-fit p-5 border border-[#dddddd]">

            <h1 class="text-xl font-bold mb-4">Your price summary</h1>
            <div class="grid gap-2">
                <div class="flex justify-between text-sm">
                    <p>Superior Twin</p>
                    <p>US$3,372.34</p>
                </div>
                <div class="flex justify-between text-sm">
                    <p>STaxes and fees</p>
                    <p>US$674.47</p>
                </div>
                <div class="flex justify-between text-sm">
                    <p>Booking fees</p>
                    <p>FREE</p>
                </div>
            </div>
            <div class="flex justify-between font-bold bg-[#E5F0FD] p-4 mt-4">
                <h1>Price</h1>
                <p>US$4,046.81</p>
            </div>
        </div>
        <div class="h-fit p-5 border border-[#dddddd]">
            <h1 class="text-xl font-bold mb-4">Your payment schedule</h1>
            <div class="flex justify-between text-sm">
                <p>Before you stay you'll pay</p>
                <p>US$4,047</p>
            </div>
        </div>
        <div class="h-fit p-5 border border-[#dddddd]">
            <h1 class="text-xl font-bold mb-4">Do you have a promo code?</h1>
            <form action="">
                <input class="w-full bg-transparent border-[#dddddd] p-5" type="text" name="name"
                placeholder="Enter promo code">
                <a href="#"><button class="bg-white border border-[#3957D1] text-[#3957D1] hover:bg-[#3957D1] hover:text-white transition-all font-semibold py-3 px-6 rounded-lg mt-3">Apply</button></a>
            </form>
        </div>
    </div>
</div>
