<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserAssignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = User::find(1);
        $superAdmin->assignRole('super admin');

        // assign role karyawan
        $permission = ['show attendence', 'show salary'];
        $karyawan = User::find(2);
        $karyawan->assignRole('karyawan');
        $karyawan->givePermissionTo($permission);

        $role = Role::find(2);
        $role->givePermissionTo($permission);

        // assign role HR
        $permission = ['show employee', 'create employee', 'update employee', 'delete employee', 'show salary','update salary', 'show attendence','print attendence'];
        $hr = User::find(3);
        $hr->assignRole('hr');
        $hr->givePermissionTo($permission);

        $role = Role::find(3);
        $role->givePermissionTo($permission);

        // assign role keuangan
        $permission = ['show employee', 'show salary', 'print salary'];
        $keuangan = User::find(4);
        $keuangan->assignRole('keuangan');
        $keuangan->givePermissionTo($permission);

        $role = Role::find(4);
        $role->givePermissionTo($permission);

        // assign role direktur
        $permission = ['show employee', 'show salary'];
        $direktur = User::find(5);
        $direktur->assignRole('direktur');
        $direktur->givePermissionTo('show employee', 'show salary');

        $role = Role::find(5);
        $role->givePermissionTo($permission);
    }
}
