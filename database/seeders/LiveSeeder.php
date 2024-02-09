<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lives')->insert([
            ['liveImg' => 'concert2.jpg', 'name'=>'Vivid Sessions', 'venue'=>'Epic Center', 'date'=>'2024-04-07', 'time' => '18:30:00', 'price' => 10, 'totalticket' => 500, 'created_at' => now(),'updated_at' => now()],
            ['liveImg' => 'band2.jpg', 'name'=>'Colorful Dreamy', 'venue'=>'Radiant Ballroom', 'date'=>'2024-04-09', 'time' => '18:30:00', 'price' => 20, 'totalticket' => 655, 'created_at' => now(),'updated_at' => now()],
            ['liveImg' => 'concert1.jpg', 'name'=>'Whispering Innovations', 'venue'=>'Vivid Oasis', 'date'=>'2024-04-25', 'time' => '18:30:00', 'price' => 30, 'totalticket' => 1000, 'created_at' => now(),'updated_at' => now()]
        ]);
    }

}
