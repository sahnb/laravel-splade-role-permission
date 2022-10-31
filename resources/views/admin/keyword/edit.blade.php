<x-admin-layout>
    <x-action-header>
        <x-action-heading>
            {{ __('Edit Permission') }}
        </x-action-heading>
        <x-action-link href="{{route('admin.permissions.index')}}">
            {{ __('List Permission') }}
        </x-action-link>
    </x-action-header>
    <x-splade-form method="put" :default="$permission" :action="route('admin.permissions.update',$permission)" class="space-y-5">
        <x-splade-input name="title" label="Title"/>
        <x-splade-submit/>
    </x-splade-form>
</x-admin-layout>
