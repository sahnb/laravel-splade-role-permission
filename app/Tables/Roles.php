<?php

namespace App\Tables;

use App\Models\Role;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class Roles extends AbstractTable
{

    public function __construct()
    {
        //
    }

    public function authorize(Request $request)
    {
        return true;
    }


    public function for()
    {
        return Role::query()->with('permissions');
    }


    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['id'])
            ->column('id', sortable: true)
            ->column('title', sortable: true)
            ->column('permissions.title','Permission')
            ->column('actions', 'Actions')
            ->bulkAction(
                'Bulk Delete',
                confirm: true,
                confirmText: 'Are You Sure',
                confirmButton: 'Delete!',
                cancelButton: 'Cancel',
                each: function (Role $role) {
                    $role->delete();
                }
            )
            ->export()
            ->paginate(15);
    }
}
