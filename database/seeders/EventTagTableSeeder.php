<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\EventTag;
class EventTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $event1 = Event::find(1);
        $event1->tags()->attach([1, 3, 4]);

        $event2 = Event::find(2);
        $event2->tags()->attach([4, 3, 1]);

        $event3 = Event::find(3);
        $event3->tags()->attach([1, 2, 5]);

        $event4 = Event::find(4);
        $event4->tags()->attach([ 2, 5]);

        $event4 = Event::find(5);
        $event4->tags()->attach([3, 4]);

        $event4 = Event::find(6);
        $event4->tags()->attach([2,3]);

        

    }
}
