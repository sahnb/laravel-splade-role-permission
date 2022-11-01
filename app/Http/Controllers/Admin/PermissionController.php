<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Permission\StorePermissionRequest;
use App\Http\Requests\Permission\UpdatePermissionRequest;
use App\Models\Permission;
use App\Tables\Permissions;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\Facades\Toast;

class PermissionController extends Controller
{

    public function index()
    {
        return view('admin.permission.index', [
            'permissions' => Permissions::class,
        ]);
    }

    public function create()
    {
        return view('admin.permission.create');
    }

    public function store(StorePermissionRequest $request)
    {

        $permission = $request->safe()->only(['title']);


        Permission::create($permission)->save();
        Splade::toast('Permission Created!')->autoDismiss(5);
        return redirect()->route('admin.permissions.index');
    }


    public function show(Permission $permission)
    {
        return view('admin.permission.show', [
            'permission' => $permission
        ]);
    }


    public function edit(Permission $permission)
    {
        return view('admin.permission.edit', [
            'permission' => $permission
        ]);
    }

    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        $request->validated();

        $data = $request->safe()->only([
            'title'
        ]);

        $permission->fill($data)->update();
        Splade::toast('Permission Updated!')->autoDismiss(5);
        return redirect()->route('admin.permissions.index');

    }


    public function destroy(Permission $permission)
    {
        $permission->delete();
        Toast::title('Deleted')
            ->message('Permission Deleted !' . $permission->name)
            ->danger()
            ->autoDismiss(5);
        return redirect()->route('admin.permissions.index');
    }
}
