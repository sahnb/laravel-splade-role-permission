<x-admin-layout>

    <x-admin-header>
        <x-admin-header-text>
            {{ __('Edit Permission') }}
        </x-admin-header-text>

        <x-admin-header-link href="{{route('admin.permissions.index')}}">
            {{ __('List Permission') }}
        </x-admin-header-link>
    </x-admin-header>
    <x-splade-form method="put" :default="$permission" :action="route('admin.permissions.update',$permission)"
                   class="space-y-5" unguarded>
        <x-splade-input name="title" label="Title"/>
        <x-splade-submit>
            Update
        </x-splade-submit>
    </x-splade-form>
</x-admin-layout>
