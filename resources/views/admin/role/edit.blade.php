<x-admin-layout>
    <x-admin-header>
        <x-admin-header-text>
            {{ __('Edit Role') }}
        </x-admin-header-text>
        <x-admin-header-link href="{{route('admin.roles.index')}}">
            {{ __('List Role') }}
        </x-admin-header-link>
    </x-admin-header>

    <x-splade-form method="put"
                   :default="$role"
                   :action="route('admin.roles.update',$role)" class="space-y-5" unguarded
    >

        <x-splade-input name="title" label="Title"/>

        <x-splade-select name="permissions[]" :options="$permissions"
                         placeholder="Select Permission" multiple relation/>

        <x-splade-submit>
            Update
        </x-splade-submit>
    </x-splade-form>


</x-admin-layout>
