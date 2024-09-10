<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleUserMappings = [
            ['role_id' => 1, 'user_id' => 1],
            ['role_id' => 2, 'user_id' => 3],
        ];

        // Insert data into the pivot table
        DB::table('role_user')->insert($roleUserMappings);
    }
}
