<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EthnicitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ethnicities')->insert(["name"=>"Kachin"]);
        DB::table('ethnicities')->insert(["name"=>"Kayah"]);
        DB::table('ethnicities')->insert(["name"=>"Karen"]);
        DB::table('ethnicities')->insert(["name"=>"Chin"]);
        DB::table('ethnicities')->insert(["name"=>"Bamar"]);
        DB::table('ethnicities')->insert(["name"=>"Mon"]);
        DB::table('ethnicities')->insert(["name"=>"Rakhine"]);
        DB::table('ethnicities')->insert(["name"=>"Shan"]);
        
    }
}
