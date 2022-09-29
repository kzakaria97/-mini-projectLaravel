<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([            
            [
                'title' => 'Hello new post today',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae vero magni, provident impedit minima laudantium iste labore velit, vel culpa vitae animi qui placeat, modi magnam doloremque quod reiciendis explicabo fugit sunt fuga consequatur? Modi quis unde dolorum cumque doloremque!',
            ],
            [
                'title' => 'Hello new post today for New York ...',
                'description' => '10 2022 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae vero magni, provident impedit minima laudantium iste labore velit, vel culpa vitae animi qui placeat, modi magnam doloremque quod reiciendis explicabo fugit sunt fuga consequatur? Modi quis unde dolorum cumque doloremque!',
            ],      
            ]);
    }
}
