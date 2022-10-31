<?php

namespace App\Tables;

use App\Models\User;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class Users extends AbstractTable
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
        return User::with('roles')->latest();
    }


    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['id'])
            ->column('id', sortable: true)
            ->column('name', sortable: true)
            ->column('email', label: 'Email', sortable: true)
            ->column('roles.title', 'Role', sortable: true)
            ->column('status', 'Status', sortable: true)
            ->column(label: 'Actions')
            ->withGlobalSearch()
            ->bulkAction(
                'Bulk Delete',
                confirm: true,
                confirmText: 'Are You Sure',
                confirmButton: 'Delete!',
                cancelButton: 'Cancel',
                each: function (User $user) {
                    $user->delete();
                }
            )
            ->export();
    }
}
