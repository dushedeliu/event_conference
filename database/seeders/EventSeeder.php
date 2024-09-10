<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * @method updateStatus()
 */
class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Event::create([
            'title' => 'Clean Code Masterclass',
            'description' => 'Certification masterclass for experienced Java developers.',
            'start_date' => "10/09/2024 15:00",
            'end_date' => "10/10/2024 15:00",
            'pending_start_date' => null,
            'pending_end_date' => null,
            'location' => null,
            'status' => 'upcoming',
            'approved' => true,
//            'end_date' => now()->addDays(1)->addHours(rand(1, 5)),
            'user_id' => 2,
        ]);

        Event::create([
            'title' => 'Autumn Event',
            'description' => 'This is another sample event.',
            'start_date' => now()->addDays(rand(1,30)),
            'end_date' => now()->addDays(rand(2,30))->addHours(rand(1,5)),
            'pending_start_date' => null,
            'pending_end_date' => null,
            'location' => null,
            'status' => 'upcoming',
            'approved' => true,
            'user_id' => 2,
        ]);

        Event::create([
            'title' => 'Clean Architecture Masterclass',
            'description' => null,
            'start_date' => "10/09/2024 14:00",
            'end_date' => "	10/09/2024 15:30",
            'pending_start_date' => null,
            'pending_end_date' => null,
            'location' => null,
            'status' => 'upcoming',
            'approved' => true,
            'user_id' => 2,
        ]);

        Event::create([
           'title' => 'International PHP Conference Munich',
            'description' => null,
            'start_date' => "12/09/2024 14:00",
            'end_date' => "12/09/2024 15:30",
            'pending_start_date' => null,
            'pending_end_date' => null,
            'location' => null,
            'status' => 'upcoming',
            'approved' => true,
            'user_id' => 2,
        ]);

        Event::create([
            'title' => 'Global Software Architecture Summit',
            'description' => null,
            'start_date' => "11/09/2024 09:30",
            'end_date' => "11/09/2024 11:30",
            'pending_start_date' => null,
            'pending_end_date' => null,
            'location' => null,
            'status' => 'upcoming',
            'approved' => true,
            'user_id' => 2,
        ]);

        Event::create([
            'title' => 'Big Data Conference Europe',
            'description' => 'The Big Data Europe conference includes in-person workshops on the first day and a hybrid-style conference over the next three days. This is the 8th time this conference has run, and the agenda includes important topics in AI like ChatGPT, deep learning, and predictive analytics. This conference hosts attendees from all backgrounds from both inside and outside Europe.',
            'start_date' => "11/05/2024 12:00",
            'end_date' => "11/05/2024 15:30",
            'pending_start_date' => null,
            'pending_end_date' => null,
            'location' => null,
            'status' => 'upcoming',
            'approved' => true,
            'user_id' => 2,
        ]);

        Event::create([
            'title' => 'Coalesce',
            'description' => 'Coalesce is a four-day conference that can be attended in person in Las Vegas or online. Last year’s sessions are available on YouTube. This event covers various topics, including machine learning and AI, testing, data anomaly detection, data engineering, and more. It also provides great networking opportunities for those who attend in person.',
            'start_date' => "10/07/2024 12:00",
            'end_date' => "10/07/2024 14:30",
            'pending_start_date' => null,
            'pending_end_date' => null,
            'location' => null,
            'status' => 'upcoming',
            'approved' => true,
            'user_id' => 2,
        ]);

        Event::create([
            'title' => 'How to control the dimensions of the calendar',
            'description' => null,
            'start_date' => "09/03/2024 11:00",
            'end_date' => "11/05/2024 15:30",
            'pending_start_date' => null,
            'pending_end_date' => null,
            'location' => null,
            'status' => 'upcoming',
            'approved' => true,
            'user_id' => 2,
        ]);
    }
}
