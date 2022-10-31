<x-admin-layout>
    <x-action-header>
        <x-action-heading>
            {{ __('Create Permission') }}
        </x-action-heading>
        <x-action-link href="{{route('admin.permissions.index')}}">
            {{ __('List Permission') }}
        </x-action-link>
    </x-action-header>
    <div class="py-4">
        <x-splade-form :action="route('admin.permissions.store')" class="space-y-5">
            <x-splade-input name="title" label="Title"/>

            <x-splade-submit class="bg-gold-700 hover:bg-gold-900"/>
        </x-splade-form>
    </div>
</x-admin-layout>
