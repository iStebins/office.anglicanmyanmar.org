<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert(["name"=>"Archbishop"]);
        DB::table('positions')->insert(["name"=>"Bishop"]);
        DB::table('positions')->insert(["name"=>"Assistant Bishop"]);
        DB::table('positions')->insert(["name"=>"Archdeacon"]);
        DB::table('positions')->insert(["name"=>"Priest in Charge"]);
        DB::table('positions')->insert(["name"=>"Assistant Priest"]);
        DB::table('positions')->insert(["name"=>"Associate Priest"]);
        DB::table('positions')->insert(["name"=>"Deacon"]);
        DB::table('positions')->insert(["name"=>"Chancellor"]);
        DB::table('positions')->insert(["name"=>"Head of Department"]);
        DB::table('positions')->insert(["name"=>"Deputy Head of Department"]);
        DB::table('positions')->insert(["name"=>"Organizer"]);
        DB::table('positions')->insert(["name"=>"General Secretary"]);
        DB::table('positions')->insert(["name"=>"Treasurer"]);
        DB::table('positions')->insert(["name"=>"Accountant"]);
        DB::table('positions')->insert(["name"=>"Board of Trustee"]);
        DB::table('positions')->insert(["name"=>"Office Assistant"]);
        DB::table('positions')->insert(["name"=>"Property Supervisor"]);
        DB::table('positions')->insert(["name"=>"Cleaner"]);
        DB::table('positions')->insert(["name"=>"Gardener"]);
        DB::table('positions')->insert(["name"=>"Driver"]);
        DB::table('positions')->insert(["name"=>"Security"]);
        DB::table('positions')->insert(["name"=>"Archbishop's Home"]);
        DB::table('positions')->insert(["name"=>"Honorary Staff"]);

    }
}
