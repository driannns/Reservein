<section>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    <div class="flex">
    <form method="post" action="{{ route('avatar') }}" class="flex flex-col h-fit items-center w-3/12 mt-6 space-y-6"
            enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="w-10/12 h-fit flex justify-center">
                <div class="relative profile-pic-div">
                @if(Auth::user()->foto == null)
                            <img class="w-40 h-40 rounded-full" src="/assets/svg/avatar.png" id="photo" alt="Photo of Profile">
                            @else
                            <img class="w-40 h-40 rounded-full" src="/foto/{{ old('foto', $user->foto) }}" id="photo" alt="Photo of Profile">
                                @endif
                    <input class="hidden" type="file" id="file" name="foto" autocomplete="foto" required>
                    <label
                        class="hidden w-40 h-40 rounded-full absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 cursor-pointer transition-all"
                        for="file" id="uploadBtn" style="background-color: rgba(217,217,217,0.8)">
                        <div
                            class="absolute w-10/12 flex flex-col items-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            <img class="w-1/5" src="/assets/svg/profile.png" alt="">
                            <p class="text-white font-bold">Choose Photo</p>
                        </div>
                    </label>
                </div>
            </div>
            <button type='submit' class="bg-[#5EA5C9] text-white py-2 px-4 rounded-3xl hover:bg-[#3C6A91] font-medium transition-all">Change Photo</button>
        </form>
        <form method="post" action="{{ route('profile.update') }}" class="w-9/12 mt-6 space-y-6"
            enctype="multipart/form-data">
            @csrf
            @method('patch')
            <!-- NAME -->
            <div class="mt-3">
                <x-input-label for="name" :value="__('Name')" class="text-black" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                    :value="old('name', $user->name)" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <!-- Gender -->
            <div class="mt-3">
                <x-input-label for="gender" :value="__('Gender')" class="text-black" required/>
                <select
                    class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                    name="gender" id="gender" autofocus>
                    <option value="" {{ old('gender', $user->gender) == Null ? 'selected disabled' : '' }}>Choose you gender</option>
                    <option value="Men" {{ old('gender', $user->gender) == 'Men' ? 'selected' : '' }}>Men</option>
                    <option value="Women" {{ old('gender', $user->gender) == 'Women' ? 'selected' : '' }}>Women</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('gender')" />
            </div>

            <!-- Email -->
            <div class="mt-3">
                <x-input-label for="email" :value="__('Email')" class="text-black" required/>
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                    :value="old('email', $user->email)" required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                    @endif
                </div>
                @endif
            </div>

            <!-- Date of Birth -->
            <div class="mt-3">
                <x-input-label for="dateofbirth" :value="__('Date of Birth')" class="text-black" required/>
                <x-text-input id="dateofbirth" name="dateofbirth" type="date" class="mt-1 block w-full"
                    :value="old('dateofbirth', $user->dateofbirth)" autofocus autocomplete="dateofbirth" />
                <x-input-error class="mt-2" :messages="$errors->get('dateofbirth')" />
            </div>

            <!-- Address -->
            <div class="mt-3">
                <x-input-label for="address" :value="__('Address')" class="text-black" required/>
                <x-text-input id="address" name="address" type="text" class="mt-1 block w-full"
                    :value="old('address', $user->address)" autofocus autocomplete="address" />
                <x-input-error class="mt-2" :messages="$errors->get('address')" />
            </div>

            <!-- Phone Number -->
            <div class="mt-3">
                <x-input-label for="nomor" :value="__('Phone Number')" class="text-black" required/>
                <x-text-input id="nomor" name="nomor" type="text" class="mt-1 block w-full"
                    :value="old('nomor', $user->nomor)" autofocus autocomplete="phonenumber" />
                <x-input-error class="mt-2" :messages="$errors->get('nomor')" />
            </div>

            <!-- About You -->
            <div class="mt-3">
                <x-input-label for="about" :value="__('About You')" class="text-black" required/>
                <textarea
                    class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                    name="about" id="about" rows="10" placeholder="........">{{old('about', $user->about)}}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div class="flex items-center gap-4 mt-5">
                <x-primary-button>{{ __('Update Profile') }}</x-primary-button>

                @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                @endif
            </div>
    </div>
    </form>
</section>
