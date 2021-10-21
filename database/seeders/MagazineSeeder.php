<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MagazineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Magazine::factory(30)->create();
    }
}
