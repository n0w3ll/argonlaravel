<x-app-layout>
    <div class="relative w-full mx-auto mt-5 ">

        <div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 overflow-hidden break-words bg-white border-0 dark:bg-slate-850 dark:shadow-dark-xl shadow-3xl rounded-2xl bg-clip-border">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-auto max-w-full px-3">
                    <div class="relative inline-flex items-center justify-center text-white transition-all duration-200 ease-in-out text-base h-19 w-19 rounded-xl">
                        <img src="{{asset('argon/img/team-1.jpg') }}" alt="profile_image" class="w-full shadow-2xl rounded-xl" />
                    </div>
                </div>
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                    <div class="h-full">
                        <h5 class="mb-1 dark:text-white">{{ Auth::user()->name }}</h5>
                        <p class="mb-0 font-semibold leading-normal dark:text-white dark:opacity-60 text-sm">Public Relations</p>
                    </div>
                </div>
                <div class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">
                    <div class="relative right-0">
                        <ul class="relative flex flex-wrap p-1 list-none bg-gray-50 rounded-xl" nav-pills role="tablist">
                            <li class="z-30 flex-auto text-center">
                                <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg bg-inherit text-slate-700" nav-link active href="javascript:;" role="tab" aria-selected="true">
                                    <i class="ni ni-app"></i>
                                    <span class="ml-2">App</span>
                                </a>
                            </li>
                            <li class="z-30 flex-auto text-center">
                                <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg bg-inherit text-slate-700" nav-link href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-email-83"></i>
                                    <span class="ml-2">Messages</span>
                                </a>
                            </li>
                            <li class="z-30 flex-auto text-center">
                                <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-colors ease-in-out border-0 rounded-lg bg-inherit text-slate-700" nav-link href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span class="ml-2">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full p-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
                <!-- User Profile -->
                <form method="post" action="{{ route('profile.update') }}">
                    @csrf
                    @method('patch')
                    <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                            <div class="flex items-center">
                                <p class="mb-0 dark:text-white/80">Edit Profile</p>
                            </div>
                        </div>
                        <div class="flex-auto p-6">
                            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">User Information</p>
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <x-input-label for="name" :value="__('Name')" />
                                        <x-text-input id="name" type="text" name="name" :value="old('name', $user->name)" autocomplete="name" required autofocus />
                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input type="email" name="email" :value="old('email', $user->email)" autocomplete="username" required />
                                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                    </div>
                                </div>
                                <button type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">{{ __('Save') }}</button>
                            </div>
                </form>
                <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
                <form method="post" action="{{ route('password.update') }}">
                    @csrf
                    @method('put')
                    <!-- Update Password -->
                    <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Update Password</p>

                    <div class="flex flex-wrap -mx-3">
                        <!-- <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                <div class="mb-4">
                                    <label for="address" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Address</label>
                                    <input type="text" name="address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div> -->
                        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                            <div class="mb-4">
                                <x-input-label for="current_password" :value="__('Current Password')" />
                                <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                <!-- <input type="text" name="city" value="New York" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" /> -->
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                            <div class="mb-4">
                                <x-input-label for="password" :value="__('New Password')" />
                                <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                <!-- <label for="country" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Country</label>
                                    <input type="text" name="country" value="United States" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" /> -->
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                            <div class="mb-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                <!-- <label for="postal code" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Postal code</label>
                                    <input type="text" name="postal code" value="437300" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" /> -->
                            </div>
                        </div>
                        <button type="submit" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">{{ __('Save') }}</button>

                    </div>
                </form>
                <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />

                <!-- Delete Account -->
                <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm"> {{ __('Delete Account') }}</p>
                <div class="flex flex-wrap -mx-3">
                    
                    <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                        <div class="mb-4">
                        @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
        <!-- Profile Card -->
        <div class="w-full max-w-full px-3 mt-6 shrink-0 md:w-4/12 md:flex-0 md:mt-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <img class="w-full rounded-t-2xl" src="{{ asset('argon/img/bg-profile.jpg') }}" alt="profile cover image">
                <div class="flex flex-wrap justify-center -mx-3">
                    <div class="w-4/12 max-w-full px-3 flex-0 ">
                        <div class="mb-6 -mt-6 lg:mb-0 lg:-mt-16">
                            <a href="javascript:;">
                                <img class="h-auto max-w-full border-2 border-white border-solid rounded-circle" src="{{ asset('argon/img/team-2.jpg') }}" alt="profile image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="border-black/12.5 rounded-t-2xl p-6 text-center pt-0 pb-6 lg:pt-2 lg:pb-4">
                    <div class="flex justify-between">
                        <button type="button" class="hidden px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-cyan-500 lg:block tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Connect</button>
                        <button type="button" class="block px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-cyan-500 lg:hidden tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">
                            <i class="ni ni-collection text-2.8"></i>
                        </button>
                        <button type="button" class="hidden px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-slate-700 lg:block tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Message</button>
                        <button type="button" class="block px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-slate-700 lg:hidden tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">
                            <i class="ni ni-email-83 text-2.8"></i>
                        </button>
                    </div>
                </div>

                <div class="flex-auto p-6 pt-0">
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full max-w-full px-3 flex-1-0">
                            <div class="flex justify-center">
                                <div class="grid text-center">
                                    <span class="font-bold dark:text-white text-lg">22</span>
                                    <span class="leading-normal dark:text-white text-sm opacity-80">Friends</span>
                                </div>
                                <div class="grid mx-6 text-center">
                                    <span class="font-bold dark:text-white text-lg">10</span>
                                    <span class="leading-normal dark:text-white text-sm opacity-80">Photos</span>
                                </div>
                                <div class="grid text-center">
                                    <span class="font-bold dark:text-white text-lg">89</span>
                                    <span class="leading-normal dark:text-white text-sm opacity-80">Comments</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <h5 class="dark:text-white ">
                            Mark Davis
                            <span class="font-light">, 35</span>
                        </h5>
                        <div class="mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
                            <i class="mr-2 dark:text-white ni ni-pin-3"></i>
                            Bucharest, Romania
                        </div>
                        <div class="mt-6 mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
                            <i class="mr-2 dark:text-white ni ni-briefcase-24"></i>
                            Solution Manager - Creative Tim Officer
                        </div>
                        <div class="dark:text-white/80">
                            <i class="mr-2 dark:text-white ni ni-hat-3"></i>
                            University of Computer Science
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('layouts.footer')
    </div>
    </div>
</x-app-layout>