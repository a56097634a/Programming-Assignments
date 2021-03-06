<?php

use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
		$limit = 20;

		for ($i = 0; $i < $limit; $i++) { 
			DB::table('stories')->insert([//,
				'title' => $faker->realText($faker->numberBetween(10,20)),
				'story' => $faker->realText($faker->numberBetween(20,30)),
			]); 
		}
    }
}
