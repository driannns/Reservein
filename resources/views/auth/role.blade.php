<x-guest-layout>
        <div class="w-10/12 justify-center flex gap-56 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <form action="/role" method="post">
                @csrf
                <input type="hidden" name="role" value="Partner">
                <button class="w-fit bg-[#D9D9D9] py-9 px-7 hover:scale-105 transition rounded-xl" type='submit'>
                    <div id="partner">
                        <div class="flex justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-20 h-20">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                            </svg>

                        </div>
                        <p class="font-bold">Partner</p>
                    </div>
                </button>
            </form>
            <form action="/role" method="post">
                @csrf
                <input type="hidden" name="role" value="Customer">
                <button class="w-fit bg-[#D9D9D9] py-9 px-7 hover:scale-105 transition rounded-xl" type='submit'>
                    <div id="customer">
                        <div class="">
                            <div class="flex justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-20 h-20">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                            </div>
                            <div class="">
                                <p class="font-bold">Customer</p>
                            </div>
                        </div>
                    </div>
                </button>
            </form>
        </div>
</x-guest-layout>
