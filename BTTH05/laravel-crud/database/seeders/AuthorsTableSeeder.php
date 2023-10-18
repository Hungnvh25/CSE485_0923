<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->delete();


        $faker = Faker::create();

        foreach(range(1,50) as $item){
            DB::table('authors')->insert([
                'name'=>$faker->name()

            ]);
        }

    }
}
