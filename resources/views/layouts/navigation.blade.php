<nav x-data="{ open: false }" class="bg-[#EDEDED] border-gray-100" style="height:10vh">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl h-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-full">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center font-semibold text-2xl">
                    @auth
                    <a href="/dashboard">
                        @else
                        <a href="/">
                            @endauth
                            <img src="/assets/logo.png" alt="Logo og ReserveIn" />
                        </a>
                </div>
            </div>
            @if (Route::has('login'))
            <div class="flex items-center p-6 text-right">
                <a href="" class="font-semibold dark:text-[#495261] text-sm dark:hover:text-gray-400">Language</a>
                <a href="#" class="ml-4 font-semibold dark:text-[#495261] text-sm dark:hover:text-gray-400">Contact</a>
                <a href="#"
                    class="mx-4 font-semibold border border-[#d1d5db] py-1 px-2 rounded-full dark:text-[#495261] text-sm dark:hover:text-gray-400">List
                    your property</a>
                @auth
                <div class=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#495261" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </div>
                <div class="hidden sm:flex sm:items-center sm:ml-2 ">
                    <!-- Dropdown menu -->
                    <!-- <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <x-dropdown-link :href="route('profile.edit')">
                                    <div class="flex items-center gap-2 w-full">
                                        @if(Auth::user()->foto == null)
                                        <img class="w-9 h-9 rounded-full" src="/assets/svg/avatar.png"
                                            alt="Photo of Profile">
                                        @else
                                        <img class="w-9 h-9 rounded-full" src="/foto/{{ Auth::user()->foto }}"
                                            alt="Photo of Profile">
                                        @endif
                                        <div class="w-full overflow-hidden">
                                            <p class="font-bold">
                                                {{ Auth::user()->name }}
                                            </p>
                                        </div>
                                    </div>
                                </x-dropdown-link>
                            </li>
                            <li>
                                <x-dropdown-link :href="route('history')" class="flex items-center gap-2">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                        </svg>
                                    </div>
                                    My bookings
                                </x-dropdown-link>
                            </li>
                            <li>
                                <x-dropdown-link class="flex items-center gap-2">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>

                                    </div>
                                    Wishlist
                                </x-dropdown-link>
                            </li>
                            <li>
                                <x-dropdown-link class="flex items-center gap-2">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                        </svg>

                                    </div>
                                    Help
                                </x-dropdown-link>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();"
                                        class="flex items-center gap-2">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                            </svg>

                                        </div>
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </li>
                        </ul>
                    </div> -->

                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                class="inline-flex items-center px-3 py-2 border border-transparent leading-4 font-medium rounded-md text-[#1F2937] hover:text-gray-400 focus:outline-none transition ease-in-out duration-150">
                                @if(Auth::user()->foto == null)
                                <img class="w-9 h-9 rounded-full" src="/assets/svg/avatar.png" alt="Photo of Profile">
                                @else
                                <img class="w-9 h-9 rounded-full" src="/foto/{{ Auth::user()->foto }}"
                                    alt="Photo of Profile">
                                @endif
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                <div class="flex items-center gap-2 w-full">
                                    @if(Auth::user()->foto == null)
                                    <img class="w-9 h-9 rounded-full" src="/assets/svg/avatar.png"
                                        alt="Photo of Profile">
                                    @else
                                    <img class="w-9 h-9 rounded-full" src="/foto/{{ Auth::user()->foto }}"
                                        alt="Photo of Profile">
                                    @endif
                                    <div class="w-full overflow-hidden">
                                        <p class="font-bold">
                                            {{ Auth::user()->name }}
                                        </p>
                                    </div>
                                </div>
                            </x-dropdown-link>

                            <hr class="w-10/12 mx-auto">

                            <x-dropdown-link :href="route('history')" class="flex items-center gap-2">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>
                                </div>
                                My bookings
                            </x-dropdown-link>

                            <x-dropdown-link class="flex items-center gap-2">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>

                                </div>
                                Wishlist
                            </x-dropdown-link>

                            <hr class="w-10/12 mx-auto">

                            <x-dropdown-link class="flex items-center gap-2">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                    </svg>

                                </div>
                                Help
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();"
                                    class="flex items-center gap-2">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                        </svg>

                                    </div>
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @else
                @if(request()->is('/'))
                <a href="{{ route('login') }}"
                    class="ml-4 font-semibold dark:text-[#1F2937] dark:hover:text-gray-400">Log
                    in</a>
                <a href="{{ route('role.index') }}"
                    class="ml-4 bg-[#3C6A91] font-semibold text-white p-2 rounded-lg hover:text-gray-400">Register</a>
                @elseif(request()->is('login'))
                <a href="{{ route('partnerLogin-form') }}"
                    class="ml-4 font-semibold dark:text-[#1F2937] dark:hover:text-gray-400">Log
                    in as Partner</a>
                <a href="{{ route('role.index') }}"
                    class="ml-4 bg-[#3C6A91] font-semibold text-white p-2 rounded-lg hover:text-gray-400">Register</a>
                @elseif(request()->is('partner/login'))
                <a href="{{ route('login') }}"
                    class="ml-4 font-semibold dark:text-[#1F2937] dark:hover:text-gray-400">Log
                    in as Customer</a>
                <a href="{{ route('role.index') }}"
                    class="ml-4 bg-[#3C6A91] font-semibold text-white p-2 rounded-lg hover:text-gray-400">Register</a>
                @elseif(request()->is('role'))
                <a href="{{ route('login') }}"
                    class="ml-4 font-semibold dark:text-[#1F2937] dark:hover:text-gray-400">Log
                    in</a>
                @endif
                @endauth
            </div>
            @endif
            <!-- Settings Dropdown -->

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            @auth
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
            @else
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                in</a>

            <a href="/role"
                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endauth
        </div>
        @endif
    </div>
</nav>
