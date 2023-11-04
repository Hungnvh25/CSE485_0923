<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\region;
class regionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regions')->delete();
        $faker  = Faker::create();
        
        foreach(range(1,100) as $item){
            region::create([
                'flower_id'  => $faker->numberBetween(1,50),
                'region_name'=> $faker->name(),

            ]);
        }
    }
}
