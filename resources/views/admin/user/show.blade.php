<x-splade-modal>
    <div class="my-5 px-4 pt-5 pb-5 sm:px-0 sm:pt-0">
        <dl class="space-y-8 px-4 sm:space-y-6 sm:px-6">
            <div>
                <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">User Name:-</dt>
                <dd class="mt-1 text-sm text-gray-900  sm:col-span-2">
                    <p>{{$user->name}}</p>
                </dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">User Email:-</dt>
                <dd class="mt-1 text-sm text-gray-900  sm:col-span-2">
                    <p>{{$user->email}}</p>
                </dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">User Role:-</dt>
                <dd class="mt-1 text-sm text-gray-900  sm:col-span-2">

                    <p>{{$user->isAdmin ? 'Admin' : 'User' }}</p>
                </dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">User Status:-</dt>
                <dd class="mt-1 text-sm text-gray-900  sm:col-span-2">
                    <p><x-action-status-button :status="$user->status"/></p>
                </dd>
            </div>
        </dl>
    </div>
</x-splade-modal>
