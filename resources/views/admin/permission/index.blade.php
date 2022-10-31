<x-admin-layout>
    <x-admin-header>
        <x-admin-header-text>
            {{ __('List Permission') }}
        </x-admin-header-text>

        <x-admin-header-link href="{{route('admin.permissions.create')}}">
            {{ __('Create Permission') }}
        </x-admin-header-link>
    </x-admin-header>
    <x-splade-table :for="$permissions" search-debounce="1000">
        <x-splade-cell actions as="$permission">
            <div class="inline-flex space-x-6">
                <x-action-delete-button confirm="Delete Permission"
                                        confirm-text="Are you sure you want to delete permission: {{$permission->title}}?"
                                        :action="route('admin.permissions.destroy',$permission->id)"/>
                <x-action-show-button href="{{route('admin.permissions.show',$permission->id)}}"/>
                <x-action-edit-button href="{{route('admin.permissions.edit',$permission->id)}}"/>


            </div>
        </x-splade-cell>
    </x-splade-table>
</x-admin-layout>
