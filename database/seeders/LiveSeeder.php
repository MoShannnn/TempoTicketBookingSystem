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
            ['name'=>'Vivid Sessions', 'venue'=>'Epic Center', 'date'=>'2024-04-07 18:30:00','created_at' => now(),'updated_at' => now()],
            ['name'=>'Colorful Dreamy', 'venue'=>'Radiant Ballroom', 'date'=>'2024-04-09 18:30:00', 'created_at' => now(),'updated_at' => now()],
            ['name'=>'Whispering Innovations', 'venue'=>'Vivid Oasis', 'date'=>'2024-04-25 20:00:00', 'created_at' => now(),'updated_at' => now()]
        ]);
    }

}