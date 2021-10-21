<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DioceseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dioceses')->insert(["name"=>"Provincial"]);
        DB::table('dioceses')->insert(["name"=>"Yangon"]);
        DB::table('dioceses')->insert(["name"=>"Hpa-An"]);
        DB::table('dioceses')->insert(["name"=>"Mandalay"]);
        DB::table('dioceses')->insert(["name"=>"Sittwe"]);
        DB::table('dioceses')->insert(["name"=>"Myitkyina"]);
        DB::table('dioceses')->insert(["name"=>"Taungoo"]);
        DB::table('dioceses')->insert(["name"=>"Pathein"]);
        DB::table('dioceses')->insert(["name"=>"Pyay"]);
    }
}
