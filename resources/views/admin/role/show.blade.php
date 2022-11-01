<x-splade-modal>
    <div class="my-5 px-4 pt-5 pb-5 sm:px-0 sm:pt-0">
        <dl class="space-y-8 px-4 sm:space-y-6 sm:px-6">
            <div>
                <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">Role</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                    <p>{{$role->title}}</p>
                </dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">Permissions</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                    @foreach($role->permissions as $permission)
                        <p>{{$permission->title}}</p>
                    @endforeach
                </dd>
            </div>
        </dl>
    </div>
</x-splade-modal>
