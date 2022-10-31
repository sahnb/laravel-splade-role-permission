<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use App\Tables\Users;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        return view('admin.user.index', [
            'users' => Users::class,
        ]);
    }


    public function create()
    {
        $roles = Role::all();

        return view('admin.user.create', [
            'roles' => $roles->pluck('title', 'id')
        ]);
    }


    public function store(StoreUserRequest $request)
    {
        $request->safe()->only(['name', 'email', 'password', 'status']);
        $user = new User();

        $user->fill(['email' => $request->email,
            'password' => Hash::make($request->password)])->save();
    }


    public function show(User $user)
    {

        return view('admin.user.show', [
            'user' => $user

        ]);
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', [
            'user' => $user

        ]);
    }


    public function update(UpdateUserRequest $request, User $user)
    {

    }


    public function destroy(User $user)
    {

    }
}
