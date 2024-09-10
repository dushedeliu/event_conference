<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\User::factory()->create([
             'name' => 'Test Organizer',
             'email' => 'testorganizer@gmail.com',
             'password' => bcrypt('password'),
         ]);

        \App\Models\User::factory()->create([
            'name' => 'John',
            'email' => 'john2@gmail.com',
            'password' => bcrypt('john1234'),
        ]);

        $this->call([
            EventSeeder::class,
            RoleSeeder::class,
            TicketSeeder::class,
//            RoleUserSeeder::class,
        ]);
    }
}
