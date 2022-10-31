<x-admin-layout>
    <x-admin-header>
        <x-admin-header-text>
            {{ __('Edit User') }}
        </x-admin-header-text>
        <x-admin-header-link href="{{route('admin.users.index')}}">
            {{ __('List User') }}
        </x-admin-header-link>
    </x-admin-header>
    <section aria-labelledby="create-user-heading">
        <x-splade-form method="put" :default="$user" :action="route('admin.users.update',$user->id)" unguarded>
            <div class="shadow  sm:rounded-md">
                <div class="bg-white py-6 px-4 sm:p-6">
                    <div class="mt-6 grid grid-cols-4 gap-6">
                        <div class="col-span-4 sm:col-span-2">
                            <x-splade-input name="name"
                                            label="Full Name"/>
                        </div>
                        <div class="col-span-4 sm:col-span-2">
                            <x-splade-input name="email"
                                            label="Email"/>
                        </div>
                        <div class="col-span-4 sm:col-span-2">
                            <x-splade-input type="password" name="password" label="Update Password"/>
                        </div>

                        <div class="col-span-4 sm:col-span-2">
                            <x-splade-select name="role_id" placeholder="Assign Role" label="Role" :options="$roles" choices/>
                        </div>

                        <div class="col-span-4 sm:col-span-4">
                            <x-splade-select name="status" placeholder="Status" label="Status" :options="['1'=>'Active','0'=>'Inactive']" choices/>
                        </div>

                        <x-splade-submit class="bg-gold-700 hover:bg-gold-900">
                            Update
                        </x-splade-submit>
                    </div>
                </div>
            </div>
        </x-splade-form>
    </section>

</x-admin-layout>
