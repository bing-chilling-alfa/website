<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Company::factory(10)->create();
        \App\Models\vacature::factory(15)->create();
        \App\Models\College::factory(2)->create();
        \App\Models\stage::factory(3)->create();
        \App\Models\groep::factory(2)->create();
    }
}
