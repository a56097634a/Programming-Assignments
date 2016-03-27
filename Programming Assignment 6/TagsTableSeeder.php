<?php

use Illuminate\Database\Seeder;

use App\Story;

class TagsTableSeeder extends Seeder
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
		$limit = 60;

		for ($i = 0; $i < $limit; $i++) { 
			DB::table('tags')->insert([//,
				'value' => $faker->realText($faker->numberBetween(10,20)),
			]); 
		}

        $stories = Story::all();
        foreach ($stories as $story) {
            $i = $story->id;
            $story->tags()->attach($i);
        }
    }
}
