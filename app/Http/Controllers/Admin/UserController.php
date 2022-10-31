<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use App\Tables\Users;
use Illuminate\Support\Facades\Hash;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\Facades\Toast;

class UserController extends Controller
{

    public function index()
    {
        $users = Users::class;
        return view('admin.user.index', [
            'users' => $users
        ]);
    }


    public function create()
    {
        $roles = Role::get()->pluck('title', 'id');

        return view('admin.user.create', [
            'roles' => $roles
        ]);
    }


    public function store(StoreUserRequest $request)
    {
        $request->safe()->only(['name', 'email', 'password', 'role_id']);
        $user = new User();
        $user->fill([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])->save();
        $user->roles()->sync($request->role_id);

        Splade::toast('User Created!')->autoDismiss(5);
        return redirect()->route('admin.users.index');

    }


    public function show(User $user)
    {

        return view('admin.user.show', [
            'user' => $user

        ]);
    }

    public function edit(User $user)
    {

        $roles = Role::get()->pluck('title', 'id');

        return view('admin.user.edit', [
            'user' => $user,
            'roles' => $roles
        ]);
    }


    public function update(UpdateUserRequest $request, User $user)
    {
        $request->safe()->only(['name', 'email', 'password', 'role_id', 'status']);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => $request->status
        ]);

        Splade::toast('User Updated!')->autoDismiss(5);
        return redirect()->route('admin.users.index');
    }


    public function destroy(User $user)
    {
        $user->roles()->detach();
        $user->delete();
        Toast::title('Deleted')
            ->message('User Deleted !' . $user->name)
            ->danger()
            ->autoDismiss(5);
        return redirect()->route('admin.users.index');
    }
}
