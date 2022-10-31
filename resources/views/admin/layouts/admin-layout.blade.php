<x-splade-toggle data="isSidebar, isProfile">
    <div>
        <x-splade-transition show="isSidebar">
            <div class="relative z-40 md:hidden" role="dialog" aria-modal="true">

                <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

                <div class="fixed inset-0 z-40 flex">

                    <div class="relative flex w-full max-w-xs flex-1 flex-col bg-gold-700 pt-5 pb-4">

                        <div class="absolute top-0 right-0 -mr-12 pt-2">
                            <button
                                @click.prevent="toggle('isSidebar',false)"
                                type="button"
                                class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                                <span class="sr-only">Close sidebar</span>
                                <!-- Heroicon name: outline/x-mark -->
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>

                        <div class="flex flex-shrink-0 items-center px-4">
                            <x-application-logo class="h-8 w-auto" alt="Company Name"/>

                        </div>
                        <div class="mt-5 h-0 flex-1 overflow-y-auto">
                            @include('admin.layouts.sidebar-navigation')

                        </div>

                    </div>

                    <div class="w-14 flex-shrink-0" aria-hidden="true">
                        <!-- Dummy element to force sidebar to shrink to fit close icon -->
                    </div>

                </div>
            </div>
        </x-splade-transition>
        <!-- Static sidebar for desktop -->
        <div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">

            <div class="flex min-h-0 flex-1 flex-col bg-gold-800">
                <div class="flex h-16 flex-shrink-0 items-center bg-gold-900 px-4">
                    {{--                    <x-application-logo class="h-8 w-auto" alt="Company Name"/>--}}
                    <h4 class="font-semibold text-white h-8 w-auto">KCS WORLD</h4>
                </div>
                <div class=" flex flex-1 flex-col overflow-y-auto">
                    @include('admin.layouts.sidebar-navigation')
                </div>
            </div>
        </div>
        <div class="flex flex-1 flex-col md:pl-64">
            <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 bg-white shadow">
                <button
                    @click.prevent="toggle('isSidebar',true)"
                    type="button"
                    class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gold-500 md:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <!-- Heroicon name: outline/bars-3-bottom-left -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12"/>
                    </svg>
                </button>
                <div class="flex flex-1 justify-between px-4">
                    <div class="flex flex-1">

                    </div>
                    <div class="ml-4 flex items-center md:ml-6">
                        <button type="button"
                                class="rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-gold-500 focus:ring-offset-2">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/>
                            </svg>
                        </button>


                        <div class="relative ml-3">
                            <div>
                                <button
                                    @click.prevent="toggle('isProfile')"
                                    type="button"
                                    class="flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 focus:ring-offset-2"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full"
                                         src="https://avatars.dicebear.com/api/initials/kcs-world.svg"
                                         alt="">
                                </button>
                            </div>

                            <x-splade-transition show="isProfile">

                                <div
                                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <Link href="{{ route('profile.user.show',\auth()->user()->id) }}"
                                          class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                          tabindex="-1"
                                          id="user-menu-item-1">
                                    Profile Settings</Link>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-responsive-nav-link as="a" :href="route('logout')"
                                                               onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-responsive-nav-link>
                                    </form>

                                </div>
                            </x-splade-transition>
                        </div>
                    </div>
                </div>
            </div>
            <main>
                <div class="py-6">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                        {{$slot}}
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-splade-toggle>
