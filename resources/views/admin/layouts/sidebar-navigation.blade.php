<x-splade-toggle data="isSignal,isReview,isPrice,isUserManagement,isPlan">
    <nav class="flex-1 space-y-1 px-2 py-4" aria-label="Sidebar">
        <div class="space-y-2">
            <!-- Current: "bg-chestnut-100 text-chestnut-900", Default: "bg-white text-chestnut-600 hover:bg-chestnut-50 hover:text-chestnut-900" -->
            <a href="{{route('admin.dashboard')}}"
               class="bg-chestnut-100 text-chestnut-900 group w-full flex items-center pl-2 py-2 text-sm font-medium rounded-md">
                <!--
                  Heroicon name: outline/home

                  Current: "text-chestnut-500", Default: "text-chestnut-400 group-hover:text-chestnut-500"
                -->
                <svg class="text-chestnut-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                </svg>
                Dashboard
            </a>
        </div>

        <div class="space-y-1">
            <!-- Current: "bg-chestnut-100 text-chestnut-900", Default: "bg-white text-chestnut-600 hover:bg-chestnut-50 hover:text-chestnut-900" -->
            <button
                @click.prevent="toggle('isSignal')"
                type="button"
                class="bg-white text-chestnut-600 hover:bg-chestnut-50 hover:text-chestnut-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-gold-500"
                aria-controls="sub-menu-1" aria-expanded="false">
                <!-- Heroicon name: outline/users -->
                <svg class="mr-3 h-6 w-6 flex-shrink-0 text-chestnut-400 group-hover:text-chestnut-500"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" aria-hidden="true">
                    <path d="M16.364 3.636a.75.75 0 00-1.06 1.06 7.5 7.5 0 010 10.607.75.75 0 001.06 1.061 9 9 0 000-12.728zM4.697 4.697a.75.75 0 00-1.061-1.06 9 9 0 000 12.727.75.75 0 101.06-1.06 7.5 7.5 0 010-10.607z"/>
                    <path d="M12.475 6.465a.75.75 0 011.06 0 5 5 0 010 7.07.75.75 0 11-1.06-1.06 3.5 3.5 0 000-4.95.75.75 0 010-1.06zM7.525 6.465a.75.75 0 010 1.06 3.5 3.5 0 000 4.95.75.75 0 01-1.06 1.06 5 5 0 010-7.07.75.75 0 011.06 0zM11 10a1 1 0 11-2 0 1 1 0 012 0z"/>
                </svg>
                <span class="flex-1">Signal</span>
                <!-- Expanded: "text-chestnut-400 rotate-90", Collapsed: "text-chestnut-300" -->
                <svg
                    class="text-chestnut-300 ml-3 h-5 w-5 flex-shrink-0 transform transition-colors duration-150 ease-in-out group-hover:text-chestnut-400"
                    viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M6 6L14 10L6 14V6Z" fill="currentColor"/>
                </svg>
            </button>
            <x-expand-nav v-show="isSignal">


{{--                <x-expand-nav-link as="Link" href="{{route('admin.signal-futures.index')}}">--}}
{{--                    Signal Future--}}
{{--                </x-expand-nav-link>--}}


            </x-expand-nav>

        </div>
        <div class="space-y-1">
            <!-- Current: "bg-chestnut-100 text-chestnut-900", Default: "bg-white text-chestnut-600 hover:bg-chestnut-50 hover:text-chestnut-900" -->
            <button
                @click.prevent="toggle('isPlan')"
                type="button"
                class="bg-white text-chestnut-600 hover:bg-chestnut-50 hover:text-chestnut-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-gold-500"
                aria-controls="sub-menu-1" aria-expanded="false">

                <svg class="mr-3 h-6 w-6 flex-shrink-0 text-chestnut-400 group-hover:text-chestnut-500"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M19 5.5a4.5 4.5 0 01-4.791 4.49c-.873-.055-1.808.128-2.368.8l-6.024 7.23a2.724 2.724 0 11-3.837-3.837L9.21 8.16c.672-.56.855-1.495.8-2.368a4.5 4.5 0 015.873-4.575c.324.105.39.51.15.752L13.34 4.66a.455.455 0 00-.11.494 3.01 3.01 0 001.617 1.617c.17.07.363.02.493-.111l2.692-2.692c.241-.241.647-.174.752.15.14.435.216.9.216 1.382zM4 17a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                </svg>

                <span class="flex-1">Package</span>
                <!-- Expanded: "text-chestnut-400 rotate-90", Collapsed: "text-chestnut-300" -->
                <svg
                    class="text-chestnut-300 ml-3 h-5 w-5 flex-shrink-0 transform transition-colors duration-150 ease-in-out group-hover:text-chestnut-400"
                    viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M6 6L14 10L6 14V6Z" fill="currentColor"/>
                </svg>
            </button>
            <x-expand-nav v-show="isPlan">
{{--                <x-expand-nav-link class="text-red-800" as="Link" href="{{route('admin.plans.index')}}">
                    Plan
                </x-expand-nav-link>--}}
            </x-expand-nav>

        </div>
        <div class="space-y-1">
            <!-- Current: "bg-chestnut-100 text-chestnut-900", Default: "bg-white text-chestnut-600 hover:bg-chestnut-50 hover:text-chestnut-900" -->
            <button
                @click.prevent="toggle('isUserManagement')"
                type="button"
                class="bg-white text-chestnut-600 hover:bg-chestnut-50 hover:text-chestnut-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-gold-500"
                aria-controls="sub-menu-4" aria-expanded="false">
                <!-- Heroicon name: outline/inbox -->
                <svg class="mr-3 h-6 w-6 flex-shrink-0 text-chestnut-400 group-hover:text-chestnut-500"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                </svg>
                <span class="flex-1">User Management</span>
                <!-- Expanded: "text-chestnut-400 rotate-90", Collapsed: "text-chestnut-300" -->
                <svg
                    class="text-chestnut-300 ml-3 h-5 w-5 flex-shrink-0 transform transition-colors duration-150 ease-in-out group-hover:text-chestnut-400"
                    viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M6 6L14 10L6 14V6Z" fill="currentColor"/>
                </svg>
            </button>
            <!-- Expandable link section, show/hide based on state. -->
            <x-expand-nav v-show="isUserManagement">

                <x-expand-nav-link as="Link" href="{{route('admin.users.index')}}">
                    Users
                </x-expand-nav-link>

                <x-expand-nav-link as="Link" href="{{route('admin.roles.index')}}">
                    Roles
                </x-expand-nav-link>
                <x-expand-nav-link as="Link" href="{{route('admin.permissions.index')}}">
                    Permissions
                </x-expand-nav-link>


            </x-expand-nav>

        </div>

    </nav>
</x-splade-toggle>
