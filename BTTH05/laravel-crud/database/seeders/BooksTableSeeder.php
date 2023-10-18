<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->delete();
        $faker  = Faker::create();
        
        foreach(range(1,100) as $item){
            DB::table('books')->insert([
                'author_id'  =>  $faker->numberBetween(1,20), 
                'title'  =>  $faker->sentence(5)
            ]);
        }
    }
}
