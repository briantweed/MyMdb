<?php

use Illuminate\Database\Seeder;

class CrewTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('crew')->delete();
        
		\DB::table('crew')->insert(array (
			0 => 
			array (
				'crew_id' => 1,
				'movie_id' => 1,
				'person_id' => 2,
				'position' => 'Director',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			1 => 
			array (
				'crew_id' => 2,
				'movie_id' => 1,
				'person_id' => 3,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			2 => 
			array (
				'crew_id' => 3,
				'movie_id' => 1,
				'person_id' => 4,
				'position' => 'Writer',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
	}

}