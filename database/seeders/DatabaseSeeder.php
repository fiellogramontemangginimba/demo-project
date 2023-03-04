<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        DB::table('contacts')->insert([
            'name'          =>  'Taylor Swift',
            'address'       =>  'Malaybalay City, Bukidnon',
            'mobile'          =>  '09978584850'
        ]);

        DB::table('contacts')->insert([
            'name'          =>  'Justine Bieber',
            'address'       =>  'Cabanglasan, Bukidnon',
            'mobile'          =>  '09075354624'
        ]);

        DB::table('contacts')->insert([
            'name'          =>  'Maria Clara Garcia',
            'address'       =>  'Valencia City, Bukidnon',
            'mobile'          =>  '09347675878'
        ]);

    }
}
