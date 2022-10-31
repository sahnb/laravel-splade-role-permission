<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'user_create',
            ],
            [
                'id'    => 4,
                'title' => 'user_edit',
            ],
            [
                'id'    => 5,
                'title' => 'user_show',
            ],
            [
                'id'    => 6,
                'title' => 'user_delete',
            ],
            [
                'id'    => 7,
                'title' => 'user_access',
            ],
            [
                'id'    => 8,
                'title' => 'permission_create',
            ],
            [
                'id'    => 9,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 10,
                'title' => 'permission_show',
            ],
            [
                'id'    => 11,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 12,
                'title' => 'permission_access',
            ],
            [
                'id'    => 13,
                'title' => 'role_create',
            ],
            [
                'id'    => 14,
                'title' => 'role_edit',
            ],
            [
                'id'    => 15,
                'title' => 'role_show',
            ],
            [
                'id'    => 16,
                'title' => 'role_delete',
            ],
            [
                'id'    => 17,
                'title' => 'role_access',
            ],


        ];

        Permission::insert($permissions);
    }
}
