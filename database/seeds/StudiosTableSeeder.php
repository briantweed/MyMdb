<?php

use Illuminate\Database\Seeder;

class StudiosTableSeeder extends Seeder {

	public function run()
	{
		$existing = DB::table('studios')->count();
		if( !$existing )
		{
			$studios = ['20th Century Fox','Canon','Columbia','Disney','Disney Marvel',
				'Disney Pixar','Dreamworks','Lionsgate','MGM','New Line Cinema', 'Orion','Paramount','Sony','Summit',
				'Tri-Star','Touchstone','United Artist','Universal','Warner Brothers','Manga Entertainment','Unknown',
				'Independent','Fox Searchlight','Gaumont','Pathe','Polygram','Miramax','Golden Harvest','Weinstein Company',
				'Momentum','HBO','AMC'];

			array_map( function( $studio ) {
				DB::table('studios')->insert([
					'studio_name' => $studio
				]);
			}, $studios);

		} // end of if

	} // end of method

} // end of class
