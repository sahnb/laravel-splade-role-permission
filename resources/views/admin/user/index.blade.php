<x-admin-layout>
    <x-admin-header>
        <x-admin-header-text>

            {{ __('List User') }}
        </x-admin-header-text>

                <x-admin-header-link href="{{route('admin.users.create')}}">
                    {{ __('Create User') }}
                </x-admin-header-link>
    </x-admin-header>
    <x-splade-table :for="$users" search-debounce="1000" striped>

        <x-splade-cell status as="$user">


        </x-splade-cell>
        <x-splade-cell actions as="$user">
            <div class="inline-flex space-x-6">


            </div>
        </x-splade-cell>

    </x-splade-table>
</x-admin-layout>
