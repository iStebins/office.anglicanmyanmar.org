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
        DB::table('dioceses')->insert(["name"=>"Provincial", "image" => "https://anglicanmyanmar.org/images/logo/logocpm.png"]);
        DB::table('dioceses')->insert(["name"=>"Yangon", "image" => "https://anglicanmyanmar.org/images/logo/logoygn.png"]);
        DB::table('dioceses')->insert(["name"=>"Hpa-An", "image" => "https://anglicanmyanmar.org/images/logo/logohpaan.png"]);
        DB::table('dioceses')->insert(["name"=>"Mandalay", "image" => "https://anglicanmyanmar.org/images/logo/logomdy.png"]);
        DB::table('dioceses')->insert(["name"=>"Sittwe", "image" => "https://anglicanmyanmar.org/images/logo/logosittwe.png"]);
        DB::table('dioceses')->insert(["name"=>"Myitkyina", "image" => "https://anglicanmyanmar.org/images/logo/logomyitkyina.png"]);
        DB::table('dioceses')->insert(["name"=>"Taungoo", "image" => "https://anglicanmyanmar.org/images/logo/logotaungoo.png"]);
        DB::table('dioceses')->insert(["name"=>"Pathein", "image" => "https://anglicanmyanmar.org/images/logo/logopathein.png"]);
        DB::table('dioceses')->insert(["name"=>"Pyay", "image" => "https://anglicanmyanmar.org/images/logo/logopyay.png"]);
    }
}
