<x-admin-layout>
    <x-action-header>
        <x-action-heading>
            {{ __('Edit User') }}
        </x-action-heading>
        <x-action-link href="{{route('admin.users.index')}}">
            {{ __('List User') }}
        </x-action-link>
    </x-action-header>

    <section aria-labelledby="create-user-heading">
        <x-splade-form method="put" :default="$user"  :action="route('admin.users.update',$user->id)" unguarded>

            <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="bg-white py-6 px-4 sm:p-6">
                    <div class="mt-6 grid grid-cols-4 gap-6">
                        <div class="col-span-4 sm:col-span-2">

                            <x-splade-input name="profile.first_name"
                                            label="First Name"/>

                        </div>
                        <div class="col-span-4 sm:col-span-2">
                            <x-splade-input name="profile.last_name"  label="Last Name"/>
                        </div>
                        <div class="col-span-4 sm:col-span-2">
                            <x-splade-input type="email" name="email" label="Email"/>
                        </div>
                        <div class="col-span-4 sm:col-span-2">
                            <x-splade-input type="password" name="password" label="Password"/>
                        </div>
                        <div class="col-span-4 sm:col-span-2">
                            <x-splade-input name="profile.discord_id"  label="Discord"/>
                        </div>
                        <div class="col-span-4 sm:col-span-2">
                            <x-splade-input name="profile.mobile_number"
                                            label="Mobile Number"/>
                        </div>
                        <div class="col-span-4 sm:col-span-1">
                            <x-splade-input name="profile.whatsapp_number"
                                            label="WhatsApp"/>
                        </div>
                        <div class="col-span-4 sm:col-span-1">
                            <x-splade-input name="profile.telegram_number"  label="Telegram"/>
                        </div>
                        <div class="col-span-4 sm:col-span-2">
                            <x-splade-select name="profile.country_id"  label="Country" choices>
                                @foreach($countries as $country)
                                     <option
                                        value="{{$country->id}}" {{$country->id === $user->profile->country_id ? 'selected':'' }}>
                                        {{$country->name.' | '.$country->code}}
                                    </option>
                                @endforeach
                            </x-splade-select>
                        </div>
                        <x-splade-submit class="bg-gold-700 hover:bg-gold-900"/>
                    </div>
                </div>
            </div>
        </x-splade-form>
    </section>

</x-admin-layout>
