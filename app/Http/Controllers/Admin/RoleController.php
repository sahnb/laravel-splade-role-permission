<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\StoreRoleRequest;
use App\Http\Requests\Role\UpdateRoleRequest;
use App\Models\Permission;
use App\Models\Role;
use App\Tables\Roles;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\Facades\Toast;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Roles::class;
        return view('admin.role.index', [
            'roles' => Roles::class,
        ]);
    }

    public function create()
    {
        $permissions = Permission::select('id', 'title')
            ->get()
            ->pluck('title', 'id');

        return view('admin.role.create', ['permissions' => $permissions]);
    }


    public function store(StoreRoleRequest $request)
    {

        $validated = $request->validated();
        $data = $request->safe()->only(['title']);
        $permissions = $request->safe()->only(['permissions']);
        $role = new Role();


        $role->fill($data)->save();
        $role->permissions()->sync($permissions['permissions']);


        Splade::toast('Role Created!')->autoDismiss(5);
        return redirect()->route('admin.roles.index');
    }


    public function show(Role $role)
    {
        $permissions = Permission::select('id', 'title')
            ->get()
            ->pluck('title', 'id');

        return view('admin.role.show', [
            'role' => $role,
            'permissions'=>$permissions
        ]);
    }


    public function edit(Role $role)
    {

        $permissions = Permission::select('id', 'title')
            ->get()
            ->pluck('title', 'id');

        return view('admin.role.edit', [
            'role' => $role,
            'permissions'=>$permissions
        ]);
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {

        $request->validated();

        $roleTitle = $request->safe()->only([
            'title'
        ]);

        $permission = $request->safe()->only([
            'permissions',
        ]);


        $role->fill($roleTitle)->update();
        $role->permissions()->detach();
        $role->permissions()->attach($permission['permissions']);

        Splade::toast('Role Updated!')->autoDismiss(5);
        return redirect()->route('admin.roles.index');
    }


    public function destroy(Role $role)
    {
        $role->permissions()->detach();
        $role->users()->detach();
        $role->delete();


        Toast::title('Deleted')
            ->message('Role Deleted !' . $role->title)
            ->danger()
            ->autoDismiss(5);
        return redirect()->route('admin.roles.index');
    }
}
