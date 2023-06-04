<x-app-layout>
<style>
        ::-webkit-calendar-picker-indicator {
    filter: invert(1);}
</style>
    <x-slot name="header">
        <h2 class="Poppins text-center font-bold text-2xl text-gray-800 leading-tight"
            style="font-family:'Poppins', sans-serif;">
            Reversein.CO
        </h2>
        <p class="PTserif text-xl text-center text-[#051036]" style="font-family: 'PT Serif', serif;">Effortless Meeting At Your Finger
            Tips</p>

        @include('profile.partials.navigation')
    </x-slot>

    <div class="py-12 text-[#051036]">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h1 class="text-3xl font-bold mb-5">Account Information</h1>
                        @include('profile.partials.update-profile-information-form')
                </div>
            </div>
        </div>
    </div>
    <script type="application/javascript">
        const imgDiv = document.querySelector('.profile-pic-div');
        const img = document.querySelector('#photo');
        const file = document.querySelector('#file');
        const uploadBtn = document.querySelector('#uploadBtn');

        //if user hover on img div 

        imgDiv.addEventListener('mouseenter', function () {
            uploadBtn.style.display = "block";
        });

        //if we hover out from img div

        imgDiv.addEventListener('mouseleave', function () {
            uploadBtn.style.display = "none";
        });

        //lets work for image showing functionality when we choose an image to upload

        //when we choose a foto to upload

        file.addEventListener('change', function () {
            //this refers to file
            const choosedFile = this.files[0];

            if (choosedFile) {

                const reader = new FileReader(); //FileReader is a predefined function of JS

                reader.addEventListener('load', function () {
                    img.setAttribute('src', reader.result);
                });

                reader.readAsDataURL(choosedFile);
            }
        });

        document.querySelectorAll('#nav div a').forEach
        (link =>{
            if (link.href == window.location.href){
                link.setAttribute('aria-current', 'page')
            }
        })
    </script>
</x-app-layout>
