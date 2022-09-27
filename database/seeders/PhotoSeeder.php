<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([            
            [
                'name' => 'avatar1',
                'url' => 'avatar1.jpg',
            ],
            [
                'name' => 'avatar2',
                'url' => 'avatar2.jpg',
            ],  
            [
                'name' => 'avatar3',
                'url' => 'avatar3.jpg',
            ],      
            ]);
    }
}
