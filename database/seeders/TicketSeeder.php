<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ticket::create([
            'event_id' => 1,
            'quantity' => 200,
        ]);

        Ticket::create([
            'event_id' => 2,
            'quantity' => 300,
        ]);

        Ticket::create([
            'event_id' => 3,
            'quantity' => 400,
        ]);

        Ticket::create([
            'event_id' => 4,
            'quantity' => 200,
        ]);

        Ticket::create([
            'event_id' => 5,
            'quantity' => 300,
        ]);

        Ticket::create([
            'event_id' => 6,
            'quantity' => 400,
        ]);

        Ticket::create([
            'event_id' => 7,
            'quantity' => 200,
        ]);

        Ticket::create([
            'event_id' => 8,
            'quantity' => 300,
        ]);
    }
}
