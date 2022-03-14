<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HrAssignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // assign role HR
        $permission = ['show salary', 'show attendence'];
        $hr = User::find(3);
        $hr->givePermissionTo($permission);

        $role = Role::find(3);
        $role->givePermissionTo($permission);
    }
}
