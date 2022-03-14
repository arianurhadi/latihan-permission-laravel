<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attr = ['create employee', 'show employee', 'update employee', 'delete employee', 
        'show salary','update salary', 'print salary', 'show attendence', 'print attendence'];

        foreach($attr as $value){
            Permission::create([
                'name' => $value
            ]);
        }
    }
}
