<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'Publisher' => 'Pink Floyd ',
            'Title' => ' Echoes',
            'Link' => 'https://www.youtube.com/watch?v=53N99Nim6WE',
            'Duration_min' => 23,
            'Views' => 16830284  ,

        ]);
    }
}
