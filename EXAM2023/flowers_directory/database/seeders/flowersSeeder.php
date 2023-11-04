<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\flower;
class flowersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('flowers')->delete();
        $faker  = Faker::create();
        
        foreach(range(1,100) as $item){
            flower::create([
                'name'  =>  $faker->name(),
                'description'  =>  $faker->text(50),

                'image_url' =>  $faker->imageUrl($width = 640, $height = 480), 

            ]);
        }
    }
}
