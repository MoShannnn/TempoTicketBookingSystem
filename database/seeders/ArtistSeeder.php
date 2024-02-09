<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artists')->insert([
            ['name'=>'Artist 111', 'age'=>22, 'profileImg' => 'abstral-official-bdlMO9z5yco-unsplash.jpg', 'intro' => "lorem BLAH lorem BLAH lorem BLAH lorem BLAH", 'achievements' => 'Badge 111', 'created_at' => now(),'updated_at' => now()],
            ['name'=>'Artist 222', 'age'=>32, 'profileImg' => 'soundtrap-rAT6FJ6wltE-unsplash.jpg', 'intro' => "lorem BLAH lorem BLAH lorem BLAH lorem BLAH", 'achievements' => 'Badge 222', 'created_at' => now(),'updated_at' => now()],
            ['name'=>'Artist 333', 'age'=> 33, 'profileImg' => 'joecalih-UmTZqmMvQcw-unsplash.jpg', 'intro' => "lorem BLAH lorem BLAH lorem BLAH lorem BLAH", 'achievements' => 'Badge 333', 'created_at' => now(),'updated_at' => now()]
        ]);
    }
}
