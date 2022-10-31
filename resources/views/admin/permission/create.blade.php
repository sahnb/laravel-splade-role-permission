<x-admin-layout>

    <x-admin-header>
        <x-admin-header-text>
            {{ __('Create Permission') }}
        </x-admin-header-text>

        <x-admin-header-link href="{{route('admin.permissions.index')}}">
            {{ __('List Permission') }}
        </x-admin-header-link>
    </x-admin-header>

    <div class="py-4">
        <x-splade-form :action="route('admin.permissions.store')" class="space-y-5">
            <x-splade-input name="title" label="Title"/>

            <x-splade-submit class="bg-gold-700 hover:bg-gold-900"/>
        </x-splade-form>
    </div>
</x-admin-layout>
