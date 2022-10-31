<x-admin-layout>
    <x-action-header>
        <x-action-heading>
            {{ __('List Permission') }}
        </x-action-heading>

        <x-action-link href="{{route('admin.permissions.create')}}">
            {{ __('Create Permission') }}
        </x-action-link>
    </x-action-header>
    <x-splade-table :for="$permissions" search-debounce="1000">
        <x-splade-cell actions as="$permission">
            <div class="inline-flex space-x-6">

                <x-splade-form
                    confirm="Delete Permission"
                    confirm-text="Are you sure you want to delete permission: {{$permission->title}}?"
                    confirm-button="Yes, delete!"
                    cancel-button="No, I want to stay!" method="delete"
                    :action="route('admin.permissions.destroy',$permission->id)">

                    <x-button>
                        <x-action-delete-icon/>
                    </x-button>

                </x-splade-form>

                <Link href="{{route('admin.permissions.show',$permission->id)}}"
                      class="rounded-full shadow-sm bg-indigo-500 hover:bg-indigo-300 text-white font-bold py-2 px-4 focus:outline-none focus:shadow-outline">
                <x-action-show-icon/>

                </Link>
                <Link href="{{route('admin.permissions.edit',$permission->id)}}"
                      class="rounded-full shadow-sm bg-yellow-500 hover:bg-yellow-300 text-white font-bold py-2 px-4 focus:outline-none focus:shadow-outline">
                <x-action-edit-icon/>
                </Link>


            </div>
        </x-splade-cell>
    </x-splade-table>
</x-admin-layout>
