<?php

namespace App\Tables;

use App\Models\Permission;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class Permissions extends AbstractTable
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
        return Permission::query();
    }


    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['id', 'title'])
            ->column('id', sortable: true)
            ->column('title', sortable: true)
            ->column('actions', 'Actions')
            ->bulkAction(
                'Bulk Delete',
                confirm: true,
                confirmText: 'Are You Sure',
                confirmButton: 'Delete!',
                cancelButton: 'Cancel',
                each: function (Permission $permission) {
                    $permission->delete();
                }
            )
            ->export()
            ->paginate(15);
    }
}
