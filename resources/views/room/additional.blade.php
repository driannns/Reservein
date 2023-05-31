<x-app-layout>
    <div class="mx-10 pb-10 text-[#051036]">
        <!-- Starter -->
        <form action="{{route('totalAdditional', $room->id)}}" method="post">
            @csrf
            <div>
                <h1 class="font-bold text-2xl mb-5">Starter</h1>
                <div class="flex gap-10">
                    <!-- CARD Starter-->
                    @foreach ($starter as $starters)
                    <div class="w-2/12 relative" style="height: 49vh;">
                        <img class="rounded-xl " src="/additional/{{ $starters->foto }}" alt="">
                        <div class="mt-2">
                            <p class="font-bold">{{ $starters->name }}</p>
                            <p class="text-[#6B7280] text-sm">{{ $starters->description }}</p>
                        </div>
                        <p class="font-bold mt-2">@currency($starters->price)/Plate</p>
                        <div class="flex gap-3 justify-center absolute bottom-0">
                            <button class="bg-[#3C6A91] text-white p-2 rounded-full w-10 h-10" type="button"
                                onclick="incrementNumber('{{ $starters->id }}')">+</button>
                            <input class="bg-[#3C6A91] text-white font-bold rounded-full w-20 text-center" type="text"
                                id="myNumber{{$starters->id}}" name="myNumber{{$starters->id}}" value="0" min="0"
                                readonly>
                            <button class="bg-[#3C6A91] text-white p-2 rounded-full w-10 h-10" type="button"
                                onclick="decrementNumber('{{ $starters->id }}')">-</button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Main Course -->
            <div class="my-5">
                <h1 class="font-bold text-2xl mb-5">Main Course</h1>
                <div class="flex gap-10">
                    <!-- CARD -->
                    @foreach ($mainCourse as $mainCourses)
                    <div class="w-2/12 relative" style="height: 49vh;">
                        <img class="rounded-xl " src="/additional/{{ $mainCourses->foto }}" alt="">
                        <div class="mt-2">
                            <p class="font-bold">{{ $mainCourses->name }}</p>
                            <p class="text-[#6B7280] text-sm">{{ $mainCourses->description }}</p>
                        </div>
                        <p class="font-bold mt-2">@currency($mainCourses->price)/Plate</p>
                        <div class="flex gap-3 justify-center absolute bottom-0">
                            <button class="bg-[#3C6A91] text-white p-2 rounded-full w-10 h-10" type="button"
                                onclick="incrementNumber('{{ $mainCourses->id }}')">+</button>
                            <input class="bg-[#3C6A91] text-white font-bold rounded-full w-20 text-center" type="text"
                                id="myNumber{{$mainCourses->id}}" name="myNumber{{$mainCourses->id}}" value="0" min="0"
                                readonly>
                            <button class="bg-[#3C6A91] text-white p-2 rounded-full w-10 h-10" type="button"
                                onclick="decrementNumber('{{ $mainCourses->id }}')">-</button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Dessert and Drinks -->
            <div class="pb-10">
                <h1 class="font-bold text-2xl mb-5">Dessert & Drinks</h1>
                <div class="flex gap-10">
                    <!-- CARD -->
                    @foreach ($drinks as $drink)
                    <div class="w-2/12 relative" style="height: 49vh;">
                        <img class="rounded-xl " src="/additional/{{ $drink->foto }}" alt="">
                        <div class="mt-2">
                            <p class="font-bold">{{ $drink->name }}</p>
                            <p class="text-[#6B7280] text-sm">{{ $drink->description }}</p>
                        </div>
                        <p class="font-bold mt-2">@currency($drink->price)/Plate</p>
                        <div class="flex gap-3 justify-center absolute bottom-0">
                            <button class="bg-[#3C6A91] text-white p-2 rounded-full w-10 h-10" type="button"
                                onclick="incrementNumber('{{ $drink->id }}')">+</button>
                            <input class="bg-[#3C6A91] text-white font-bold rounded-full w-20 text-center" type="text"
                                id="myNumber{{$drink->id}}" name="myNumber{{$drink->id}}" value="0" min="0" readonly>
                            <button class="bg-[#3C6A91] text-white p-2 rounded-full w-10 h-10" type="button"
                                onclick="decrementNumber('{{ $drink->id }}')">-</button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <button type="submit " class="px-8 py-2 bg-[#3C6A91] rounded-2xl font-bold text-white">Pesan</button>
        </form>
    </div>
    <!-- Toast if cart not added yet -->
    @if (Session::has('error'))
    <div id="toast-undo"
        class="flex items-center w-full max-w-xs p-4 text-white bg-red-500 rounded-lg shadow fixed right-4 bottom-4"
        role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-6 h-6 mr-3">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
        </svg>

        <div class="text-sm font-normal text-white">
            {{ Session::get('error') }}
        </div>
        <div class="flex items-center ml-auto space-x-2">
            <button type="button"
                class="bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8"
                data-dismiss-target="#toast-undo" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
    @endif
    <script>
        function incrementNumber(itemId) {
            var currentNumber = parseInt(document.getElementById('myNumber' + itemId).value);
            document.getElementById('myNumber' + itemId).value = currentNumber + 1;

            console.log('myNumber' + itemId);
            console.log(currentNumber);
        }

        function decrementNumber(itemId) {
            var currentNumber = parseInt(document.getElementById('myNumber' + itemId).value);
            if (currentNumber > 0) {
                document.getElementById('myNumber' + itemId).value = currentNumber - 1;
                console.log(currentNumber);
            }
        }

    </script>
</x-app-layout>
