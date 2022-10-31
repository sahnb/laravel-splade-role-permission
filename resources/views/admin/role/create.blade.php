<x-admin-layout>
    <x-admin-header>
        <x-admin-header-text>
            {{ __('Create Role') }}
        </x-admin-header-text>

        <x-admin-header-link href="{{route('admin.roles.index')}}">
            {{ __('List Role') }}
        </x-admin-header-link>
    </x-admin-header>

    <div class="py-4">
        <x-splade-form :action="route('admin.roles.store')" class="space-y-5" unguarded>
            <x-splade-input name="title" label="Title" />

            <x-splade-select name="permissions[]" :options="$permissions" placeholder="Select Permission" multiple choices />
            <x-splade-submit/>
        </x-splade-form>
    </div>
</x-admin-layout>
