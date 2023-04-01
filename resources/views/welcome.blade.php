<x-app-layout>
    <div class="" style="height: 95vh;">
        <!-- Wallpaper -->
        <div class="w-9/12 mt-0 absolute right-0 z-0"
            style="height: 87vh; background-image: url(/assets/wallpaper.png); background-size: cover; background-repeat: no-repeat; background-position: center;">
        </div>

        <!-- Title -->
        <div class="absolute top-1/4 bg-[#00518C]" style="width: 30vw ;height: 37vh;">
        </div>
        <div class="absolute flex items-center top-1/4 w-5/12 my-auto pl-14" style="height: 37vh;">
            <h1 class="font-extrabold leading-tight  text-6xl text-white">EFORTLESS MEETING AT<br>YOUR FINGERTIPS</h1>
        </div>

        <!-- Search Bar -->
        <div class="absolute left-1/2  w-fit" style="bottom: 17vh">
            <div class="relative flex justify-around shadow-lg gap-12 rounded-full bg-white -left-1/2 px-1 pl-3">
                <div class="flex items-center py-3 w-fit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#CACACA" class="w-8 h-8 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <div class="">
                        <p class="font-bold text-xl">Location</p>
                        <p class="text-[#CACACA]">Where are you going?</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#CACACA" class="w-8 h-8 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    <div class="">
                        <p class="font-bold text-xl">Room Type</p>
                        <p class="text-[#CACACA]">Enter your room</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#CACACA" class="w-8 h-8 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>
                    <div class="">
                        <p class="font-bold text-xl">Date</p>
                        <p class="text-[#CACACA]">Choose your date</p>
                    </div>
                </div>
                <div class="bg-[#00518C] my-auto rounded-full">
                    <div class="my-auto p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="white" class="w-11 h-11">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- List Ruang -->
    <div class="w-full bg-[#DEEBF4] rounded-2xl p-14" style="height: 95vh;">
        <div class="mb-6">
            <h1 class="text-3xl font-semibold mb-1">Ruang Meeting Terbaik</h1>
            <p class="text-xl">Berikut Rekomendasi Ruang Meeting Daerah Bandung</p>
        </div>
        <!-- #1 -->
        <div class="grid grid-cols-2 gap-8 w-full">
            <div class="flex bg-white p-3 rounded-3xl shadow-lg">
                <!-- IMAGE -->
                <div class="" id="image">
                    <img src="assets/poto1.png" alt="" style="width: 12vw;">
                </div>
                <div class="flex flex-col justify-between px-5">
                    <div class="">
                        <h3 class="font-medium text-[#00518C] text-3xl">Best Wertern Cedar</h3>
                        <p class="text-base">Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang</p>
                    </div>
                    <div class="w-full flex justify-between">
                        <div class="flex items-center w-fit">
                            <img src="assets/svg/people.png" alt="">
                            <p>120 Orang</p>
                        </div>
                        <div class="flex w-fit items-center">
                            <img src="assets/svg/book.png" alt="">
                            <p class="ml-2">Menu Makanan</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <!-- RATING -->
                        <div class="flex items-center" id="rating">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#94EAEA" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#94EAEA" class="w-10 h-10 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <p class="font-semibold text-2xl">4.8</p>
                        </div>

                        <div class="border-y-4 border-x-8 rounded-md border-[#00518C] text-[#00518C] p-1" id="price">
                            Rp. 700,00-
                        </div>
                    </div>
                </div>
            </div>
            <!-- #2 -->
            <div class="flex bg-white p-3 rounded-3xl shadow-lg">
                <!-- IMAGE -->
                <div class="" id="image">
                    <img src="assets/poto2.png" alt="" style="width: 12vw;">
                </div>
                <div class="flex flex-col justify-between px-5">
                    <div class="">
                        <h3 class="font-medium text-[#00518C] text-3xl">Best Wertern Cedar</h3>
                        <p class="text-base">Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang</p>
                    </div>
                    <div class="w-full flex justify-between">
                        <div class="flex items-center w-fit">
                            <img src="assets/svg/people.png" alt="">
                            <p>120 Orang</p>
                        </div>
                        <div class="flex w-fit items-center">
                            <img src="assets/svg/book.png" alt="">
                            <p class="ml-2">Menu Makanan</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <!-- RATING -->
                        <div class="flex items-center" id="rating">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#94EAEA" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#94EAEA" class="w-10 h-10">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <p class="font-semibold text-2xl">4.8</p>
                        </div>

                        <div class="border-y-4 border-x-8 rounded-md border-[#00518C] text-[#00518C] p-1" id="price">
                            Rp. 700,00-
                        </div>
                    </div>
                </div>
            </div>
            <!-- #3 -->
            <div class="flex bg-white p-3 rounded-3xl shadow-lg">
                <!-- IMAGE -->
                <div class="" id="image">
                    <img src="assets/poto3.png" alt="" style="width: 12vw;">
                </div>
                <div class="flex flex-col justify-between px-5">
                    <div class="">
                        <h3 class="font-medium text-[#00518C] text-3xl">Best Wertern Cedar</h3>
                        <p class="text-base">Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang</p>
                    </div>
                    <div class="w-full flex justify-between">
                        <div class="flex items-center w-fit">
                            <img src="assets/svg/people.png" alt="">
                            <p>120 Orang</p>
                        </div>
                        <div class="flex w-fit items-center">
                            <img src="assets/svg/book.png" alt="">
                            <p class="ml-2">Menu Makanan</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <!-- RATING -->
                        <div class="flex items-center" id="rating">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#94EAEA" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#94EAEA" class="w-10 h-10">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <p class="font-semibold text-2xl">4.8</p>
                        </div>

                        <div class="border-y-4 border-x-8 rounded-md border-[#00518C] text-[#00518C] p-1" id="price">
                            Rp. 700,00-
                        </div>
                    </div>
                </div>
            </div>
            <!-- #4 -->
            <div class="flex bg-white p-3 rounded-3xl shadow-lg">
                <!-- IMAGE -->
                <div class="" id="image">
                    <img src="assets/poto4.png" alt="" style="width: 12vw;">
                </div>
                <div class="flex flex-col justify-between px-5">
                    <div class="">
                        <h3 class="font-medium text-[#00518C] text-3xl">Best Wertern Cedar</h3>
                        <p class="text-base">Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang</p>
                    </div>
                    <div class="w-full flex justify-between">
                        <div class="flex items-center w-fit">
                            <img src="assets/svg/people.png" alt="">
                            <p>120 Orang</p>
                        </div>
                        <div class="flex w-fit items-center">
                            <img src="assets/svg/book.png" alt="">
                            <p class="ml-2">Menu Makanan</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <!-- RATING -->
                        <div class="flex items-center" id="rating">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#94EAEA" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#94EAEA" class="w-10 h-10">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <p class="font-semibold text-2xl">4.8</p>
                        </div>

                        <div class="border-y-4 border-x-8 rounded-md border-[#00518C] text-[#00518C] p-1" id="price">
                            Rp. 700,00-
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-28 px-20" style="height: 98vh">
        <div class="bg-[#00518C] text-white h-full rounded-[70px] p-20" id="story">
            <h1 class="text-5xl font-medium mb-8">Our Story</h1>
            <p class="text-2xl text-justify">Merupakan website untuk membantu sebuah perusahaan atau organisasi untuk melakukan reservasi ruangan. Pada
                website ini kami menyediakan berbagai macam ruangan dengan harga yang sesuai dengan budget yang disediakan.
                Website ini hadir dari hasil survei. Menghadirkan room meeting yang beragam dan sangat baik. Hadirnya
                website ini akan mempermudah pengguna dan penyedia room berkomunikasi dengan mudah dan cepat, sehingga
                ketgiatan diskusi ataupun rapat menjadi lebih efektif dan efisien. </p>
            </div>
        </div>
</x-app-layout>
