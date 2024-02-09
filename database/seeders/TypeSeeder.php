<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            ['name'=> 'R&B', 'created_at' => now(),'updated_at' => now()],
            ['name'=> 'Rock', 'created_at' => now(),'updated_at' => now()],
            ['name'=> 'Blues', 'created_at' => now(),'updated_at' => now()],
            ['name'=> 'Jazz', 'created_at' => now(),'updated_at' => now()],
            ['name'=> 'Electronic Music', 'created_at' => now(),'updated_at' => now()],
            ['name'=> 'Hip Hop', 'created_at' => now(),'updated_at' => now()],
            ['name'=> 'K-pop', 'created_at' => now(),'updated_at' => now()],
            ['name'=> 'Funk', 'created_at' => now(),'updated_at' => now()],
            ['name'=> 'Drun & Bass', 'created_at' => now(),'updated_at' => now()],
            ['name'=> 'Disco', 'created_at' => now(),'updated_at' => now()],
            ['name'=> 'Metal', 'created_at' => now(),'updated_at' => now()],
            ['name'=> 'African Hip Hop', 'created_at' => now(),'updated_at' => now()],
        ]);
    }
}
