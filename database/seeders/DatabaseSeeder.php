<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        DB::table('contacts')->insert([
            'name'          =>  'Taylor Swift',
            'email'       =>  'taylorswift@gmail.com',
            'subject'          =>  'Concern',
            'message'          =>  'They are all equally as powerful in every area of business – customer support, marketing, sales, etc.'
        ]);

        DB::table('contacts')->insert([
            'name'          =>  'Justine Bieber',
            'email'       =>  'justinebieber@gmail.com',
            'subject'          =>  'Suggestion',
            'message'          =>  't’s impossible not to see a greeting message if you have used the internet for at least a day. Business websites will often have small pop-ups at the bottom corner of the screen that greet any visitors.'
        ]);

        DB::table('contacts')->insert([
            'name'          =>  'Maria Clara Garcia',
            'email'       =>  'mariaclaragarcia@gmail.com',
            'subject'          =>  'User Interface Design',
            'message'          =>  'Other websites will use large pop-ups that may have more utility than sending a simple welcome message for a new client. For example, businesses may opt to welcome a visitor and propose a discount if they input their email or SMS into the form.'
        ]);
    }
}
