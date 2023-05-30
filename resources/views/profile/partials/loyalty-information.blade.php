<section class="flex flex-col justify-between" style="font-family: 'Poppins', sans-serif; height: 70vh;">
    <div>
        <img src="/assets/logo.png" alt="Logo of ReserveIn">
    </div>
    <div class="flex items-center justify-between bg-[#DADADA] w-full font-extrabold text-3xl py-2 px-6 ">
        <p>Your Loyalty Points</p>
        <div class="flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-14 h-w-14">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
            </svg>
            <p>{{ auth()->user()->point }} Points</p>
        </div>
    </div>
    <button class="bg-[#3C6A91] p-6 py-3 font-bold text-white w-fit rounded-3xl">Exchange Loyalty Points</button>
</section>
