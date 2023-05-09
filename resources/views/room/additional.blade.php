<x-app-layout>
    <div class="mx-10 pb-10">
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
                            id="myNumber{{$starters->id}}" name="myNumber{{$starters->id}}" value="0" min="0" readonly>
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
        <button type="submit "class="px-8 py-2 bg-[#3C6A91] rounded-2xl font-bold text-white">Pesan</button>
        </form>
    </div>
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
