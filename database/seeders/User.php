<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([            
            [
                'name' => 'King Poop',
                'firstname' => 'King Kong',
                'age' => 23,
                'email' => 'kingpoop@gmail.com',
                'password' => bcrypt('kingpoop'),
                'photo_id'=> 1
            ],
            [
                'name' => 'King Poop',
                'firstname' => 'King Kong',
                'age' => 23,
                'email' => 'kingkong@gmail.com',
                'password' => bcrypt('kingkong'),
                'photo_id'=> 2
            ],        
            ]);
    }
}
