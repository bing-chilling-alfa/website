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
//        $this->call([
//            UserSeeder::class,
//            BedrijfSeeder::class,
//            VacatureSeeder::class,
//            RelatieSeeder::class,
//            Bestand_studentSeeder::class,
//            Groep::class,
//
//        ])
        \App\Models\User::factory(10)->create();
        \App\Models\Company::factory(10)->create();
        \App\Models\Vacature::factory(10)->create();
        \App\Models\Opleiding::factory(2)->create();






    }
}
