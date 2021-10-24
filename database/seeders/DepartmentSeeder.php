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
        DB::table('departments')->insert(["name"=>"Men's Association"]);
        DB::table('departments')->insert(["name"=>"Mother's Union"]);
        DB::table('departments')->insert(["name"=>"AYPA"]);
        DB::table('departments')->insert(["name"=>"CEE"]);
        DB::table('departments')->insert(["name"=>"Admin"]);
        DB::table('departments')->insert(["name"=>"P&P"]);
        DB::table('departments')->insert(["name"=>"Communication"]);
        DB::table('departments')->insert(["name"=>"E&M"]);
        DB::table('departments')->insert(["name"=>"Development"]);
    }
}
