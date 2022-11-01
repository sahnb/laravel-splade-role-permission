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

            <x-action-status-button  :status="$user->status" />
        </x-splade-cell>
        <x-splade-cell actions as="$user">
            <div class="inline-flex space-x-6">
                <x-action-delete-button confirm="Delete User"
                                        confirm-text="Are you sure you want to delete User: {{$user->name}}?"
                                        :action="route('admin.users.destroy',$user->id)"/>
                <x-action-show-button slideover href="{{route('admin.users.show',$user->id)}}"/>
                <x-action-edit-button href="{{route('admin.users.edit',$user->id)}}"/>

            </div>
        </x-splade-cell>

    </x-splade-table>
</x-admin-layout>
