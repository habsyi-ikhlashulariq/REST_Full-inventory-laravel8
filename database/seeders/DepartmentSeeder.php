<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departments')->insert([
            'name' => 'Manager',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('departments')->insert([
            'name' => 'Supplier',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('departments')->insert([
            'name' => 'Driver',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('departments')->insert([
            'name' => 'Admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
