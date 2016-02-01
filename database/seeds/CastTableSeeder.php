<?php

use Illuminate\Database\Seeder;

class CastTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cast')->delete();
        
        \DB::table('cast')->insert(array (
            0 => 
            array (
                'cast_id' => 1,
                'movie_id' => 1,
                'person_id' => 1,
                'character' => 'Kai',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'cast_id' => 2,
                'movie_id' => 1,
                'person_id' => 5,
                'character' => 'Oisin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'cast_id' => 3,
                'movie_id' => 7,
                'person_id' => 6,
                'character' => 'Tyler Durden',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'cast_id' => 4,
                'movie_id' => 73,
                'person_id' => 6,
                'character' => 'Lt. Aldo Reins',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'cast_id' => 5,
                'movie_id' => 119,
                'person_id' => 6,
                'character' => 'Jack Cross',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'cast_id' => 6,
                'movie_id' => 7,
                'person_id' => 7,
                'character' => 'The Narrator',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'cast_id' => 7,
                'movie_id' => 16,
                'person_id' => 8,
                'character' => 'Lucy Whitmore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'cast_id' => 8,
                'movie_id' => 16,
                'person_id' => 9,
                'character' => 'Henry Roth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'cast_id' => 9,
                'movie_id' => 3,
                'person_id' => 10,
                'character' => 'Ellen Ripley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'cast_id' => 10,
                'movie_id' => 4,
                'person_id' => 10,
                'character' => 'Ellen Ripley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'cast_id' => 11,
                'movie_id' => 5,
                'person_id' => 10,
                'character' => 'Ellen Ripley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'cast_id' => 12,
                'movie_id' => 6,
                'person_id' => 10,
                'character' => 'Ellen Ripley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'cast_id' => 13,
                'movie_id' => 38,
                'person_id' => 10,
                'character' => 'The Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'cast_id' => 14,
                'movie_id' => 24,
                'person_id' => 10,
                'character' => 'Dr. Grace Augustine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'cast_id' => 15,
                'movie_id' => 90,
                'person_id' => 10,
                'character' => 'The Big Guy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'cast_id' => 16,
                'movie_id' => 55,
                'person_id' => 10,
                'character' => 'Dana Barrett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'cast_id' => 17,
                'movie_id' => 154,
                'person_id' => 10,
                'character' => 'Ship\'s Computer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'cast_id' => 18,
                'movie_id' => 2,
                'person_id' => 11,
                'character' => 'The Mad Hatter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'cast_id' => 19,
                'movie_id' => 14,
                'person_id' => 12,
                'character' => 'Rocky Sullivan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'cast_id' => 21,
                'movie_id' => 15,
                'person_id' => 12,
                'character' => 'Cody Jarrett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'cast_id' => 22,
                'movie_id' => 16,
                'person_id' => 14,
                'character' => 'Dr. Keats',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'cast_id' => 23,
                'movie_id' => 16,
                'person_id' => 13,
                'character' => 'Doug Whitmore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'cast_id' => 24,
                'movie_id' => 16,
                'person_id' => 15,
                'character' => 'Ula',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'cast_id' => 25,
                'movie_id' => 2,
                'person_id' => 16,
                'character' => 'Alice',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'cast_id' => 26,
                'movie_id' => 2,
                'person_id' => 17,
                'character' => 'The Red Queen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'cast_id' => 27,
                'movie_id' => 2,
                'person_id' => 18,
                'character' => 'The White Queen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'cast_id' => 29,
                'movie_id' => 2,
                'person_id' => 19,
                'character' => 'The Knave of Hearts',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'cast_id' => 30,
                'movie_id' => 2,
                'person_id' => 20,
                'character' => 'Tweedledum / Tweedledee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'cast_id' => 31,
                'movie_id' => 2,
                'person_id' => 21,
                'character' => 'The White Rabbit',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'cast_id' => 32,
                'movie_id' => 2,
                'person_id' => 22,
                'character' => 'Cheshire Cat',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'cast_id' => 33,
                'movie_id' => 2,
                'person_id' => 23,
                'character' => 'Blue Caterpillar',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'cast_id' => 34,
                'movie_id' => 3,
                'person_id' => 24,
                'character' => 'Dallas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'cast_id' => 35,
                'movie_id' => 3,
                'person_id' => 25,
                'character' => 'Lambert',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'cast_id' => 36,
                'movie_id' => 3,
                'person_id' => 26,
                'character' => 'Brett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'cast_id' => 37,
                'movie_id' => 3,
                'person_id' => 27,
                'character' => 'Kane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'cast_id' => 38,
                'movie_id' => 3,
                'person_id' => 28,
                'character' => 'Ash',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'cast_id' => 39,
                'movie_id' => 3,
                'person_id' => 29,
                'character' => 'Parker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'cast_id' => 40,
                'movie_id' => 4,
                'person_id' => 31,
                'character' => 'Newt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'cast_id' => 41,
                'movie_id' => 4,
                'person_id' => 32,
                'character' => 'Hicks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'cast_id' => 42,
                'movie_id' => 4,
                'person_id' => 33,
                'character' => 'Burke',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'cast_id' => 43,
                'movie_id' => 4,
                'person_id' => 34,
                'character' => 'Bishop',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'cast_id' => 44,
                'movie_id' => 4,
                'person_id' => 35,
                'character' => 'Hudson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'cast_id' => 45,
                'movie_id' => 4,
                'person_id' => 36,
                'character' => 'Gorman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'cast_id' => 46,
                'movie_id' => 4,
                'person_id' => 37,
                'character' => 'Vasquez',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'cast_id' => 47,
                'movie_id' => 4,
                'person_id' => 38,
                'character' => 'Drake',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'cast_id' => 48,
                'movie_id' => 5,
                'person_id' => 41,
                'character' => 'DIllon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'cast_id' => 49,
                'movie_id' => 5,
                'person_id' => 42,
                'character' => 'Clemens',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            47 => 
            array (
                'cast_id' => 50,
                'movie_id' => 5,
                'person_id' => 43,
                'character' => 'David',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            48 => 
            array (
                'cast_id' => 51,
                'movie_id' => 5,
                'person_id' => 34,
                'character' => 'Bishop',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            49 => 
            array (
                'cast_id' => 52,
                'movie_id' => 6,
                'person_id' => 45,
                'character' => 'Call',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            50 => 
            array (
                'cast_id' => 53,
                'movie_id' => 6,
                'person_id' => 46,
                'character' => 'Johner',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            51 => 
            array (
                'cast_id' => 54,
                'movie_id' => 6,
                'person_id' => 47,
                'character' => 'Christie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            52 => 
            array (
                'cast_id' => 55,
                'movie_id' => 6,
                'person_id' => 48,
                'character' => 'Elgyn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            53 => 
            array (
                'cast_id' => 56,
                'movie_id' => 6,
                'person_id' => 49,
                'character' => 'General Perez',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            54 => 
            array (
                'cast_id' => 57,
                'movie_id' => 6,
                'person_id' => 50,
                'character' => 'Gediman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            55 => 
            array (
                'cast_id' => 58,
                'movie_id' => 6,
                'person_id' => 51,
                'character' => 'Vriess',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            56 => 
            array (
                'cast_id' => 59,
                'movie_id' => 12,
                'person_id' => 54,
                'character' => 'Peter Parker / Spiderman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            57 => 
            array (
                'cast_id' => 60,
                'movie_id' => 12,
                'person_id' => 55,
                'character' => 'Gwen Stacy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            58 => 
            array (
                'cast_id' => 61,
                'movie_id' => 12,
                'person_id' => 56,
                'character' => 'Dr. Connors / Lizardman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            59 => 
            array (
                'cast_id' => 62,
                'movie_id' => 12,
                'person_id' => 57,
                'character' => 'Captain Stacy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            60 => 
            array (
                'cast_id' => 63,
                'movie_id' => 12,
                'person_id' => 58,
                'character' => 'Uncle Ben',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            61 => 
            array (
                'cast_id' => 64,
                'movie_id' => 12,
                'person_id' => 59,
                'character' => 'Aunt May',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            62 => 
            array (
                'cast_id' => 65,
                'movie_id' => 14,
                'person_id' => 61,
                'character' => 'Jerry Connolly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            63 => 
            array (
                'cast_id' => 66,
                'movie_id' => 14,
                'person_id' => 62,
                'character' => 'James Frazier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            64 => 
            array (
                'cast_id' => 67,
                'movie_id' => 14,
                'person_id' => 63,
                'character' => 'Laury Martin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            65 => 
            array (
                'cast_id' => 68,
                'movie_id' => 14,
                'person_id' => 64,
                'character' => 'Mac Keefer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            66 => 
            array (
                'cast_id' => 69,
                'movie_id' => 8,
                'person_id' => 67,
                'character' => 'John McClane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            67 => 
            array (
                'cast_id' => 70,
                'movie_id' => 8,
                'person_id' => 23,
                'character' => 'Hans Gruber',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            68 => 
            array (
                'cast_id' => 71,
                'movie_id' => 8,
                'person_id' => 68,
                'character' => 'Richard Thornburg',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            69 => 
            array (
                'cast_id' => 72,
                'movie_id' => 8,
                'person_id' => 69,
                'character' => 'Agent Johnson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            70 => 
            array (
                'cast_id' => 73,
                'movie_id' => 9,
                'person_id' => 1,
                'character' => 'Neo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            71 => 
            array (
                'cast_id' => 74,
                'movie_id' => 9,
                'person_id' => 71,
                'character' => 'Morpheus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            72 => 
            array (
                'cast_id' => 75,
                'movie_id' => 9,
                'person_id' => 72,
                'character' => 'Trinity',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            73 => 
            array (
                'cast_id' => 76,
                'movie_id' => 9,
                'person_id' => 73,
                'character' => 'Cypher',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            74 => 
            array (
                'cast_id' => 77,
                'movie_id' => 9,
                'person_id' => 74,
                'character' => 'Agent Smith',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            75 => 
            array (
                'cast_id' => 79,
                'movie_id' => 10,
                'person_id' => 78,
                'character' => 'Luke Skywalker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            76 => 
            array (
                'cast_id' => 80,
                'movie_id' => 10,
                'person_id' => 79,
                'character' => 'Han Solo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            77 => 
            array (
                'cast_id' => 81,
                'movie_id' => 10,
                'person_id' => 80,
                'character' => 'Obi-Wan Kenobi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            78 => 
            array (
                'cast_id' => 82,
                'movie_id' => 10,
                'person_id' => 81,
                'character' => 'Princess Leia',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            79 => 
            array (
                'cast_id' => 83,
                'movie_id' => 10,
                'person_id' => 82,
                'character' => 'Grand Moff Tarkin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            80 => 
            array (
                'cast_id' => 84,
                'movie_id' => 10,
                'person_id' => 83,
                'character' => 'C-3Po',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            81 => 
            array (
                'cast_id' => 85,
                'movie_id' => 10,
                'person_id' => 84,
                'character' => 'R2-D2',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            82 => 
            array (
                'cast_id' => 86,
                'movie_id' => 10,
                'person_id' => 85,
                'character' => 'Darth Vader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            83 => 
            array (
                'cast_id' => 87,
                'movie_id' => 10,
                'person_id' => 86,
            'character' => 'Darth Vader (voice)',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            84 => 
            array (
                'cast_id' => 88,
                'movie_id' => 10,
                'person_id' => 87,
                'character' => 'Chewbacca',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            85 => 
            array (
                'cast_id' => 89,
                'movie_id' => 22,
                'person_id' => 90,
                'character' => 'Kaneda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            86 => 
            array (
                'cast_id' => 90,
                'movie_id' => 22,
                'person_id' => 91,
                'character' => 'Tetsuo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            87 => 
            array (
                'cast_id' => 91,
                'movie_id' => 57,
                'person_id' => 23,
                'character' => 'Professor Snape',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            88 => 
            array (
                'cast_id' => 92,
                'movie_id' => 58,
                'person_id' => 23,
                'character' => 'Professor Snape',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            89 => 
            array (
                'cast_id' => 93,
                'movie_id' => 59,
                'person_id' => 23,
                'character' => 'Professor Snape',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            90 => 
            array (
                'cast_id' => 94,
                'movie_id' => 60,
                'person_id' => 23,
                'character' => 'Professor Snape',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            91 => 
            array (
                'cast_id' => 95,
                'movie_id' => 61,
                'person_id' => 23,
                'character' => 'Professor Snape',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            92 => 
            array (
                'cast_id' => 96,
                'movie_id' => 62,
                'person_id' => 23,
                'character' => 'Professor Snape',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            93 => 
            array (
                'cast_id' => 97,
                'movie_id' => 63,
                'person_id' => 23,
                'character' => 'Professor Snape',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            94 => 
            array (
                'cast_id' => 98,
                'movie_id' => 64,
                'person_id' => 23,
                'character' => 'Professor Snaper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            95 => 
            array (
                'cast_id' => 99,
                'movie_id' => 18,
                'person_id' => 93,
                'character' => 'Dr. Alan Grant',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            96 => 
            array (
                'cast_id' => 100,
                'movie_id' => 18,
                'person_id' => 94,
                'character' => 'Dr. Ellie Sattler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            97 => 
            array (
                'cast_id' => 101,
                'movie_id' => 18,
                'person_id' => 95,
                'character' => 'Dr. Ian Malcolm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            98 => 
            array (
                'cast_id' => 102,
                'movie_id' => 18,
                'person_id' => 96,
                'character' => 'John Hammond',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            99 => 
            array (
                'cast_id' => 103,
                'movie_id' => 18,
                'person_id' => 97,
                'character' => 'Ray Arnold',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            100 => 
            array (
                'cast_id' => 104,
                'movie_id' => 18,
                'person_id' => 98,
                'character' => 'Henry Wu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            101 => 
            array (
                'cast_id' => 105,
                'movie_id' => 18,
                'person_id' => 99,
                'character' => 'Robert Muldoon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            102 => 
            array (
                'cast_id' => 106,
                'movie_id' => 18,
                'person_id' => 100,
                'character' => 'Dennis Nedry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            103 => 
            array (
                'cast_id' => 107,
                'movie_id' => 19,
                'person_id' => 95,
                'character' => 'Dr. Ian Malcom',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            104 => 
            array (
                'cast_id' => 108,
                'movie_id' => 19,
                'person_id' => 101,
                'character' => 'Sarah Harding',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            105 => 
            array (
                'cast_id' => 109,
                'movie_id' => 19,
                'person_id' => 102,
                'character' => 'Nick Van Owen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            106 => 
            array (
                'cast_id' => 110,
                'movie_id' => 19,
                'person_id' => 43,
                'character' => 'Roland Tembo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            107 => 
            array (
                'cast_id' => 111,
                'movie_id' => 19,
                'person_id' => 103,
                'character' => 'Dieter Stark',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            108 => 
            array (
                'cast_id' => 112,
                'movie_id' => 19,
                'person_id' => 104,
                'character' => 'Eddie Carr',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            109 => 
            array (
                'cast_id' => 113,
                'movie_id' => 20,
                'person_id' => 93,
                'character' => 'Dr. Alan Grant',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            110 => 
            array (
                'cast_id' => 114,
                'movie_id' => 20,
                'person_id' => 107,
                'character' => 'Paul Kirby',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            111 => 
            array (
                'cast_id' => 115,
                'movie_id' => 20,
                'person_id' => 108,
                'character' => 'Amanda Kirby',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            112 => 
            array (
                'cast_id' => 116,
                'movie_id' => 20,
                'person_id' => 109,
                'character' => 'Billy Brennan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            113 => 
            array (
                'cast_id' => 117,
                'movie_id' => 20,
                'person_id' => 110,
                'character' => 'Eric Kirby',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            114 => 
            array (
                'cast_id' => 118,
                'movie_id' => 20,
                'person_id' => 111,
                'character' => 'Mr. Udesky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            115 => 
            array (
                'cast_id' => 119,
                'movie_id' => 20,
                'person_id' => 94,
                'character' => 'Dr. Ellie Sattler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            116 => 
            array (
                'cast_id' => 120,
                'movie_id' => 21,
                'person_id' => 98,
                'character' => 'Heny Wu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            117 => 
            array (
                'cast_id' => 121,
                'movie_id' => 21,
                'person_id' => 113,
                'character' => 'Owen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            118 => 
            array (
                'cast_id' => 123,
                'movie_id' => 21,
                'person_id' => 115,
                'character' => 'Hoskins',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            119 => 
            array (
                'cast_id' => 124,
                'movie_id' => 21,
                'person_id' => 116,
                'character' => 'Gray',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            120 => 
            array (
                'cast_id' => 125,
                'movie_id' => 21,
                'person_id' => 117,
                'character' => 'Zach',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            121 => 
            array (
                'cast_id' => 126,
                'movie_id' => 21,
                'person_id' => 118,
                'character' => 'Lowery',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            122 => 
            array (
                'cast_id' => 127,
                'movie_id' => 21,
                'person_id' => 119,
                'character' => 'Karen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            123 => 
            array (
                'cast_id' => 128,
                'movie_id' => 21,
                'person_id' => 120,
                'character' => 'Barry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            124 => 
            array (
                'cast_id' => 129,
                'movie_id' => 11,
                'person_id' => 121,
                'character' => 'Tony Stark / Iron Man',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            125 => 
            array (
                'cast_id' => 130,
                'movie_id' => 11,
                'person_id' => 122,
                'character' => 'Steve Rogers / Captain America',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            126 => 
            array (
                'cast_id' => 131,
                'movie_id' => 11,
                'person_id' => 123,
                'character' => 'Bruce Banner /  The Hulk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            127 => 
            array (
                'cast_id' => 132,
                'movie_id' => 11,
                'person_id' => 124,
                'character' => 'Thor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            128 => 
            array (
                'cast_id' => 133,
                'movie_id' => 11,
                'person_id' => 125,
                'character' => 'Natasha Romanoff / Black Widow ',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            129 => 
            array (
                'cast_id' => 134,
                'movie_id' => 11,
                'person_id' => 126,
                'character' => 'Clint Barton / Hawkeye ',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            130 => 
            array (
                'cast_id' => 135,
                'movie_id' => 11,
                'person_id' => 127,
                'character' => 'Loki',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            131 => 
            array (
                'cast_id' => 136,
                'movie_id' => 11,
                'person_id' => 128,
                'character' => 'Agent Phil Coulson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            132 => 
            array (
                'cast_id' => 137,
                'movie_id' => 11,
                'person_id' => 129,
                'character' => 'Agent Maria Hill',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            133 => 
            array (
                'cast_id' => 138,
                'movie_id' => 11,
                'person_id' => 130,
                'character' => 'Selvig',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            134 => 
            array (
                'cast_id' => 139,
                'movie_id' => 11,
                'person_id' => 97,
                'character' => 'Nick Fury',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            135 => 
            array (
                'cast_id' => 140,
                'movie_id' => 11,
                'person_id' => 131,
                'character' => 'Pepper Potts',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            136 => 
            array (
                'cast_id' => 141,
                'movie_id' => 11,
                'person_id' => 132,
                'character' => 'Jarvis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            137 => 
            array (
                'cast_id' => 142,
                'movie_id' => 13,
                'person_id' => 134,
                'character' => 'Jack Dawson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            138 => 
            array (
                'cast_id' => 143,
                'movie_id' => 13,
                'person_id' => 135,
                'character' => 'Rose DeWitt Bukater',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            139 => 
            array (
                'cast_id' => 144,
                'movie_id' => 13,
                'person_id' => 136,
                'character' => 'Caledon Hockley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            140 => 
            array (
                'cast_id' => 145,
                'movie_id' => 13,
                'person_id' => 137,
                'character' => 'Molly Brown',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            141 => 
            array (
                'cast_id' => 146,
                'movie_id' => 13,
                'person_id' => 138,
                'character' => 'Ruth Dewitt Bukater',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            142 => 
            array (
                'cast_id' => 147,
                'movie_id' => 13,
                'person_id' => 35,
                'character' => 'Brock Lovett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            143 => 
            array (
                'cast_id' => 148,
                'movie_id' => 13,
                'person_id' => 139,
                'character' => 'Captain Edward James Smith',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            144 => 
            array (
                'cast_id' => 149,
                'movie_id' => 13,
                'person_id' => 140,
                'character' => 'Spicer Lovejoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            145 => 
            array (
                'cast_id' => 150,
                'movie_id' => 13,
                'person_id' => 141,
                'character' => 'Thomas Andrews',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            146 => 
            array (
                'cast_id' => 151,
                'movie_id' => 13,
                'person_id' => 142,
                'character' => 'Bruce Ismay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            147 => 
            array (
                'cast_id' => 152,
                'movie_id' => 13,
                'person_id' => 143,
                'character' => 'Fabrizio',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            148 => 
            array (
                'cast_id' => 153,
                'movie_id' => 13,
                'person_id' => 144,
                'character' => 'Fifth Officer Lowe',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            149 => 
            array (
                'cast_id' => 154,
                'movie_id' => 13,
                'person_id' => 37,
                'character' => 'Irish Mother',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            150 => 
            array (
                'cast_id' => 155,
                'movie_id' => 23,
                'person_id' => 145,
                'character' => 'Tony Mendez',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            151 => 
            array (
                'cast_id' => 156,
                'movie_id' => 23,
                'person_id' => 146,
                'character' => 'Jack O\'Donnell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            152 => 
            array (
                'cast_id' => 157,
                'movie_id' => 23,
                'person_id' => 147,
                'character' => 'Lester Siegel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            153 => 
            array (
                'cast_id' => 158,
                'movie_id' => 23,
                'person_id' => 148,
                'character' => 'John Chambers',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            154 => 
            array (
                'cast_id' => 159,
                'movie_id' => 23,
                'person_id' => 141,
                'character' => 'Ken Tayler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            155 => 
            array (
                'cast_id' => 160,
                'movie_id' => 23,
                'person_id' => 149,
                'character' => 'Lee Schatz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            156 => 
            array (
                'cast_id' => 161,
                'movie_id' => 24,
                'person_id' => 151,
                'character' => 'Jake Sully',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            157 => 
            array (
                'cast_id' => 162,
                'movie_id' => 24,
                'person_id' => 152,
                'character' => 'Neytiri',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            158 => 
            array (
                'cast_id' => 164,
                'movie_id' => 24,
                'person_id' => 153,
                'character' => 'Colonel Miles Quaritch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            159 => 
            array (
                'cast_id' => 165,
                'movie_id' => 24,
                'person_id' => 154,
                'character' => 'Trudy Chacon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            160 => 
            array (
                'cast_id' => 166,
                'movie_id' => 24,
                'person_id' => 155,
                'character' => 'Parker Selfridge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            161 => 
            array (
                'cast_id' => 167,
                'movie_id' => 24,
                'person_id' => 156,
                'character' => 'Norm Spellman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            162 => 
            array (
                'cast_id' => 168,
                'movie_id' => 24,
                'person_id' => 157,
                'character' => 'Moat',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            163 => 
            array (
                'cast_id' => 169,
                'movie_id' => 25,
                'person_id' => 158,
                'character' => 'Marty McFly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            164 => 
            array (
                'cast_id' => 170,
                'movie_id' => 25,
                'person_id' => 159,
                'character' => 'Dr. Emmett Brown',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            165 => 
            array (
                'cast_id' => 171,
                'movie_id' => 25,
                'person_id' => 160,
                'character' => 'Lorraine Baines',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            166 => 
            array (
                'cast_id' => 172,
                'movie_id' => 25,
                'person_id' => 19,
                'character' => 'Goerge McFly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            167 => 
            array (
                'cast_id' => 173,
                'movie_id' => 25,
                'person_id' => 161,
                'character' => 'Biff Tannen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            168 => 
            array (
                'cast_id' => 174,
                'movie_id' => 25,
                'person_id' => 162,
                'character' => 'Jennifer Parker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            169 => 
            array (
                'cast_id' => 175,
                'movie_id' => 25,
                'person_id' => 163,
                'character' => 'Mr. Strickland',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            170 => 
            array (
                'cast_id' => 176,
                'movie_id' => 25,
                'person_id' => 164,
                'character' => '3D',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            171 => 
            array (
                'cast_id' => 178,
                'movie_id' => 25,
                'person_id' => 136,
                'character' => 'Match',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            172 => 
            array (
                'cast_id' => 179,
                'movie_id' => 26,
                'person_id' => 158,
                'character' => 'Marty McFly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            173 => 
            array (
                'cast_id' => 180,
                'movie_id' => 26,
                'person_id' => 159,
                'character' => 'Dr. Emmett Brown',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            174 => 
            array (
                'cast_id' => 181,
                'movie_id' => 26,
                'person_id' => 160,
                'character' => 'Lorraine McFly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            175 => 
            array (
                'cast_id' => 182,
                'movie_id' => 26,
                'person_id' => 161,
                'character' => 'Biff Tannen / Griff',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            176 => 
            array (
                'cast_id' => 183,
                'movie_id' => 26,
                'person_id' => 167,
                'character' => 'Jennifer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            177 => 
            array (
                'cast_id' => 184,
                'movie_id' => 26,
                'person_id' => 163,
                'character' => 'Strickland',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            178 => 
            array (
                'cast_id' => 185,
                'movie_id' => 26,
                'person_id' => 168,
                'character' => 'George McFly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            179 => 
            array (
                'cast_id' => 186,
                'movie_id' => 26,
                'person_id' => 164,
                'character' => '3D',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            180 => 
            array (
                'cast_id' => 187,
                'movie_id' => 26,
                'person_id' => 136,
                'character' => 'Match',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            181 => 
            array (
                'cast_id' => 188,
                'movie_id' => 26,
                'person_id' => 169,
                'character' => 'Young Kid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            182 => 
            array (
                'cast_id' => 190,
                'movie_id' => 26,
                'person_id' => 170,
                'character' => 'Needles',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            183 => 
            array (
                'cast_id' => 191,
                'movie_id' => 27,
                'person_id' => 158,
                'character' => 'Marty McFly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            184 => 
            array (
                'cast_id' => 192,
                'movie_id' => 27,
                'person_id' => 171,
                'character' => 'Clara Clayton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            185 => 
            array (
                'cast_id' => 193,
                'movie_id' => 27,
                'person_id' => 161,
                'character' => 'Buford Mad Dog Tannen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            186 => 
            array (
                'cast_id' => 194,
                'movie_id' => 27,
                'person_id' => 160,
                'character' => 'Maggie McFly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            187 => 
            array (
                'cast_id' => 195,
                'movie_id' => 27,
                'person_id' => 167,
                'character' => 'Jennifer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            188 => 
            array (
                'cast_id' => 196,
                'movie_id' => 27,
                'person_id' => 172,
                'character' => 'Chester',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            189 => 
            array (
                'cast_id' => 197,
                'movie_id' => 27,
                'person_id' => 163,
                'character' => 'Marshal Strickland',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            190 => 
            array (
                'cast_id' => 198,
                'movie_id' => 27,
                'person_id' => 173,
                'character' => 'Saloon Old Timer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            191 => 
            array (
                'cast_id' => 199,
                'movie_id' => 28,
                'person_id' => 174,
                'character' => 'Himself',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            192 => 
            array (
                'cast_id' => 200,
                'movie_id' => 29,
                'person_id' => 177,
                'character' => 'Jason Bourne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            193 => 
            array (
                'cast_id' => 201,
                'movie_id' => 29,
                'person_id' => 178,
                'character' => 'Marie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            194 => 
            array (
                'cast_id' => 202,
                'movie_id' => 29,
                'person_id' => 179,
                'character' => 'Conklin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            195 => 
            array (
                'cast_id' => 203,
                'movie_id' => 29,
                'person_id' => 180,
                'character' => 'The Professor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            196 => 
            array (
                'cast_id' => 204,
                'movie_id' => 29,
                'person_id' => 181,
                'character' => 'Ward Abbott',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            197 => 
            array (
                'cast_id' => 205,
                'movie_id' => 29,
                'person_id' => 182,
                'character' => 'Wombosi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            198 => 
            array (
                'cast_id' => 206,
                'movie_id' => 29,
                'person_id' => 183,
                'character' => 'Nicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            199 => 
            array (
                'cast_id' => 207,
                'movie_id' => 30,
                'person_id' => 177,
                'character' => 'Jason Bourne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            200 => 
            array (
                'cast_id' => 208,
                'movie_id' => 30,
                'person_id' => 178,
                'character' => 'Marie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            201 => 
            array (
                'cast_id' => 209,
                'movie_id' => 30,
                'person_id' => 181,
                'character' => 'Ward Abbott',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            202 => 
            array (
                'cast_id' => 210,
                'movie_id' => 30,
                'person_id' => 183,
                'character' => 'Nicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            203 => 
            array (
                'cast_id' => 211,
                'movie_id' => 30,
                'person_id' => 188,
                'character' => 'Kirill',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            204 => 
            array (
                'cast_id' => 212,
                'movie_id' => 30,
                'person_id' => 189,
                'character' => 'Danny Zorn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            205 => 
            array (
                'cast_id' => 213,
                'movie_id' => 30,
                'person_id' => 190,
                'character' => 'Pamela Landy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            206 => 
            array (
                'cast_id' => 214,
                'movie_id' => 31,
                'person_id' => 177,
                'character' => 'Jason Bourne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            207 => 
            array (
                'cast_id' => 215,
                'movie_id' => 31,
                'person_id' => 190,
                'character' => 'Pamela Landy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            208 => 
            array (
                'cast_id' => 216,
                'movie_id' => 31,
                'person_id' => 183,
                'character' => 'Nicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            209 => 
            array (
                'cast_id' => 217,
                'movie_id' => 31,
                'person_id' => 191,
                'character' => 'Noah Vosen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            210 => 
            array (
                'cast_id' => 218,
                'movie_id' => 31,
                'person_id' => 192,
                'character' => 'Ezra Kramer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            211 => 
            array (
                'cast_id' => 219,
                'movie_id' => 31,
                'person_id' => 193,
                'character' => 'Simon Ross',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            212 => 
            array (
                'cast_id' => 220,
                'movie_id' => 31,
                'person_id' => 194,
                'character' => 'Dr. Albert Hirsch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            213 => 
            array (
                'cast_id' => 221,
                'movie_id' => 31,
                'person_id' => 195,
                'character' => 'Martin Kreutz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            214 => 
            array (
                'cast_id' => 222,
                'movie_id' => 32,
                'person_id' => 196,
                'character' => 'Bruce Wayne / Batman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            215 => 
            array (
                'cast_id' => 223,
                'movie_id' => 32,
                'person_id' => 197,
                'character' => 'Alfred',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            216 => 
            array (
                'cast_id' => 224,
                'movie_id' => 32,
                'person_id' => 198,
                'character' => 'Ducard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            217 => 
            array (
                'cast_id' => 225,
                'movie_id' => 32,
                'person_id' => 199,
                'character' => 'Rachel Dawes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            218 => 
            array (
                'cast_id' => 226,
                'movie_id' => 32,
                'person_id' => 200,
                'character' => 'Jim Gordon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            219 => 
            array (
                'cast_id' => 227,
                'movie_id' => 32,
                'person_id' => 201,
                'character' => 'Scarecrow',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            220 => 
            array (
                'cast_id' => 228,
                'movie_id' => 32,
                'person_id' => 202,
                'character' => 'Carmine Falcone',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            221 => 
            array (
                'cast_id' => 229,
                'movie_id' => 32,
                'person_id' => 203,
                'character' => 'Lucius Fox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            222 => 
            array (
                'cast_id' => 230,
                'movie_id' => 33,
                'person_id' => 196,
                'character' => 'Bruce Wayne / Batman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            223 => 
            array (
                'cast_id' => 231,
                'movie_id' => 33,
                'person_id' => 206,
                'character' => 'Joker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            224 => 
            array (
                'cast_id' => 232,
                'movie_id' => 33,
                'person_id' => 207,
                'character' => 'Harvey Dent / Two Face',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            225 => 
            array (
                'cast_id' => 233,
                'movie_id' => 33,
                'person_id' => 197,
                'character' => 'Alfred',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            226 => 
            array (
                'cast_id' => 234,
                'movie_id' => 33,
                'person_id' => 208,
                'character' => 'Rachel Dawes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            227 => 
            array (
                'cast_id' => 235,
                'movie_id' => 33,
                'person_id' => 203,
                'character' => 'Lucius Fox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            228 => 
            array (
                'cast_id' => 236,
                'movie_id' => 33,
                'person_id' => 209,
                'character' => 'The Mayor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            229 => 
            array (
                'cast_id' => 237,
                'movie_id' => 33,
                'person_id' => 201,
                'character' => 'Scarecrow',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            230 => 
            array (
                'cast_id' => 238,
                'movie_id' => 33,
                'person_id' => 210,
                'character' => 'Maroni',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            231 => 
            array (
                'cast_id' => 239,
                'movie_id' => 33,
                'person_id' => 211,
                'character' => 'Mike Engel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            232 => 
            array (
                'cast_id' => 240,
                'movie_id' => 32,
                'person_id' => 214,
                'character' => 'Earle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            233 => 
            array (
                'cast_id' => 241,
                'movie_id' => 32,
                'person_id' => 215,
                'character' => 'Ra&#039;s Al Ghul',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            234 => 
            array (
                'cast_id' => 242,
                'movie_id' => 34,
                'person_id' => 196,
                'character' => 'Bruce Wayne / Batman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            235 => 
            array (
                'cast_id' => 243,
                'movie_id' => 34,
                'person_id' => 200,
                'character' => 'Jim Gordon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            236 => 
            array (
                'cast_id' => 244,
                'movie_id' => 34,
                'person_id' => 217,
                'character' => 'Bane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            237 => 
            array (
                'cast_id' => 245,
                'movie_id' => 34,
                'person_id' => 218,
                'character' => 'Blake',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            238 => 
            array (
                'cast_id' => 246,
                'movie_id' => 34,
                'person_id' => 18,
                'character' => 'Selina Kyle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            239 => 
            array (
                'cast_id' => 247,
                'movie_id' => 34,
                'person_id' => 219,
                'character' => 'Miranda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            240 => 
            array (
                'cast_id' => 248,
                'movie_id' => 34,
                'person_id' => 203,
                'character' => 'Lucius Fox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            241 => 
            array (
                'cast_id' => 249,
                'movie_id' => 34,
                'person_id' => 197,
                'character' => 'Alfred',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            242 => 
            array (
                'cast_id' => 250,
                'movie_id' => 34,
                'person_id' => 220,
                'character' => 'Foley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            243 => 
            array (
                'cast_id' => 251,
                'movie_id' => 35,
                'person_id' => 221,
                'character' => 'Nina Sayers',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            244 => 
            array (
                'cast_id' => 252,
                'movie_id' => 35,
                'person_id' => 222,
                'character' => 'Lily',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            245 => 
            array (
                'cast_id' => 253,
                'movie_id' => 35,
                'person_id' => 223,
                'character' => 'Thomas Leroy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            246 => 
            array (
                'cast_id' => 254,
                'movie_id' => 35,
                'person_id' => 224,
                'character' => 'Erica Sayers',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            247 => 
            array (
                'cast_id' => 255,
                'movie_id' => 35,
                'person_id' => 45,
                'character' => 'Beth Macintyre',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            248 => 
            array (
                'cast_id' => 256,
                'movie_id' => 36,
                'person_id' => 226,
                'character' => 'Terence Mcdonagh',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            249 => 
            array (
                'cast_id' => 258,
                'movie_id' => 36,
                'person_id' => 227,
                'character' => 'Frankie Donnenfield',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            250 => 
            array (
                'cast_id' => 259,
                'movie_id' => 36,
                'person_id' => 228,
                'character' => 'Stevie Pruit',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            251 => 
            array (
                'cast_id' => 260,
                'movie_id' => 36,
                'person_id' => 229,
                'character' => 'Big Fate',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            252 => 
            array (
                'cast_id' => 261,
                'movie_id' => 36,
                'person_id' => 230,
                'character' => 'Heidi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            253 => 
            array (
                'cast_id' => 262,
                'movie_id' => 36,
                'person_id' => 50,
                'character' => 'Ned Schoenholtz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            254 => 
            array (
                'cast_id' => 263,
                'movie_id' => 36,
                'person_id' => 231,
                'character' => 'Mundt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            255 => 
            array (
                'cast_id' => 264,
                'movie_id' => 37,
                'person_id' => 67,
                'character' => 'Korben Dallas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            256 => 
            array (
                'cast_id' => 265,
                'movie_id' => 37,
                'person_id' => 233,
                'character' => 'Leeloo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            257 => 
            array (
                'cast_id' => 266,
                'movie_id' => 37,
                'person_id' => 200,
                'character' => 'Jean Baptiste Emanuel Zorg',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            258 => 
            array (
                'cast_id' => 267,
                'movie_id' => 37,
                'person_id' => 28,
                'character' => 'Father Viro Cornelius',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            259 => 
            array (
                'cast_id' => 268,
                'movie_id' => 37,
                'person_id' => 234,
                'character' => 'Ruby Rhod',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            260 => 
            array (
                'cast_id' => 269,
                'movie_id' => 37,
                'person_id' => 235,
                'character' => 'Billy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            261 => 
            array (
                'cast_id' => 270,
                'movie_id' => 37,
                'person_id' => 236,
                'character' => 'General Munro',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            262 => 
            array (
                'cast_id' => 272,
                'movie_id' => 37,
                'person_id' => 238,
                'character' => 'Fog',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            263 => 
            array (
                'cast_id' => 273,
                'movie_id' => 37,
                'person_id' => 239,
                'character' => 'David',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            264 => 
            array (
                'cast_id' => 274,
                'movie_id' => 37,
                'person_id' => 240,
                'character' => 'Right Arm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            265 => 
            array (
                'cast_id' => 275,
                'movie_id' => 37,
                'person_id' => 241,
                'character' => 'Mugger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            266 => 
            array (
                'cast_id' => 276,
                'movie_id' => 37,
                'person_id' => 242,
                'character' => 'Mr. Kim',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            267 => 
            array (
                'cast_id' => 277,
                'movie_id' => 37,
                'person_id' => 243,
                'character' => 'Mactilburgh',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            268 => 
            array (
                'cast_id' => 278,
                'movie_id' => 38,
                'person_id' => 246,
                'character' => 'Dana',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            269 => 
            array (
                'cast_id' => 279,
                'movie_id' => 38,
                'person_id' => 124,
                'character' => 'Curt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            270 => 
            array (
                'cast_id' => 280,
                'movie_id' => 38,
                'person_id' => 247,
                'character' => 'Jules',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            271 => 
            array (
                'cast_id' => 281,
                'movie_id' => 38,
                'person_id' => 248,
                'character' => 'Marty',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            272 => 
            array (
                'cast_id' => 282,
                'movie_id' => 38,
                'person_id' => 249,
                'character' => 'Holden',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            273 => 
            array (
                'cast_id' => 283,
                'movie_id' => 38,
                'person_id' => 250,
                'character' => 'Sitterson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            274 => 
            array (
                'cast_id' => 284,
                'movie_id' => 38,
                'person_id' => 251,
                'character' => 'Hadley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            275 => 
            array (
                'cast_id' => 285,
                'movie_id' => 39,
                'person_id' => 253,
                'character' => 'Helen Lyle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            276 => 
            array (
                'cast_id' => 286,
                'movie_id' => 39,
                'person_id' => 254,
                'character' => 'Candyman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            277 => 
            array (
                'cast_id' => 287,
                'movie_id' => 39,
                'person_id' => 255,
                'character' => 'Trevor Lyle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            278 => 
            array (
                'cast_id' => 288,
                'movie_id' => 39,
                'person_id' => 256,
                'character' => 'Bernie Walsh',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            279 => 
            array (
                'cast_id' => 289,
                'movie_id' => 39,
                'person_id' => 257,
                'character' => 'Anne-marie Mccoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            280 => 
            array (
                'cast_id' => 290,
                'movie_id' => 39,
                'person_id' => 258,
                'character' => 'Billy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            281 => 
            array (
                'cast_id' => 291,
                'movie_id' => 40,
                'person_id' => 261,
                'character' => 'Carlito',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            282 => 
            array (
                'cast_id' => 292,
                'movie_id' => 40,
                'person_id' => 262,
                'character' => 'Kleinfeld',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            283 => 
            array (
                'cast_id' => 293,
                'movie_id' => 40,
                'person_id' => 263,
                'character' => 'Gail',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            284 => 
            array (
                'cast_id' => 294,
                'movie_id' => 40,
                'person_id' => 264,
                'character' => 'Benny Blanco',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            285 => 
            array (
                'cast_id' => 295,
                'movie_id' => 40,
                'person_id' => 265,
                'character' => 'Pachanga',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            286 => 
            array (
                'cast_id' => 296,
                'movie_id' => 40,
                'person_id' => 266,
                'character' => 'Norwalk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            287 => 
            array (
                'cast_id' => 297,
                'movie_id' => 40,
                'person_id' => 267,
                'character' => 'Lalin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            288 => 
            array (
                'cast_id' => 298,
                'movie_id' => 40,
                'person_id' => 268,
                'character' => 'Frankie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            289 => 
            array (
                'cast_id' => 299,
                'movie_id' => 12,
                'person_id' => 271,
                'character' => 'Rajit Ratha',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            290 => 
            array (
                'cast_id' => 300,
                'movie_id' => 8,
                'person_id' => 272,
                'character' => 'Holly Gennaro Mcclane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            291 => 
            array (
                'cast_id' => 301,
                'movie_id' => 8,
                'person_id' => 273,
                'character' => 'Joseph Yoshinobu Takagi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            292 => 
            array (
                'cast_id' => 302,
                'movie_id' => 8,
                'person_id' => 274,
                'character' => 'Sgt. Al Powell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            293 => 
            array (
                'cast_id' => 303,
                'movie_id' => 41,
                'person_id' => 275,
                'character' => 'Andrew Detmer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            294 => 
            array (
                'cast_id' => 304,
                'movie_id' => 41,
                'person_id' => 276,
                'character' => 'Matt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            295 => 
            array (
                'cast_id' => 305,
                'movie_id' => 41,
                'person_id' => 277,
                'character' => 'Steve',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            296 => 
            array (
                'cast_id' => 306,
                'movie_id' => 41,
                'person_id' => 278,
                'character' => 'Richard Detmer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            297 => 
            array (
                'cast_id' => 307,
                'movie_id' => 41,
                'person_id' => 279,
                'character' => 'Casey Letter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            298 => 
            array (
                'cast_id' => 308,
                'movie_id' => 42,
                'person_id' => 280,
                'character' => 'Vincent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            299 => 
            array (
                'cast_id' => 309,
                'movie_id' => 42,
                'person_id' => 281,
                'character' => 'Max',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            300 => 
            array (
                'cast_id' => 310,
                'movie_id' => 42,
                'person_id' => 282,
                'character' => 'Annie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            301 => 
            array (
                'cast_id' => 311,
                'movie_id' => 42,
                'person_id' => 123,
                'character' => 'Fanning',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            302 => 
            array (
                'cast_id' => 312,
                'movie_id' => 42,
                'person_id' => 283,
                'character' => 'Richard Weidner',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            303 => 
            array (
                'cast_id' => 313,
                'movie_id' => 42,
                'person_id' => 284,
                'character' => 'Pedrosa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            304 => 
            array (
                'cast_id' => 314,
                'movie_id' => 42,
                'person_id' => 285,
                'character' => 'Young Professional Woman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            305 => 
            array (
                'cast_id' => 315,
                'movie_id' => 42,
                'person_id' => 286,
                'character' => 'Felix',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            306 => 
            array (
                'cast_id' => 317,
                'movie_id' => 47,
                'person_id' => 188,
                'character' => 'Judge Dredd',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            307 => 
            array (
                'cast_id' => 320,
                'movie_id' => 52,
                'person_id' => 281,
                'character' => 'Django',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            308 => 
            array (
                'cast_id' => 321,
                'movie_id' => 52,
                'person_id' => 134,
                'character' => 'Calvin Candie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            309 => 
            array (
                'cast_id' => 322,
                'movie_id' => 225,
                'person_id' => 180,
                'character' => 'Theo Faron',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            310 => 
            array (
                'cast_id' => 323,
                'movie_id' => 225,
                'person_id' => 197,
                'character' => 'Jasper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            311 => 
            array (
                'cast_id' => 324,
                'movie_id' => 225,
                'person_id' => 101,
                'character' => 'Julian',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            312 => 
            array (
                'cast_id' => 325,
                'movie_id' => 1,
                'person_id' => 288,
                'character' => 'Mika',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            313 => 
            array (
                'cast_id' => 326,
                'movie_id' => 1,
                'person_id' => 289,
                'character' => 'Shogun Tsunayoshi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            314 => 
            array (
                'cast_id' => 327,
                'movie_id' => 1,
                'person_id' => 290,
                'character' => 'Witch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            315 => 
            array (
                'cast_id' => 328,
                'movie_id' => 2,
                'person_id' => 291,
                'character' => 'Bayard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            316 => 
            array (
                'cast_id' => 329,
                'movie_id' => 5,
                'person_id' => 243,
                'character' => 'Murphy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            317 => 
            array (
                'cast_id' => 330,
                'movie_id' => 5,
                'person_id' => 292,
                'character' => 'Golic',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            318 => 
            array (
                'cast_id' => 331,
                'movie_id' => 5,
                'person_id' => 293,
                'character' => 'Andrews',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            319 => 
            array (
                'cast_id' => 332,
                'movie_id' => 7,
                'person_id' => 17,
                'character' => 'Marla Singer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            320 => 
            array (
                'cast_id' => 333,
                'movie_id' => 7,
                'person_id' => 294,
                'character' => 'Chloe',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            321 => 
            array (
                'cast_id' => 334,
                'movie_id' => 9,
                'person_id' => 295,
                'character' => 'Oracle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            322 => 
            array (
                'cast_id' => 335,
                'movie_id' => 44,
                'person_id' => 48,
                'character' => 'Top Dollar',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            323 => 
            array (
                'cast_id' => 336,
                'movie_id' => 44,
                'person_id' => 254,
                'character' => 'Grange',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            324 => 
            array (
                'cast_id' => 337,
                'movie_id' => 44,
                'person_id' => 296,
                'character' => 'Eric Draven',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            325 => 
            array (
                'cast_id' => 338,
                'movie_id' => 44,
                'person_id' => 297,
                'character' => 'Sergeant Albrecht',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            326 => 
            array (
                'cast_id' => 339,
                'movie_id' => 45,
                'person_id' => 298,
                'character' => 'Li Mu Bai',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            327 => 
            array (
                'cast_id' => 340,
                'movie_id' => 7,
                'person_id' => 299,
                'character' => 'Robert Bob Paulsen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            328 => 
            array (
                'cast_id' => 341,
                'movie_id' => 199,
                'person_id' => 79,
                'character' => 'President James Marshall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            329 => 
            array (
                'cast_id' => 342,
                'movie_id' => 199,
                'person_id' => 200,
                'character' => 'Ivan Korshunov',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            330 => 
            array (
                'cast_id' => 343,
                'movie_id' => 199,
                'person_id' => 255,
                'character' => 'Agent Gibbs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            331 => 
            array (
                'cast_id' => 344,
                'movie_id' => 199,
                'person_id' => 107,
                'character' => 'Major Caldwell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            332 => 
            array (
                'cast_id' => 345,
                'movie_id' => 199,
                'person_id' => 300,
                'character' => 'Vice President Kathryn Bennett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            333 => 
            array (
                'cast_id' => 346,
                'movie_id' => 199,
                'person_id' => 301,
                'character' => 'Defense Secretary Walter Dean',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            334 => 
            array (
                'cast_id' => 347,
                'movie_id' => 199,
                'person_id' => 302,
                'character' => 'Chief Of Staff Lloyd Shepherd',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            335 => 
            array (
                'cast_id' => 348,
                'movie_id' => 199,
                'person_id' => 303,
                'character' => 'Grace Marshall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            336 => 
            array (
                'cast_id' => 349,
                'movie_id' => 102,
                'person_id' => 78,
                'character' => 'Luke Skywalker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            337 => 
            array (
                'cast_id' => 350,
                'movie_id' => 102,
                'person_id' => 79,
                'character' => 'Han Solo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            338 => 
            array (
                'cast_id' => 351,
                'movie_id' => 102,
                'person_id' => 81,
                'character' => 'Princess Leia',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            339 => 
            array (
                'cast_id' => 352,
                'movie_id' => 102,
                'person_id' => 83,
                'character' => 'C3PO',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            340 => 
            array (
                'cast_id' => 353,
                'movie_id' => 102,
                'person_id' => 85,
                'character' => 'Darth Vader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            341 => 
            array (
                'cast_id' => 354,
                'movie_id' => 102,
                'person_id' => 87,
                'character' => 'Chewbacca',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            342 => 
            array (
                'cast_id' => 355,
                'movie_id' => 102,
                'person_id' => 84,
                'character' => 'R2D2',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            343 => 
            array (
                'cast_id' => 356,
                'movie_id' => 102,
                'person_id' => 80,
                'character' => 'Ben',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            344 => 
            array (
                'cast_id' => 357,
                'movie_id' => 102,
                'person_id' => 304,
                'character' => 'Lando Calrissian',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            345 => 
            array (
                'cast_id' => 358,
                'movie_id' => 102,
                'person_id' => 305,
                'character' => 'Yoda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            346 => 
            array (
                'cast_id' => 359,
                'movie_id' => 102,
                'person_id' => 306,
                'character' => 'Boba Fett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            347 => 
            array (
                'cast_id' => 360,
                'movie_id' => 103,
                'person_id' => 78,
                'character' => 'Luke Skywalker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            348 => 
            array (
                'cast_id' => 361,
                'movie_id' => 103,
                'person_id' => 79,
                'character' => 'Han Solo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            349 => 
            array (
                'cast_id' => 362,
                'movie_id' => 103,
                'person_id' => 81,
                'character' => 'Princess Leia',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            350 => 
            array (
                'cast_id' => 363,
                'movie_id' => 103,
                'person_id' => 304,
                'character' => 'Lando Calrissian',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            351 => 
            array (
                'cast_id' => 364,
                'movie_id' => 103,
                'person_id' => 83,
                'character' => 'C3PO',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            352 => 
            array (
                'cast_id' => 365,
                'movie_id' => 103,
                'person_id' => 87,
                'character' => 'Chewbacca',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            353 => 
            array (
                'cast_id' => 366,
                'movie_id' => 103,
                'person_id' => 305,
                'character' => 'Yoda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            354 => 
            array (
                'cast_id' => 367,
                'movie_id' => 103,
                'person_id' => 86,
                'character' => 'Darth Vader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            355 => 
            array (
                'cast_id' => 368,
                'movie_id' => 103,
                'person_id' => 85,
                'character' => 'Darth Vader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            356 => 
            array (
                'cast_id' => 369,
                'movie_id' => 103,
                'person_id' => 80,
                'character' => 'Ben ObiWan Kenobi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            357 => 
            array (
                'cast_id' => 370,
                'movie_id' => 103,
                'person_id' => 84,
                'character' => 'R2 D2',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            358 => 
            array (
                'cast_id' => 371,
                'movie_id' => 103,
                'person_id' => 307,
                'character' => 'Anakin Skywalker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            359 => 
            array (
                'cast_id' => 372,
                'movie_id' => 43,
                'person_id' => 308,
                'character' => 'Dante Hicks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            360 => 
            array (
                'cast_id' => 373,
                'movie_id' => 43,
                'person_id' => 309,
                'character' => 'Randal Graves',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            361 => 
            array (
                'cast_id' => 374,
                'movie_id' => 43,
                'person_id' => 310,
                'character' => 'Jay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            362 => 
            array (
                'cast_id' => 375,
                'movie_id' => 43,
                'person_id' => 311,
                'character' => 'Silent Bob',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            363 => 
            array (
                'cast_id' => 376,
                'movie_id' => 44,
                'person_id' => 312,
                'character' => 'Myca',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            364 => 
            array (
                'cast_id' => 377,
                'movie_id' => 45,
                'person_id' => 313,
                'character' => 'Yu Shu Lien',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            365 => 
            array (
                'cast_id' => 378,
                'movie_id' => 45,
                'person_id' => 314,
                'character' => 'Jen Yu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            366 => 
            array (
                'cast_id' => 379,
                'movie_id' => 46,
                'person_id' => 228,
                'character' => 'Jim Morrison',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            367 => 
            array (
                'cast_id' => 380,
                'movie_id' => 46,
                'person_id' => 48,
                'character' => 'Paul Rothchild',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            368 => 
            array (
                'cast_id' => 381,
                'movie_id' => 46,
                'person_id' => 315,
                'character' => 'Pamela Courson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            369 => 
            array (
                'cast_id' => 382,
                'movie_id' => 46,
                'person_id' => 316,
                'character' => 'Ray Manzarek',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            370 => 
            array (
                'cast_id' => 383,
                'movie_id' => 46,
                'person_id' => 317,
                'character' => 'Robby Krieger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            371 => 
            array (
                'cast_id' => 384,
                'movie_id' => 46,
                'person_id' => 318,
                'character' => 'John Densmore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            372 => 
            array (
                'cast_id' => 385,
                'movie_id' => 46,
                'person_id' => 319,
                'character' => 'Tom Baker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            373 => 
            array (
                'cast_id' => 386,
                'movie_id' => 47,
                'person_id' => 320,
                'character' => 'Anderson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            374 => 
            array (
                'cast_id' => 387,
                'movie_id' => 47,
                'person_id' => 321,
                'character' => 'Mama',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            375 => 
            array (
                'cast_id' => 388,
                'movie_id' => 48,
                'person_id' => 146,
                'character' => 'Shannon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            376 => 
            array (
                'cast_id' => 389,
                'movie_id' => 48,
                'person_id' => 46,
                'character' => 'Nino',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            377 => 
            array (
                'cast_id' => 390,
                'movie_id' => 48,
                'person_id' => 322,
                'character' => 'Driver',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            378 => 
            array (
                'cast_id' => 391,
                'movie_id' => 48,
                'person_id' => 323,
                'character' => 'Irene',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            379 => 
            array (
                'cast_id' => 392,
                'movie_id' => 48,
                'person_id' => 324,
                'character' => 'Bernie Rose',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            380 => 
            array (
                'cast_id' => 393,
                'movie_id' => 48,
                'person_id' => 325,
                'character' => 'Standard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            381 => 
            array (
                'cast_id' => 394,
                'movie_id' => 48,
                'person_id' => 326,
                'character' => 'Blanche',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            382 => 
            array (
                'cast_id' => 395,
                'movie_id' => 49,
                'person_id' => 327,
                'character' => 'Wong Feihung',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            383 => 
            array (
                'cast_id' => 396,
                'movie_id' => 49,
                'person_id' => 328,
                'character' => 'Counter Intelligence Officer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            384 => 
            array (
                'cast_id' => 397,
                'movie_id' => 50,
                'person_id' => 291,
                'character' => 'Nathaniel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            385 => 
            array (
                'cast_id' => 398,
                'movie_id' => 50,
                'person_id' => 329,
                'character' => 'Giselle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            386 => 
            array (
                'cast_id' => 399,
                'movie_id' => 50,
                'person_id' => 330,
                'character' => 'Robert Philip',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            387 => 
            array (
                'cast_id' => 400,
                'movie_id' => 50,
                'person_id' => 331,
                'character' => 'Prince Edward',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            388 => 
            array (
                'cast_id' => 401,
                'movie_id' => 50,
                'person_id' => 332,
                'character' => 'Nancy Tremaine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            389 => 
            array (
                'cast_id' => 402,
                'movie_id' => 50,
                'person_id' => 333,
                'character' => 'Queen Narissa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            390 => 
            array (
                'cast_id' => 403,
                'movie_id' => 50,
                'person_id' => 334,
                'character' => 'The Narrator',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            391 => 
            array (
                'cast_id' => 404,
                'movie_id' => 51,
                'person_id' => 26,
                'character' => 'Brain',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            392 => 
            array (
                'cast_id' => 405,
                'movie_id' => 51,
                'person_id' => 335,
                'character' => 'Snake Plissken',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            393 => 
            array (
                'cast_id' => 406,
                'movie_id' => 51,
                'person_id' => 336,
                'character' => 'Hauk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            394 => 
            array (
                'cast_id' => 407,
                'movie_id' => 51,
                'person_id' => 337,
                'character' => 'Cabbie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            395 => 
            array (
                'cast_id' => 408,
                'movie_id' => 51,
                'person_id' => 338,
                'character' => 'President',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            396 => 
            array (
                'cast_id' => 409,
                'movie_id' => 51,
                'person_id' => 339,
                'character' => 'The Duke',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            397 => 
            array (
                'cast_id' => 410,
                'movie_id' => 52,
                'person_id' => 97,
                'character' => 'Stephen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            398 => 
            array (
                'cast_id' => 411,
                'movie_id' => 52,
                'person_id' => 340,
                'character' => 'Dr King Schultz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            399 => 
            array (
                'cast_id' => 412,
                'movie_id' => 52,
                'person_id' => 341,
                'character' => 'Broomhilda Von Shaft',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            400 => 
            array (
                'cast_id' => 413,
                'movie_id' => 53,
                'person_id' => 342,
                'character' => 'Wikus Van De Merwe',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            401 => 
            array (
                'cast_id' => 414,
                'movie_id' => 54,
                'person_id' => 18,
                'character' => 'Agent 99',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            402 => 
            array (
                'cast_id' => 415,
                'movie_id' => 54,
                'person_id' => 147,
                'character' => 'The Chief',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            403 => 
            array (
                'cast_id' => 416,
                'movie_id' => 54,
                'person_id' => 343,
                'character' => 'Maxwell Smart',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            404 => 
            array (
                'cast_id' => 417,
                'movie_id' => 54,
                'person_id' => 344,
                'character' => 'Agent 23',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            405 => 
            array (
                'cast_id' => 418,
                'movie_id' => 54,
                'person_id' => 345,
                'character' => 'Siegfried',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            406 => 
            array (
                'cast_id' => 419,
                'movie_id' => 54,
                'person_id' => 346,
                'character' => 'Bruce',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            407 => 
            array (
                'cast_id' => 420,
                'movie_id' => 54,
                'person_id' => 347,
                'character' => 'Hymie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            408 => 
            array (
                'cast_id' => 421,
                'movie_id' => 54,
                'person_id' => 348,
                'character' => 'Agent 13',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            409 => 
            array (
                'cast_id' => 422,
                'movie_id' => 54,
                'person_id' => 349,
                'character' => 'The President',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            410 => 
            array (
                'cast_id' => 423,
                'movie_id' => 54,
                'person_id' => 350,
                'character' => 'Agent 91',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            411 => 
            array (
                'cast_id' => 424,
                'movie_id' => 55,
                'person_id' => 348,
                'character' => 'Dr Peter Venkman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            412 => 
            array (
                'cast_id' => 425,
                'movie_id' => 55,
                'person_id' => 14,
                'character' => 'Dr Raymond Stantz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            413 => 
            array (
                'cast_id' => 426,
                'movie_id' => 55,
                'person_id' => 68,
                'character' => 'Walter Peck',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            414 => 
            array (
                'cast_id' => 427,
                'movie_id' => 55,
                'person_id' => 297,
                'character' => 'Winston Zeddmore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            415 => 
            array (
                'cast_id' => 428,
                'movie_id' => 55,
                'person_id' => 351,
                'character' => 'Dr Egon Spengler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            416 => 
            array (
                'cast_id' => 429,
                'movie_id' => 55,
                'person_id' => 352,
                'character' => 'Louis Tully',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            417 => 
            array (
                'cast_id' => 430,
                'movie_id' => 55,
                'person_id' => 353,
                'character' => 'Janine Melnitz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            418 => 
            array (
                'cast_id' => 431,
                'movie_id' => 56,
                'person_id' => 113,
                'character' => 'Peter Quill',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            419 => 
            array (
                'cast_id' => 432,
                'movie_id' => 56,
                'person_id' => 152,
                'character' => 'Gamora',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            420 => 
            array (
                'cast_id' => 433,
                'movie_id' => 56,
                'person_id' => 300,
                'character' => 'Nova Prime',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            421 => 
            array (
                'cast_id' => 434,
                'movie_id' => 56,
                'person_id' => 354,
                'character' => 'Drax',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            422 => 
            array (
                'cast_id' => 435,
                'movie_id' => 56,
                'person_id' => 355,
                'character' => 'Groot',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            423 => 
            array (
                'cast_id' => 436,
                'movie_id' => 56,
                'person_id' => 356,
                'character' => 'Rocket',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            424 => 
            array (
                'cast_id' => 437,
                'movie_id' => 56,
                'person_id' => 357,
                'character' => 'Ronan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            425 => 
            array (
                'cast_id' => 438,
                'movie_id' => 56,
                'person_id' => 358,
                'character' => 'Yondu Udonta',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            426 => 
            array (
                'cast_id' => 439,
                'movie_id' => 56,
                'person_id' => 359,
                'character' => 'Nebula',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            427 => 
            array (
                'cast_id' => 440,
                'movie_id' => 56,
                'person_id' => 360,
                'character' => 'Korath',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            428 => 
            array (
                'cast_id' => 441,
                'movie_id' => 56,
                'person_id' => 361,
                'character' => 'Corpsman Dey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            429 => 
            array (
                'cast_id' => 442,
                'movie_id' => 56,
                'person_id' => 362,
                'character' => 'The Collector',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            430 => 
            array (
                'cast_id' => 443,
                'movie_id' => 56,
                'person_id' => 363,
                'character' => 'Denarian Saal',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            431 => 
            array (
                'cast_id' => 444,
                'movie_id' => 57,
                'person_id' => 27,
                'character' => 'Mr Ollivander',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            432 => 
            array (
                'cast_id' => 445,
                'movie_id' => 57,
                'person_id' => 364,
                'character' => 'Professor Albus Dumbledore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            433 => 
            array (
                'cast_id' => 446,
                'movie_id' => 57,
                'person_id' => 365,
                'character' => 'Professor Minerva Mcgonagall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            434 => 
            array (
                'cast_id' => 447,
                'movie_id' => 57,
                'person_id' => 366,
                'character' => 'Rubeus Hagrid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            435 => 
            array (
                'cast_id' => 448,
                'movie_id' => 57,
                'person_id' => 367,
                'character' => 'Harry Potter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            436 => 
            array (
                'cast_id' => 449,
                'movie_id' => 57,
                'person_id' => 368,
                'character' => 'Aunt Petunia Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            437 => 
            array (
                'cast_id' => 450,
                'movie_id' => 57,
                'person_id' => 369,
                'character' => 'Goblin Bank Teller  Professor Flitwick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            438 => 
            array (
                'cast_id' => 451,
                'movie_id' => 57,
                'person_id' => 370,
                'character' => 'Griphook The Goblin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            439 => 
            array (
                'cast_id' => 452,
                'movie_id' => 57,
                'person_id' => 371,
                'character' => 'Uncle Vernon Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            440 => 
            array (
                'cast_id' => 453,
                'movie_id' => 57,
                'person_id' => 372,
                'character' => 'Dudley Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            441 => 
            array (
                'cast_id' => 454,
                'movie_id' => 58,
                'person_id' => 367,
                'character' => 'Harry Potter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            442 => 
            array (
                'cast_id' => 455,
                'movie_id' => 58,
                'person_id' => 371,
                'character' => 'Uncle Vernon Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            443 => 
            array (
                'cast_id' => 456,
                'movie_id' => 58,
                'person_id' => 368,
                'character' => 'Aunt Petunia Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            444 => 
            array (
                'cast_id' => 457,
                'movie_id' => 58,
                'person_id' => 372,
                'character' => 'Dudley Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            445 => 
            array (
                'cast_id' => 458,
                'movie_id' => 58,
                'person_id' => 373,
                'character' => 'Ron Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            446 => 
            array (
                'cast_id' => 459,
                'movie_id' => 58,
                'person_id' => 374,
                'character' => 'Hermione Granger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            447 => 
            array (
                'cast_id' => 460,
                'movie_id' => 58,
                'person_id' => 375,
                'character' => 'Dobby The House Elf',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            448 => 
            array (
                'cast_id' => 461,
                'movie_id' => 58,
                'person_id' => 376,
                'character' => 'Fred Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            449 => 
            array (
                'cast_id' => 462,
                'movie_id' => 58,
                'person_id' => 377,
                'character' => 'George Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            450 => 
            array (
                'cast_id' => 463,
                'movie_id' => 58,
                'person_id' => 378,
                'character' => 'Mrs Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            451 => 
            array (
                'cast_id' => 464,
                'movie_id' => 58,
                'person_id' => 379,
                'character' => 'Ginny Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            452 => 
            array (
                'cast_id' => 465,
                'movie_id' => 58,
                'person_id' => 380,
                'character' => 'Arthur Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            453 => 
            array (
                'cast_id' => 466,
                'movie_id' => 57,
                'person_id' => 373,
                'character' => 'Ron Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            454 => 
            array (
                'cast_id' => 467,
                'movie_id' => 57,
                'person_id' => 374,
                'character' => 'Hermione Granger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            455 => 
            array (
                'cast_id' => 468,
                'movie_id' => 59,
                'person_id' => 367,
                'character' => 'Harry Potter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            456 => 
            array (
                'cast_id' => 469,
                'movie_id' => 59,
                'person_id' => 371,
                'character' => 'Uncle Vernon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            457 => 
            array (
                'cast_id' => 470,
                'movie_id' => 59,
                'person_id' => 368,
                'character' => 'Aunt Petunia',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            458 => 
            array (
                'cast_id' => 471,
                'movie_id' => 59,
                'person_id' => 372,
                'character' => 'Dudley Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            459 => 
            array (
                'cast_id' => 472,
                'movie_id' => 59,
                'person_id' => 200,
                'character' => 'Sirius Black',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            460 => 
            array (
                'cast_id' => 473,
                'movie_id' => 59,
                'person_id' => 373,
                'character' => 'Ron Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            461 => 
            array (
                'cast_id' => 474,
                'movie_id' => 59,
                'person_id' => 374,
                'character' => 'Hermione Granger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            462 => 
            array (
                'cast_id' => 475,
                'movie_id' => 59,
                'person_id' => 381,
                'character' => 'Aunt Marge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            463 => 
            array (
                'cast_id' => 476,
                'movie_id' => 59,
                'person_id' => 382,
                'character' => 'Cornelius Fudge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            464 => 
            array (
                'cast_id' => 477,
                'movie_id' => 59,
                'person_id' => 366,
                'character' => 'Hagrid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            465 => 
            array (
                'cast_id' => 478,
                'movie_id' => 58,
                'person_id' => 366,
                'character' => 'Hagrid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            466 => 
            array (
                'cast_id' => 479,
                'movie_id' => 60,
                'person_id' => 291,
                'character' => 'Wormtail',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            467 => 
            array (
                'cast_id' => 480,
                'movie_id' => 60,
                'person_id' => 367,
                'character' => 'Harry Potter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            468 => 
            array (
                'cast_id' => 481,
                'movie_id' => 60,
                'person_id' => 374,
                'character' => 'Hermione Granger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            469 => 
            array (
                'cast_id' => 482,
                'movie_id' => 60,
                'person_id' => 373,
                'character' => 'Ron Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            470 => 
            array (
                'cast_id' => 483,
                'movie_id' => 60,
                'person_id' => 380,
                'character' => 'Arthur Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            471 => 
            array (
                'cast_id' => 484,
                'movie_id' => 60,
                'person_id' => 376,
                'character' => 'Fred Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            472 => 
            array (
                'cast_id' => 485,
                'movie_id' => 60,
                'person_id' => 377,
                'character' => 'George Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            473 => 
            array (
                'cast_id' => 486,
                'movie_id' => 60,
                'person_id' => 379,
                'character' => 'Ginny Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            474 => 
            array (
                'cast_id' => 487,
                'movie_id' => 60,
                'person_id' => 383,
                'character' => 'Frank Bryce',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            475 => 
            array (
                'cast_id' => 488,
                'movie_id' => 60,
                'person_id' => 384,
                'character' => 'Barty Crouch Junior',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            476 => 
            array (
                'cast_id' => 489,
                'movie_id' => 60,
                'person_id' => 385,
                'character' => 'Cedric Diggory',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            477 => 
            array (
                'cast_id' => 490,
                'movie_id' => 60,
                'person_id' => 386,
                'character' => 'Lucius Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            478 => 
            array (
                'cast_id' => 491,
                'movie_id' => 60,
                'person_id' => 387,
                'character' => 'Draco Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            479 => 
            array (
                'cast_id' => 492,
                'movie_id' => 61,
                'person_id' => 367,
                'character' => 'Harry Potter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            480 => 
            array (
                'cast_id' => 493,
                'movie_id' => 61,
                'person_id' => 372,
                'character' => 'Dudley Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            481 => 
            array (
                'cast_id' => 494,
                'movie_id' => 61,
                'person_id' => 368,
                'character' => 'Aunt Petunia Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            482 => 
            array (
                'cast_id' => 495,
                'movie_id' => 61,
                'person_id' => 371,
                'character' => 'Uncle Vernon Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            483 => 
            array (
                'cast_id' => 496,
                'movie_id' => 61,
                'person_id' => 385,
                'character' => 'Cedric Diggory',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            484 => 
            array (
                'cast_id' => 497,
                'movie_id' => 61,
                'person_id' => 388,
                'character' => 'Lord Voldemort',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            485 => 
            array (
                'cast_id' => 498,
                'movie_id' => 61,
                'person_id' => 389,
                'character' => 'Nymphadora Tonks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            486 => 
            array (
                'cast_id' => 499,
                'movie_id' => 61,
                'person_id' => 390,
                'character' => 'Alastor Madeye Moody',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            487 => 
            array (
                'cast_id' => 500,
                'movie_id' => 62,
                'person_id' => 367,
                'character' => 'Harry Potter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            488 => 
            array (
                'cast_id' => 501,
                'movie_id' => 62,
                'person_id' => 379,
                'character' => 'Ginny Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            489 => 
            array (
                'cast_id' => 502,
                'movie_id' => 62,
                'person_id' => 378,
                'character' => 'Molly Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            490 => 
            array (
                'cast_id' => 503,
                'movie_id' => 62,
                'person_id' => 373,
                'character' => 'Ron Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            491 => 
            array (
                'cast_id' => 504,
                'movie_id' => 62,
                'person_id' => 374,
                'character' => 'Hermione Granger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            492 => 
            array (
                'cast_id' => 505,
                'movie_id' => 62,
                'person_id' => 17,
                'character' => 'Bellatrix Lestrange',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            493 => 
            array (
                'cast_id' => 506,
                'movie_id' => 62,
                'person_id' => 291,
                'character' => 'Wormtail',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            494 => 
            array (
                'cast_id' => 507,
                'movie_id' => 62,
                'person_id' => 377,
                'character' => 'George Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            495 => 
            array (
                'cast_id' => 508,
                'movie_id' => 62,
                'person_id' => 391,
                'character' => 'Professor Albus Dumbledore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            496 => 
            array (
                'cast_id' => 509,
                'movie_id' => 62,
                'person_id' => 392,
                'character' => 'Professor Horace Slughorn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            497 => 
            array (
                'cast_id' => 510,
                'movie_id' => 63,
                'person_id' => 374,
                'character' => 'Hermione Granger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            498 => 
            array (
                'cast_id' => 511,
                'movie_id' => 63,
                'person_id' => 371,
                'character' => 'Vernon Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            499 => 
            array (
                'cast_id' => 512,
                'movie_id' => 63,
                'person_id' => 372,
                'character' => 'Dudley Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        \DB::table('cast')->insert(array (
            0 => 
            array (
                'cast_id' => 513,
                'movie_id' => 63,
                'person_id' => 367,
                'character' => 'Harry Potter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'cast_id' => 514,
                'movie_id' => 63,
                'person_id' => 378,
                'character' => 'Molly Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'cast_id' => 515,
                'movie_id' => 63,
                'person_id' => 379,
                'character' => 'Ginny Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'cast_id' => 516,
                'movie_id' => 63,
                'person_id' => 373,
                'character' => 'Ron Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'cast_id' => 517,
                'movie_id' => 63,
                'person_id' => 368,
                'character' => 'Petunia Dursley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'cast_id' => 518,
                'movie_id' => 63,
                'person_id' => 388,
                'character' => 'Lord Voldemort',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'cast_id' => 519,
                'movie_id' => 63,
                'person_id' => 17,
                'character' => 'Bellatrix Lestrange',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'cast_id' => 520,
                'movie_id' => 63,
                'person_id' => 393,
                'character' => 'Minister Rufus Scrimgeour',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'cast_id' => 521,
                'movie_id' => 64,
                'person_id' => 388,
                'character' => 'Lord Voldemort',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'cast_id' => 522,
                'movie_id' => 64,
                'person_id' => 391,
                'character' => 'Professor Albus Dumbledore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'cast_id' => 523,
                'movie_id' => 64,
                'person_id' => 367,
                'character' => 'Harry Potter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'cast_id' => 524,
                'movie_id' => 64,
                'person_id' => 373,
                'character' => 'Ron Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'cast_id' => 525,
                'movie_id' => 64,
                'person_id' => 374,
                'character' => 'Hermione Granger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'cast_id' => 526,
                'movie_id' => 64,
                'person_id' => 369,
                'character' => 'Griphook  Professor Filius Flitwick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'cast_id' => 527,
                'movie_id' => 64,
                'person_id' => 27,
                'character' => 'Ollivander',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'cast_id' => 528,
                'movie_id' => 64,
                'person_id' => 17,
                'character' => 'Bellatrix Lestrange',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'cast_id' => 529,
                'movie_id' => 64,
                'person_id' => 394,
                'character' => 'Luna Lovegood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'cast_id' => 530,
                'movie_id' => 64,
                'person_id' => 395,
                'character' => 'Bill Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'cast_id' => 531,
                'movie_id' => 65,
                'person_id' => 345,
                'character' => 'Ramsley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'cast_id' => 532,
                'movie_id' => 65,
                'person_id' => 396,
                'character' => 'Jim Evers',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'cast_id' => 533,
                'movie_id' => 65,
                'person_id' => 397,
                'character' => 'Master Gracey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'cast_id' => 534,
                'movie_id' => 65,
                'person_id' => 398,
                'character' => 'Madame Leota',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'cast_id' => 535,
                'movie_id' => 65,
                'person_id' => 399,
                'character' => 'Ezra',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'cast_id' => 536,
                'movie_id' => 66,
                'person_id' => 400,
                'character' => 'Eddie Felson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'cast_id' => 537,
                'movie_id' => 66,
                'person_id' => 401,
                'character' => 'Minnesota Fats',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'cast_id' => 538,
                'movie_id' => 66,
                'person_id' => 402,
                'character' => 'Sarah Packard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'cast_id' => 539,
                'movie_id' => 66,
                'person_id' => 403,
                'character' => 'Bert Gordon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'cast_id' => 540,
                'movie_id' => 67,
                'person_id' => 371,
                'character' => 'Monsieur Frick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'cast_id' => 541,
                'movie_id' => 67,
                'person_id' => 404,
                'character' => 'Georges Mlis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'cast_id' => 542,
                'movie_id' => 67,
                'person_id' => 405,
                'character' => 'Station Inspector',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'cast_id' => 543,
                'movie_id' => 67,
                'person_id' => 406,
                'character' => 'Hugo Cabret',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'cast_id' => 544,
                'movie_id' => 67,
                'person_id' => 407,
                'character' => 'Isabelle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'cast_id' => 545,
                'movie_id' => 67,
                'person_id' => 408,
                'character' => 'Uncle Claude',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'cast_id' => 546,
                'movie_id' => 67,
                'person_id' => 409,
                'character' => 'Monsieur Labisse',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'cast_id' => 547,
                'movie_id' => 67,
                'person_id' => 410,
                'character' => 'Hugos Father',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'cast_id' => 548,
                'movie_id' => 69,
                'person_id' => 411,
                'character' => 'Katniss Everdeen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'cast_id' => 549,
                'movie_id' => 69,
                'person_id' => 412,
                'character' => 'Gale Hawthorne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'cast_id' => 550,
                'movie_id' => 69,
                'person_id' => 413,
                'character' => 'Haymitch Abernathy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'cast_id' => 551,
                'movie_id' => 69,
                'person_id' => 414,
                'character' => 'Peeta Mellark',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'cast_id' => 552,
                'movie_id' => 69,
                'person_id' => 415,
                'character' => 'Katniss Mother',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'cast_id' => 553,
                'movie_id' => 69,
                'person_id' => 416,
                'character' => 'Primrose Everdeen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'cast_id' => 554,
                'movie_id' => 69,
                'person_id' => 417,
                'character' => 'President Snow',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'cast_id' => 555,
                'movie_id' => 69,
                'person_id' => 418,
                'character' => 'Effie Trinket',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'cast_id' => 556,
                'movie_id' => 69,
                'person_id' => 419,
                'character' => 'Cinna',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'cast_id' => 557,
                'movie_id' => 69,
                'person_id' => 420,
                'character' => 'Caesar Flickerman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'cast_id' => 558,
                'movie_id' => 70,
                'person_id' => 411,
                'character' => 'Katniss Everdeen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'cast_id' => 559,
                'movie_id' => 70,
                'person_id' => 414,
                'character' => 'Peeta Mellark',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            47 => 
            array (
                'cast_id' => 560,
                'movie_id' => 70,
                'person_id' => 412,
                'character' => 'Gale Hawthorne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            48 => 
            array (
                'cast_id' => 561,
                'movie_id' => 70,
                'person_id' => 413,
                'character' => 'Haymitch Abernathy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            49 => 
            array (
                'cast_id' => 562,
                'movie_id' => 70,
                'person_id' => 417,
                'character' => 'President Snow',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            50 => 
            array (
                'cast_id' => 563,
                'movie_id' => 70,
                'person_id' => 101,
                'character' => 'President Alma Coin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            51 => 
            array (
                'cast_id' => 564,
                'movie_id' => 70,
                'person_id' => 416,
                'character' => 'Primrose Everdeen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            52 => 
            array (
                'cast_id' => 565,
                'movie_id' => 70,
                'person_id' => 418,
                'character' => 'Effie Trinket',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            53 => 
            array (
                'cast_id' => 566,
                'movie_id' => 70,
                'person_id' => 415,
                'character' => 'Katniss Mother',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            54 => 
            array (
                'cast_id' => 567,
                'movie_id' => 70,
                'person_id' => 420,
                'character' => 'Caesar Flickerman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            55 => 
            array (
                'cast_id' => 568,
                'movie_id' => 70,
                'person_id' => 421,
                'character' => 'Plutarch Heavensbee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            56 => 
            array (
                'cast_id' => 569,
                'movie_id' => 70,
                'person_id' => 422,
                'character' => 'Finnick Odair',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            57 => 
            array (
                'cast_id' => 570,
                'movie_id' => 70,
                'person_id' => 423,
                'character' => 'Johanna Mason',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            58 => 
            array (
                'cast_id' => 571,
                'movie_id' => 70,
                'person_id' => 424,
                'character' => 'Beetee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            59 => 
            array (
                'cast_id' => 572,
                'movie_id' => 70,
                'person_id' => 425,
                'character' => 'Boggs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            60 => 
            array (
                'cast_id' => 573,
                'movie_id' => 71,
                'person_id' => 426,
                'character' => 'Del Spooner',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            61 => 
            array (
                'cast_id' => 574,
                'movie_id' => 71,
                'person_id' => 427,
                'character' => 'Susan Calvin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            62 => 
            array (
                'cast_id' => 575,
                'movie_id' => 71,
                'person_id' => 428,
                'character' => 'Sonny',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            63 => 
            array (
                'cast_id' => 576,
                'movie_id' => 71,
                'person_id' => 429,
                'character' => 'Dr Alfred Lanning',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            64 => 
            array (
                'cast_id' => 577,
                'movie_id' => 71,
                'person_id' => 430,
                'character' => 'Lawrence Robertson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            65 => 
            array (
                'cast_id' => 578,
                'movie_id' => 72,
                'person_id' => 431,
                'character' => 'Steven Russell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            66 => 
            array (
                'cast_id' => 579,
                'movie_id' => 72,
                'person_id' => 432,
                'character' => 'Phillip Morris',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            67 => 
            array (
                'cast_id' => 580,
                'movie_id' => 72,
                'person_id' => 433,
                'character' => 'Debbie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            68 => 
            array (
                'cast_id' => 581,
                'movie_id' => 73,
                'person_id' => 340,
                'character' => 'Col Hans Landa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            69 => 
            array (
                'cast_id' => 582,
                'movie_id' => 73,
                'person_id' => 434,
                'character' => 'Shosanna',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            70 => 
            array (
                'cast_id' => 583,
                'movie_id' => 73,
                'person_id' => 435,
                'character' => 'Sgt Donny Donowitz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            71 => 
            array (
                'cast_id' => 584,
                'movie_id' => 73,
                'person_id' => 195,
                'character' => 'Fredrick Zoller',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            72 => 
            array (
                'cast_id' => 585,
                'movie_id' => 73,
                'person_id' => 436,
                'character' => 'Lt Archie Hicox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            73 => 
            array (
                'cast_id' => 586,
                'movie_id' => 73,
                'person_id' => 437,
                'character' => 'Bridget Von Hammersmark',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            74 => 
            array (
                'cast_id' => 587,
                'movie_id' => 74,
                'person_id' => 134,
                'character' => 'Cobb',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            75 => 
            array (
                'cast_id' => 588,
                'movie_id' => 74,
                'person_id' => 218,
                'character' => 'Arthur',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            76 => 
            array (
                'cast_id' => 589,
                'movie_id' => 74,
                'person_id' => 217,
                'character' => 'Eames',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            77 => 
            array (
                'cast_id' => 590,
                'movie_id' => 74,
                'person_id' => 215,
                'character' => 'Saito',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            78 => 
            array (
                'cast_id' => 591,
                'movie_id' => 74,
                'person_id' => 201,
                'character' => 'Robert Fischer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            79 => 
            array (
                'cast_id' => 592,
                'movie_id' => 74,
                'person_id' => 219,
                'character' => 'Mal',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            80 => 
            array (
                'cast_id' => 593,
                'movie_id' => 74,
                'person_id' => 43,
                'character' => 'Maurice Fischer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            81 => 
            array (
                'cast_id' => 594,
                'movie_id' => 74,
                'person_id' => 197,
                'character' => 'Miles',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            82 => 
            array (
                'cast_id' => 595,
                'movie_id' => 74,
                'person_id' => 438,
                'character' => 'Ariadne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            83 => 
            array (
                'cast_id' => 596,
                'movie_id' => 74,
                'person_id' => 439,
                'character' => 'Yusuf',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            84 => 
            array (
                'cast_id' => 597,
                'movie_id' => 74,
                'person_id' => 440,
                'character' => 'Browning',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            85 => 
            array (
                'cast_id' => 598,
                'movie_id' => 74,
                'person_id' => 441,
                'character' => 'Nash',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            86 => 
            array (
                'cast_id' => 599,
                'movie_id' => 75,
                'person_id' => 121,
                'character' => 'Tony Stark  Iron Man',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            87 => 
            array (
                'cast_id' => 600,
                'movie_id' => 75,
                'person_id' => 131,
                'character' => 'Pepper Potts',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            88 => 
            array (
                'cast_id' => 601,
                'movie_id' => 75,
                'person_id' => 128,
                'character' => 'Agent Coulson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            89 => 
            array (
                'cast_id' => 602,
                'movie_id' => 75,
                'person_id' => 132,
                'character' => 'Jarvis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            90 => 
            array (
                'cast_id' => 603,
                'movie_id' => 75,
                'person_id' => 442,
                'character' => 'Rhodey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            91 => 
            array (
                'cast_id' => 604,
                'movie_id' => 75,
                'person_id' => 443,
                'character' => 'Obadiah Stane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            92 => 
            array (
                'cast_id' => 605,
                'movie_id' => 75,
                'person_id' => 444,
                'character' => 'Christine Everhart',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            93 => 
            array (
                'cast_id' => 606,
                'movie_id' => 75,
                'person_id' => 445,
                'character' => 'Hogan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            94 => 
            array (
                'cast_id' => 607,
                'movie_id' => 76,
                'person_id' => 121,
                'character' => 'Tony Stark',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            95 => 
            array (
                'cast_id' => 608,
                'movie_id' => 76,
                'person_id' => 131,
                'character' => 'Pepper Potts',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            96 => 
            array (
                'cast_id' => 609,
                'movie_id' => 76,
                'person_id' => 125,
                'character' => 'Natalie Rushman  Natasha Romanoff',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            97 => 
            array (
                'cast_id' => 610,
                'movie_id' => 76,
                'person_id' => 128,
                'character' => 'Agent Coulson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            98 => 
            array (
                'cast_id' => 611,
                'movie_id' => 76,
                'person_id' => 132,
                'character' => 'Jarvis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            99 => 
            array (
                'cast_id' => 612,
                'movie_id' => 76,
                'person_id' => 444,
                'character' => 'Christine Everhart',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            100 => 
            array (
                'cast_id' => 613,
                'movie_id' => 76,
                'person_id' => 445,
                'character' => 'Happy Hogan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            101 => 
            array (
                'cast_id' => 614,
                'movie_id' => 76,
                'person_id' => 446,
                'character' => 'James Rhodey Rhodes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            102 => 
            array (
                'cast_id' => 615,
                'movie_id' => 76,
                'person_id' => 447,
                'character' => 'Justin Hammer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            103 => 
            array (
                'cast_id' => 616,
                'movie_id' => 76,
                'person_id' => 448,
                'character' => 'Ivan Vanko',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            104 => 
            array (
                'cast_id' => 617,
                'movie_id' => 76,
                'person_id' => 97,
                'character' => 'Nick Fury',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            105 => 
            array (
                'cast_id' => 618,
                'movie_id' => 76,
                'person_id' => 449,
                'character' => 'Us Marshal',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            106 => 
            array (
                'cast_id' => 619,
                'movie_id' => 57,
                'person_id' => 378,
                'character' => 'Molly Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            107 => 
            array (
                'cast_id' => 620,
                'movie_id' => 57,
                'person_id' => 379,
                'character' => 'Ginny Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            108 => 
            array (
                'cast_id' => 621,
                'movie_id' => 57,
                'person_id' => 376,
                'character' => 'Fred Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            109 => 
            array (
                'cast_id' => 622,
                'movie_id' => 57,
                'person_id' => 377,
                'character' => 'George Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            110 => 
            array (
                'cast_id' => 623,
                'movie_id' => 57,
                'person_id' => 387,
                'character' => 'Draco Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            111 => 
            array (
                'cast_id' => 624,
                'movie_id' => 57,
                'person_id' => 450,
                'character' => 'Nearly Headless Nick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            112 => 
            array (
                'cast_id' => 625,
                'movie_id' => 57,
                'person_id' => 451,
                'character' => 'Argus Filch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            113 => 
            array (
                'cast_id' => 626,
                'movie_id' => 58,
                'person_id' => 387,
                'character' => 'Draco Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            114 => 
            array (
                'cast_id' => 627,
                'movie_id' => 58,
                'person_id' => 386,
                'character' => 'Lucius Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            115 => 
            array (
                'cast_id' => 628,
                'movie_id' => 58,
                'person_id' => 451,
                'character' => 'Argus Filch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            116 => 
            array (
                'cast_id' => 629,
                'movie_id' => 58,
                'person_id' => 364,
                'character' => 'Professor Albus Dumbledore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            117 => 
            array (
                'cast_id' => 630,
                'movie_id' => 58,
                'person_id' => 365,
                'character' => 'Professor Minerva McGonagall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            118 => 
            array (
                'cast_id' => 631,
                'movie_id' => 58,
                'person_id' => 450,
                'character' => 'Nearly Headless Nick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            119 => 
            array (
                'cast_id' => 632,
                'movie_id' => 58,
                'person_id' => 369,
                'character' => 'Professor Flitwick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            120 => 
            array (
                'cast_id' => 633,
                'movie_id' => 58,
                'person_id' => 382,
                'character' => 'Cornelius Fudge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            121 => 
            array (
                'cast_id' => 634,
                'movie_id' => 59,
                'person_id' => 377,
                'character' => 'George Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            122 => 
            array (
                'cast_id' => 635,
                'movie_id' => 59,
                'person_id' => 376,
                'character' => 'Fred Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            123 => 
            array (
                'cast_id' => 636,
                'movie_id' => 59,
                'person_id' => 378,
                'character' => 'Mrs Molly Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            124 => 
            array (
                'cast_id' => 637,
                'movie_id' => 59,
                'person_id' => 379,
                'character' => 'Ginny Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            125 => 
            array (
                'cast_id' => 638,
                'movie_id' => 59,
                'person_id' => 380,
                'character' => 'Mr Arthur Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            126 => 
            array (
                'cast_id' => 639,
                'movie_id' => 59,
                'person_id' => 369,
                'character' => 'Wizard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            127 => 
            array (
                'cast_id' => 640,
                'movie_id' => 59,
                'person_id' => 451,
                'character' => 'Argus Filch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            128 => 
            array (
                'cast_id' => 641,
                'movie_id' => 59,
                'person_id' => 391,
                'character' => 'Albus Dumbledore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            129 => 
            array (
                'cast_id' => 642,
                'movie_id' => 59,
                'person_id' => 365,
                'character' => 'Professor Minerva McGonagall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            130 => 
            array (
                'cast_id' => 643,
                'movie_id' => 59,
                'person_id' => 387,
                'character' => 'Draco Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            131 => 
            array (
                'cast_id' => 644,
                'movie_id' => 59,
                'person_id' => 291,
                'character' => 'Peter Pettigrew',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            132 => 
            array (
                'cast_id' => 645,
                'movie_id' => 59,
                'person_id' => 452,
                'character' => 'Professor Lupin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            133 => 
            array (
                'cast_id' => 646,
                'movie_id' => 59,
                'person_id' => 453,
                'character' => 'Professor Sybil Trelawney',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            134 => 
            array (
                'cast_id' => 647,
                'movie_id' => 60,
                'person_id' => 382,
                'character' => 'Cornelius Fudge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            135 => 
            array (
                'cast_id' => 648,
                'movie_id' => 60,
                'person_id' => 366,
                'character' => 'Rubeus Hagrid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            136 => 
            array (
                'cast_id' => 649,
                'movie_id' => 60,
                'person_id' => 391,
                'character' => 'Albus Dumbledore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            137 => 
            array (
                'cast_id' => 650,
                'movie_id' => 60,
                'person_id' => 451,
                'character' => 'Argus Filch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            138 => 
            array (
                'cast_id' => 651,
                'movie_id' => 60,
                'person_id' => 369,
                'character' => 'Filius Flitwick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            139 => 
            array (
                'cast_id' => 652,
                'movie_id' => 60,
                'person_id' => 365,
                'character' => 'Minerva McGonagall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            140 => 
            array (
                'cast_id' => 653,
                'movie_id' => 60,
                'person_id' => 390,
                'character' => 'Professor Alastor MadEye Moody',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            141 => 
            array (
                'cast_id' => 654,
                'movie_id' => 60,
                'person_id' => 200,
                'character' => 'Sirius Black',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            142 => 
            array (
                'cast_id' => 655,
                'movie_id' => 60,
                'person_id' => 388,
                'character' => 'Lord Voldemort',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            143 => 
            array (
                'cast_id' => 656,
                'movie_id' => 61,
                'person_id' => 200,
                'character' => 'Sirius Black',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            144 => 
            array (
                'cast_id' => 657,
                'movie_id' => 61,
                'person_id' => 380,
                'character' => 'Arthur Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            145 => 
            array (
                'cast_id' => 658,
                'movie_id' => 61,
                'person_id' => 452,
                'character' => 'Remus Lupin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            146 => 
            array (
                'cast_id' => 659,
                'movie_id' => 61,
                'person_id' => 365,
                'character' => 'Minerva McGonagall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            147 => 
            array (
                'cast_id' => 660,
                'movie_id' => 61,
                'person_id' => 378,
                'character' => 'Molly Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            148 => 
            array (
                'cast_id' => 661,
                'movie_id' => 61,
                'person_id' => 374,
                'character' => 'Hermione Granger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            149 => 
            array (
                'cast_id' => 662,
                'movie_id' => 61,
                'person_id' => 373,
                'character' => 'Ron Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            150 => 
            array (
                'cast_id' => 663,
                'movie_id' => 61,
                'person_id' => 376,
                'character' => 'Fred Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            151 => 
            array (
                'cast_id' => 664,
                'movie_id' => 61,
                'person_id' => 377,
                'character' => 'George Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            152 => 
            array (
                'cast_id' => 665,
                'movie_id' => 61,
                'person_id' => 379,
                'character' => 'Ginny Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            153 => 
            array (
                'cast_id' => 666,
                'movie_id' => 61,
                'person_id' => 382,
                'character' => 'Cornelius Fudge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            154 => 
            array (
                'cast_id' => 667,
                'movie_id' => 61,
                'person_id' => 386,
                'character' => 'Lucius Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            155 => 
            array (
                'cast_id' => 668,
                'movie_id' => 61,
                'person_id' => 391,
                'character' => 'Albus Percival Wulfric Brian Dumbledore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            156 => 
            array (
                'cast_id' => 669,
                'movie_id' => 61,
                'person_id' => 387,
                'character' => 'Draco Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            157 => 
            array (
                'cast_id' => 670,
                'movie_id' => 61,
                'person_id' => 394,
                'character' => 'Luna Lovegood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            158 => 
            array (
                'cast_id' => 671,
                'movie_id' => 61,
                'person_id' => 451,
                'character' => 'Argus Filch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            159 => 
            array (
                'cast_id' => 672,
                'movie_id' => 61,
                'person_id' => 453,
                'character' => 'Sybil Trelawney',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            160 => 
            array (
                'cast_id' => 673,
                'movie_id' => 61,
                'person_id' => 369,
                'character' => 'Filius Flitwick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            161 => 
            array (
                'cast_id' => 674,
                'movie_id' => 61,
                'person_id' => 17,
                'character' => 'Bellatrix Lestrange',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            162 => 
            array (
                'cast_id' => 675,
                'movie_id' => 61,
                'person_id' => 366,
                'character' => 'Rubeus Hagrid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            163 => 
            array (
                'cast_id' => 676,
                'movie_id' => 61,
                'person_id' => 291,
                'character' => 'Peter Pettigrew',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            164 => 
            array (
                'cast_id' => 677,
                'movie_id' => 62,
                'person_id' => 376,
                'character' => 'Fred Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            165 => 
            array (
                'cast_id' => 678,
                'movie_id' => 62,
                'person_id' => 387,
                'character' => 'Draco Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            166 => 
            array (
                'cast_id' => 679,
                'movie_id' => 62,
                'person_id' => 394,
                'character' => 'Luna Lovegood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            167 => 
            array (
                'cast_id' => 680,
                'movie_id' => 62,
                'person_id' => 366,
                'character' => 'Rubeus Hagrid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            168 => 
            array (
                'cast_id' => 681,
                'movie_id' => 62,
                'person_id' => 369,
                'character' => 'Professor Filius Flitwick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            169 => 
            array (
                'cast_id' => 682,
                'movie_id' => 62,
                'person_id' => 451,
                'character' => 'Argus Filch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            170 => 
            array (
                'cast_id' => 683,
                'movie_id' => 62,
                'person_id' => 365,
                'character' => 'Professor Minerva McGonagall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            171 => 
            array (
                'cast_id' => 684,
                'movie_id' => 62,
                'person_id' => 452,
                'character' => 'Remus Lupin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            172 => 
            array (
                'cast_id' => 685,
                'movie_id' => 62,
                'person_id' => 389,
                'character' => 'Nymphadora Tonks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            173 => 
            array (
                'cast_id' => 686,
                'movie_id' => 62,
                'person_id' => 380,
                'character' => 'Arthur Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            174 => 
            array (
                'cast_id' => 687,
                'movie_id' => 62,
                'person_id' => 386,
                'character' => 'Lucius Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            175 => 
            array (
                'cast_id' => 688,
                'movie_id' => 63,
                'person_id' => 386,
                'character' => 'Lucius Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            176 => 
            array (
                'cast_id' => 689,
                'movie_id' => 63,
                'person_id' => 387,
                'character' => 'Draco Malfoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            177 => 
            array (
                'cast_id' => 690,
                'movie_id' => 63,
                'person_id' => 291,
                'character' => 'Wormtail',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            178 => 
            array (
                'cast_id' => 691,
                'movie_id' => 63,
                'person_id' => 391,
                'character' => 'Professor Albus Dumbledore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            179 => 
            array (
                'cast_id' => 692,
                'movie_id' => 63,
                'person_id' => 366,
                'character' => 'Rubeus Hagrid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            180 => 
            array (
                'cast_id' => 693,
                'movie_id' => 63,
                'person_id' => 390,
                'character' => 'Alastor MadEye Moody',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            181 => 
            array (
                'cast_id' => 694,
                'movie_id' => 63,
                'person_id' => 376,
                'character' => 'Fred Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            182 => 
            array (
                'cast_id' => 695,
                'movie_id' => 63,
                'person_id' => 377,
                'character' => 'George Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            183 => 
            array (
                'cast_id' => 696,
                'movie_id' => 63,
                'person_id' => 380,
                'character' => 'Arthur Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            184 => 
            array (
                'cast_id' => 697,
                'movie_id' => 63,
                'person_id' => 395,
                'character' => 'Bill Weasley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            185 => 
            array (
                'cast_id' => 698,
                'movie_id' => 63,
                'person_id' => 389,
                'character' => 'Nymphadora Tonks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            186 => 
            array (
                'cast_id' => 699,
                'movie_id' => 63,
                'person_id' => 452,
                'character' => 'Remus Lupin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            187 => 
            array (
                'cast_id' => 700,
                'movie_id' => 63,
                'person_id' => 27,
                'character' => 'Ollivander',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            188 => 
            array (
                'cast_id' => 701,
                'movie_id' => 63,
                'person_id' => 394,
                'character' => 'Luna Lovegood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            189 => 
            array (
                'cast_id' => 702,
                'movie_id' => 63,
                'person_id' => 56,
                'character' => 'Xenophilius Lovegood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            190 => 
            array (
                'cast_id' => 703,
                'movie_id' => 63,
                'person_id' => 375,
                'character' => 'Dobby',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            191 => 
            array (
                'cast_id' => 704,
                'movie_id' => 63,
                'person_id' => 369,
                'character' => 'Griphook',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            192 => 
            array (
                'cast_id' => 705,
                'movie_id' => 69,
                'person_id' => 421,
                'character' => 'Plutarch Heavensbee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            193 => 
            array (
                'cast_id' => 706,
                'movie_id' => 69,
                'person_id' => 424,
                'character' => 'Beetee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            194 => 
            array (
                'cast_id' => 707,
                'movie_id' => 69,
                'person_id' => 422,
                'character' => 'Finnick Odair',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            195 => 
            array (
                'cast_id' => 708,
                'movie_id' => 69,
                'person_id' => 375,
                'character' => 'Claudius Templesmith',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            196 => 
            array (
                'cast_id' => 709,
                'movie_id' => 69,
                'person_id' => 423,
                'character' => 'Johanna Mason',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            197 => 
            array (
                'cast_id' => 710,
                'movie_id' => 69,
                'person_id' => 454,
                'character' => 'Wiress',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            198 => 
            array (
                'cast_id' => 711,
                'movie_id' => 70,
                'person_id' => 455,
                'character' => 'Cressida',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            199 => 
            array (
                'cast_id' => 712,
                'movie_id' => 70,
                'person_id' => 456,
                'character' => 'Antonius',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            200 => 
            array (
                'cast_id' => 713,
                'movie_id' => 71,
                'person_id' => 457,
                'character' => 'Farber',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            201 => 
            array (
                'cast_id' => 714,
                'movie_id' => 73,
                'person_id' => 97,
                'character' => 'Narrator',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            202 => 
            array (
                'cast_id' => 715,
                'movie_id' => 73,
                'person_id' => 458,
                'character' => 'Gen Ed Fenech',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            203 => 
            array (
                'cast_id' => 716,
                'movie_id' => 75,
                'person_id' => 97,
                'character' => 'Nick Fury',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            204 => 
            array (
                'cast_id' => 717,
                'movie_id' => 76,
                'person_id' => 459,
                'character' => 'Stan Lee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            205 => 
            array (
                'cast_id' => 718,
                'movie_id' => 76,
                'person_id' => 460,
                'character' => 'Chess Roberts',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            206 => 
            array (
                'cast_id' => 719,
                'movie_id' => 75,
                'person_id' => 459,
                'character' => 'Stan Lee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            207 => 
            array (
                'cast_id' => 720,
                'movie_id' => 77,
                'person_id' => 121,
                'character' => 'Tony Stark',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            208 => 
            array (
                'cast_id' => 721,
                'movie_id' => 77,
                'person_id' => 131,
                'character' => 'Pepper Potts',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            209 => 
            array (
                'cast_id' => 722,
                'movie_id' => 77,
                'person_id' => 446,
                'character' => 'Colonel James Rhodes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            210 => 
            array (
                'cast_id' => 723,
                'movie_id' => 77,
                'person_id' => 445,
                'character' => 'Happy Hogan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            211 => 
            array (
                'cast_id' => 724,
                'movie_id' => 77,
                'person_id' => 404,
                'character' => 'Trevor Slattery',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            212 => 
            array (
                'cast_id' => 725,
                'movie_id' => 77,
                'person_id' => 132,
                'character' => 'Jarvis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            213 => 
            array (
                'cast_id' => 726,
                'movie_id' => 77,
                'person_id' => 116,
                'character' => 'Harley Keener',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            214 => 
            array (
                'cast_id' => 727,
                'movie_id' => 77,
                'person_id' => 459,
                'character' => 'Pageant Judge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            215 => 
            array (
                'cast_id' => 728,
                'movie_id' => 77,
                'person_id' => 123,
                'character' => 'Bruce Banner',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            216 => 
            array (
                'cast_id' => 729,
                'movie_id' => 77,
                'person_id' => 461,
                'character' => 'Aldrich Killian',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            217 => 
            array (
                'cast_id' => 730,
                'movie_id' => 77,
                'person_id' => 462,
                'character' => 'Maya Hansen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            218 => 
            array (
                'cast_id' => 731,
                'movie_id' => 77,
                'person_id' => 463,
                'character' => 'President Ellis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            219 => 
            array (
                'cast_id' => 732,
                'movie_id' => 77,
                'person_id' => 464,
                'character' => 'Vice President Rodriguez',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            220 => 
            array (
                'cast_id' => 733,
                'movie_id' => 78,
                'person_id' => 407,
                'character' => 'Mindy Macready  HitGirl',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            221 => 
            array (
                'cast_id' => 734,
                'movie_id' => 78,
                'person_id' => 226,
                'character' => 'Damon Macready  Big Daddy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            222 => 
            array (
                'cast_id' => 735,
                'movie_id' => 78,
                'person_id' => 255,
                'character' => 'Detective Gigante',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            223 => 
            array (
                'cast_id' => 736,
                'movie_id' => 78,
                'person_id' => 465,
                'character' => 'Dave Lizewski',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            224 => 
            array (
                'cast_id' => 737,
                'movie_id' => 78,
                'person_id' => 466,
                'character' => 'Chris D&#039;Amico',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            225 => 
            array (
                'cast_id' => 738,
                'movie_id' => 78,
                'person_id' => 467,
                'character' => 'Frank D&#039;Amico',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            226 => 
            array (
                'cast_id' => 739,
                'movie_id' => 78,
                'person_id' => 468,
                'character' => 'Cody',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            227 => 
            array (
                'cast_id' => 740,
                'movie_id' => 78,
                'person_id' => 469,
                'character' => 'Lobby Goon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            228 => 
            array (
                'cast_id' => 741,
                'movie_id' => 78,
                'person_id' => 470,
                'character' => 'Mrs Lizewski',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            229 => 
            array (
                'cast_id' => 742,
                'movie_id' => 79,
                'person_id' => 218,
                'character' => 'Joe',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            230 => 
            array (
                'cast_id' => 743,
                'movie_id' => 79,
                'person_id' => 67,
                'character' => 'Old Joe',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            231 => 
            array (
                'cast_id' => 744,
                'movie_id' => 79,
                'person_id' => 471,
                'character' => 'Sara',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            232 => 
            array (
                'cast_id' => 745,
                'movie_id' => 79,
                'person_id' => 472,
                'character' => 'Seth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            233 => 
            array (
                'cast_id' => 746,
                'movie_id' => 79,
                'person_id' => 473,
                'character' => 'Abe',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            234 => 
            array (
                'cast_id' => 747,
                'movie_id' => 80,
                'person_id' => 13,
                'character' => 'Sam',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            235 => 
            array (
                'cast_id' => 748,
                'movie_id' => 80,
                'person_id' => 28,
                'character' => 'Bilbo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            236 => 
            array (
                'cast_id' => 749,
                'movie_id' => 80,
                'person_id' => 409,
                'character' => 'Saruman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            237 => 
            array (
                'cast_id' => 750,
                'movie_id' => 80,
                'person_id' => 267,
                'character' => 'Aragorn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            238 => 
            array (
                'cast_id' => 751,
                'movie_id' => 80,
                'person_id' => 74,
                'character' => 'Elrond',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            239 => 
            array (
                'cast_id' => 752,
                'movie_id' => 80,
                'person_id' => 169,
                'character' => 'Frodo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            240 => 
            array (
                'cast_id' => 753,
                'movie_id' => 80,
                'person_id' => 474,
                'character' => 'Boromir',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            241 => 
            array (
                'cast_id' => 754,
                'movie_id' => 80,
                'person_id' => 475,
                'character' => 'Galadriel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            242 => 
            array (
                'cast_id' => 755,
                'movie_id' => 80,
                'person_id' => 476,
                'character' => 'Legolas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            243 => 
            array (
                'cast_id' => 756,
                'movie_id' => 80,
                'person_id' => 477,
                'character' => 'Pippin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            244 => 
            array (
                'cast_id' => 757,
                'movie_id' => 80,
                'person_id' => 478,
                'character' => 'Gollum',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            245 => 
            array (
                'cast_id' => 758,
                'movie_id' => 80,
                'person_id' => 479,
                'character' => 'Gandalf',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            246 => 
            array (
                'cast_id' => 759,
                'movie_id' => 80,
                'person_id' => 480,
                'character' => 'Merry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            247 => 
            array (
                'cast_id' => 760,
                'movie_id' => 80,
                'person_id' => 481,
                'character' => 'Gimli',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            248 => 
            array (
                'cast_id' => 761,
                'movie_id' => 80,
                'person_id' => 482,
                'character' => 'Arwen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            249 => 
            array (
                'cast_id' => 762,
                'movie_id' => 80,
                'person_id' => 483,
                'character' => 'Albert Dreary',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            250 => 
            array (
                'cast_id' => 763,
                'movie_id' => 81,
                'person_id' => 13,
                'character' => 'Sam',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            251 => 
            array (
                'cast_id' => 764,
                'movie_id' => 81,
                'person_id' => 475,
                'character' => 'Galadriel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            252 => 
            array (
                'cast_id' => 765,
                'movie_id' => 81,
                'person_id' => 476,
                'character' => 'Legolas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            253 => 
            array (
                'cast_id' => 766,
                'movie_id' => 81,
                'person_id' => 477,
                'character' => 'Pippin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            254 => 
            array (
                'cast_id' => 767,
                'movie_id' => 81,
                'person_id' => 50,
                'character' => 'Wormtongue',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            255 => 
            array (
                'cast_id' => 768,
                'movie_id' => 81,
                'person_id' => 139,
                'character' => 'Theoden',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            256 => 
            array (
                'cast_id' => 769,
                'movie_id' => 81,
                'person_id' => 409,
                'character' => 'Saruman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            257 => 
            array (
                'cast_id' => 770,
                'movie_id' => 81,
                'person_id' => 479,
                'character' => 'Gandalf',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            258 => 
            array (
                'cast_id' => 771,
                'movie_id' => 81,
                'person_id' => 480,
                'character' => 'Merry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            259 => 
            array (
                'cast_id' => 772,
                'movie_id' => 81,
                'person_id' => 267,
                'character' => 'Aragorn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            260 => 
            array (
                'cast_id' => 773,
                'movie_id' => 81,
                'person_id' => 481,
                'character' => 'Gimli  Voice of Treebeard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            261 => 
            array (
                'cast_id' => 774,
                'movie_id' => 81,
                'person_id' => 478,
                'character' => 'Gollum',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            262 => 
            array (
                'cast_id' => 775,
                'movie_id' => 81,
                'person_id' => 482,
                'character' => 'Arwen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            263 => 
            array (
                'cast_id' => 776,
                'movie_id' => 81,
                'person_id' => 188,
                'character' => 'Eomer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            264 => 
            array (
                'cast_id' => 777,
                'movie_id' => 81,
                'person_id' => 74,
                'character' => 'Elrond',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            265 => 
            array (
                'cast_id' => 778,
                'movie_id' => 81,
                'person_id' => 169,
                'character' => 'Frodo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            266 => 
            array (
                'cast_id' => 779,
                'movie_id' => 81,
                'person_id' => 474,
                'character' => 'Boromir',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            267 => 
            array (
                'cast_id' => 780,
                'movie_id' => 81,
                'person_id' => 483,
                'character' => 'Spearthrowing Rohan Soldier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            268 => 
            array (
                'cast_id' => 781,
                'movie_id' => 81,
                'person_id' => 484,
                'character' => 'Eowyn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            269 => 
            array (
                'cast_id' => 782,
                'movie_id' => 81,
                'person_id' => 485,
                'character' => 'Faramir',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            270 => 
            array (
                'cast_id' => 783,
                'movie_id' => 82,
                'person_id' => 13,
                'character' => 'Sam',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            271 => 
            array (
                'cast_id' => 784,
                'movie_id' => 82,
                'person_id' => 474,
                'character' => 'Boromir',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            272 => 
            array (
                'cast_id' => 785,
                'movie_id' => 82,
                'person_id' => 475,
                'character' => 'Galadriel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            273 => 
            array (
                'cast_id' => 786,
                'movie_id' => 82,
                'person_id' => 476,
                'character' => 'Legolas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            274 => 
            array (
                'cast_id' => 787,
                'movie_id' => 82,
                'person_id' => 477,
                'character' => 'Pippin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            275 => 
            array (
                'cast_id' => 788,
                'movie_id' => 82,
                'person_id' => 139,
                'character' => 'Theoden',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            276 => 
            array (
                'cast_id' => 789,
                'movie_id' => 82,
                'person_id' => 28,
                'character' => 'Bilbo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            277 => 
            array (
                'cast_id' => 790,
                'movie_id' => 82,
                'person_id' => 479,
                'character' => 'Gandalf',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            278 => 
            array (
                'cast_id' => 791,
                'movie_id' => 82,
                'person_id' => 480,
                'character' => 'Merry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            279 => 
            array (
                'cast_id' => 792,
                'movie_id' => 82,
                'person_id' => 267,
                'character' => 'Aragorn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            280 => 
            array (
                'cast_id' => 793,
                'movie_id' => 82,
                'person_id' => 484,
                'character' => 'Eowyn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            281 => 
            array (
                'cast_id' => 794,
                'movie_id' => 82,
                'person_id' => 481,
                'character' => 'Gimli',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            282 => 
            array (
                'cast_id' => 795,
                'movie_id' => 82,
                'person_id' => 478,
                'character' => 'Gollum  Smeagol',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            283 => 
            array (
                'cast_id' => 796,
                'movie_id' => 82,
                'person_id' => 482,
                'character' => 'Arwen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            284 => 
            array (
                'cast_id' => 797,
                'movie_id' => 82,
                'person_id' => 188,
                'character' => 'Eomer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            285 => 
            array (
                'cast_id' => 798,
                'movie_id' => 82,
                'person_id' => 74,
                'character' => 'Elrond',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            286 => 
            array (
                'cast_id' => 799,
                'movie_id' => 82,
                'person_id' => 485,
                'character' => 'Faramir',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            287 => 
            array (
                'cast_id' => 800,
                'movie_id' => 82,
                'person_id' => 169,
                'character' => 'Frodo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            288 => 
            array (
                'cast_id' => 801,
                'movie_id' => 82,
                'person_id' => 50,
                'character' => 'Wormtongue',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            289 => 
            array (
                'cast_id' => 802,
                'movie_id' => 82,
                'person_id' => 409,
                'character' => 'Saruman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            290 => 
            array (
                'cast_id' => 803,
                'movie_id' => 82,
                'person_id' => 483,
                'character' => 'Corsair Bosun',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            291 => 
            array (
                'cast_id' => 804,
                'movie_id' => 83,
                'person_id' => 329,
                'character' => 'Lois Lane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            292 => 
            array (
                'cast_id' => 805,
                'movie_id' => 83,
                'person_id' => 231,
                'character' => 'General Zod',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            293 => 
            array (
                'cast_id' => 806,
                'movie_id' => 83,
                'person_id' => 104,
                'character' => 'Dr Emil Hamilton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            294 => 
            array (
                'cast_id' => 807,
                'movie_id' => 83,
                'person_id' => 71,
                'character' => 'Perry White',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            295 => 
            array (
                'cast_id' => 808,
                'movie_id' => 83,
                'person_id' => 278,
                'character' => 'Steve Lombard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            296 => 
            array (
                'cast_id' => 809,
                'movie_id' => 83,
                'person_id' => 486,
                'character' => 'Clark Kent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            297 => 
            array (
                'cast_id' => 810,
                'movie_id' => 83,
                'person_id' => 487,
                'character' => 'Martha Kent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            298 => 
            array (
                'cast_id' => 811,
                'movie_id' => 83,
                'person_id' => 488,
                'character' => 'Jor-El',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            299 => 
            array (
                'cast_id' => 812,
                'movie_id' => 83,
                'person_id' => 489,
                'character' => 'Colonel Nathan Hardy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            300 => 
            array (
                'cast_id' => 813,
                'movie_id' => 83,
                'person_id' => 490,
                'character' => 'Jonathan Kent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            301 => 
            array (
                'cast_id' => 814,
                'movie_id' => 84,
                'person_id' => 426,
                'character' => 'Jay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            302 => 
            array (
                'cast_id' => 815,
                'movie_id' => 84,
                'person_id' => 370,
                'character' => 'Alien Son',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            303 => 
            array (
                'cast_id' => 818,
                'movie_id' => 84,
                'person_id' => 491,
                'character' => 'Kay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            304 => 
            array (
                'cast_id' => 819,
                'movie_id' => 84,
                'person_id' => 492,
                'character' => 'Laurel Weaver',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            305 => 
            array (
                'cast_id' => 820,
                'movie_id' => 84,
                'person_id' => 88,
                'character' => 'Alien on TV Monitor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            306 => 
            array (
                'cast_id' => 821,
                'movie_id' => 84,
                'person_id' => 105,
                'character' => 'Alien on TV Monitor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            307 => 
            array (
                'cast_id' => 822,
                'movie_id' => 84,
                'person_id' => 115,
                'character' => 'Edgar',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            308 => 
            array (
                'cast_id' => 823,
                'movie_id' => 84,
                'person_id' => 493,
                'character' => 'Zed',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            309 => 
            array (
                'cast_id' => 824,
                'movie_id' => 84,
                'person_id' => 494,
                'character' => 'Jeebs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            310 => 
            array (
                'cast_id' => 825,
                'movie_id' => 84,
                'person_id' => 495,
                'character' => 'Beatrice',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            311 => 
            array (
                'cast_id' => 826,
                'movie_id' => 84,
                'person_id' => 496,
                'character' => 'Morgue Attendant',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            312 => 
            array (
                'cast_id' => 827,
                'movie_id' => 85,
                'person_id' => 491,
                'character' => 'Kay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            313 => 
            array (
                'cast_id' => 828,
                'movie_id' => 85,
                'person_id' => 426,
                'character' => 'Jay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            314 => 
            array (
                'cast_id' => 829,
                'movie_id' => 85,
                'person_id' => 493,
                'character' => 'Zed',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            315 => 
            array (
                'cast_id' => 830,
                'movie_id' => 85,
                'person_id' => 494,
                'character' => 'Jack Jeebs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            316 => 
            array (
                'cast_id' => 831,
                'movie_id' => 85,
                'person_id' => 347,
                'character' => 'Agent Tee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            317 => 
            array (
                'cast_id' => 832,
                'movie_id' => 85,
                'person_id' => 496,
                'character' => 'Newton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            318 => 
            array (
                'cast_id' => 833,
                'movie_id' => 85,
                'person_id' => 497,
                'character' => 'Serleena',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            319 => 
            array (
                'cast_id' => 834,
                'movie_id' => 85,
                'person_id' => 498,
                'character' => 'Scrad  Charlie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            320 => 
            array (
                'cast_id' => 835,
                'movie_id' => 85,
                'person_id' => 499,
                'character' => 'Laura Vasquez',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            321 => 
            array (
                'cast_id' => 836,
                'movie_id' => 86,
                'person_id' => 426,
                'character' => 'Agent J',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            322 => 
            array (
                'cast_id' => 837,
                'movie_id' => 86,
                'person_id' => 491,
                'character' => 'Agent K',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            323 => 
            array (
                'cast_id' => 838,
                'movie_id' => 86,
                'person_id' => 453,
                'character' => 'Agent O',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            324 => 
            array (
                'cast_id' => 839,
                'movie_id' => 86,
                'person_id' => 65,
                'character' => 'Alien on TV Monitors',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            325 => 
            array (
                'cast_id' => 840,
                'movie_id' => 86,
                'person_id' => 282,
                'character' => 'Party Guest',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            326 => 
            array (
                'cast_id' => 841,
                'movie_id' => 86,
                'person_id' => 494,
                'character' => '1969 Newsstand Vendor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            327 => 
            array (
                'cast_id' => 842,
                'movie_id' => 86,
                'person_id' => 493,
                'character' => 'LargeHeaded Alien at Funeral',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            328 => 
            array (
                'cast_id' => 843,
                'movie_id' => 86,
                'person_id' => 500,
                'character' => 'Young Agent K',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            329 => 
            array (
                'cast_id' => 844,
                'movie_id' => 86,
                'person_id' => 501,
                'character' => 'Boris The Animal',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            330 => 
            array (
                'cast_id' => 845,
                'movie_id' => 86,
                'person_id' => 502,
                'character' => 'Griffin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            331 => 
            array (
                'cast_id' => 846,
                'movie_id' => 86,
                'person_id' => 503,
                'character' => 'Young Agent O',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            332 => 
            array (
                'cast_id' => 847,
                'movie_id' => 86,
                'person_id' => 504,
                'character' => 'Andy Warhol',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            333 => 
            array (
                'cast_id' => 848,
                'movie_id' => 87,
                'person_id' => 223,
                'character' => 'Jacques Mesrine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            334 => 
            array (
                'cast_id' => 849,
                'movie_id' => 87,
                'person_id' => 505,
                'character' => 'Jeanne Schneider',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            335 => 
            array (
                'cast_id' => 850,
                'movie_id' => 87,
                'person_id' => 506,
                'character' => 'Guido',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            336 => 
            array (
                'cast_id' => 851,
                'movie_id' => 88,
                'person_id' => 418,
                'character' => 'Herself',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            337 => 
            array (
                'cast_id' => 852,
                'movie_id' => 88,
                'person_id' => 218,
                'character' => 'Himself',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            338 => 
            array (
                'cast_id' => 853,
                'movie_id' => 88,
                'person_id' => 412,
                'character' => 'Himself',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            339 => 
            array (
                'cast_id' => 854,
                'movie_id' => 88,
                'person_id' => 71,
                'character' => 'Himself',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            340 => 
            array (
                'cast_id' => 855,
                'movie_id' => 88,
                'person_id' => 160,
                'character' => 'Herself',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            341 => 
            array (
                'cast_id' => 856,
                'movie_id' => 88,
                'person_id' => 507,
                'character' => 'Floyd Pepper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            342 => 
            array (
                'cast_id' => 857,
                'movie_id' => 88,
                'person_id' => 508,
                'character' => 'Fred',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            343 => 
            array (
                'cast_id' => 858,
                'movie_id' => 89,
                'person_id' => 509,
                'character' => 'Ofelia',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            344 => 
            array (
                'cast_id' => 859,
                'movie_id' => 89,
                'person_id' => 510,
                'character' => 'Vidal',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            345 => 
            array (
                'cast_id' => 860,
                'movie_id' => 89,
                'person_id' => 510,
                'character' => 'Vidal',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            346 => 
            array (
                'cast_id' => 861,
                'movie_id' => 89,
                'person_id' => 511,
                'character' => 'Fauno  Pale Man',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            347 => 
            array (
                'cast_id' => 862,
                'movie_id' => 90,
                'person_id' => 504,
                'character' => 'Haggard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            348 => 
            array (
                'cast_id' => 864,
                'movie_id' => 90,
                'person_id' => 512,
                'character' => 'Graeme Willy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            349 => 
            array (
                'cast_id' => 865,
                'movie_id' => 90,
                'person_id' => 513,
                'character' => 'Clive Gollings',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            350 => 
            array (
                'cast_id' => 866,
                'movie_id' => 90,
                'person_id' => 514,
                'character' => 'Adam Shadowchild',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            351 => 
            array (
                'cast_id' => 867,
                'movie_id' => 90,
                'person_id' => 515,
                'character' => 'Pat Stevens',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            352 => 
            array (
                'cast_id' => 868,
                'movie_id' => 90,
                'person_id' => 516,
                'character' => 'Paul',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            353 => 
            array (
                'cast_id' => 869,
                'movie_id' => 90,
                'person_id' => 517,
                'character' => 'Agent Zoil',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            354 => 
            array (
                'cast_id' => 870,
                'movie_id' => 90,
                'person_id' => 518,
                'character' => 'Ruth Buggs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            355 => 
            array (
                'cast_id' => 871,
                'movie_id' => 90,
                'person_id' => 519,
                'character' => 'Moses Buggs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            356 => 
            array (
                'cast_id' => 872,
                'movie_id' => 92,
                'person_id' => 478,
                'character' => 'Caesar',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            357 => 
            array (
                'cast_id' => 873,
                'movie_id' => 92,
                'person_id' => 181,
                'character' => 'John Landon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            358 => 
            array (
                'cast_id' => 874,
                'movie_id' => 92,
                'person_id' => 387,
                'character' => 'Dodge Landon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            359 => 
            array (
                'cast_id' => 875,
                'movie_id' => 92,
                'person_id' => 520,
                'character' => 'Caroline Aranha',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            360 => 
            array (
                'cast_id' => 876,
                'movie_id' => 92,
                'person_id' => 521,
                'character' => 'Charles Rodman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            361 => 
            array (
                'cast_id' => 877,
                'movie_id' => 92,
                'person_id' => 522,
                'character' => 'Steven Jacobs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            362 => 
            array (
                'cast_id' => 878,
                'movie_id' => 92,
                'person_id' => 523,
                'character' => 'Robert Franklin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            363 => 
            array (
                'cast_id' => 879,
                'movie_id' => 92,
                'person_id' => 524,
                'character' => 'Will Rodman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            364 => 
            array (
                'cast_id' => 880,
                'movie_id' => 93,
                'person_id' => 478,
                'character' => 'Caesar',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            365 => 
            array (
                'cast_id' => 881,
                'movie_id' => 93,
                'person_id' => 200,
                'character' => 'Dreyfus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            366 => 
            array (
                'cast_id' => 882,
                'movie_id' => 93,
                'person_id' => 119,
                'character' => 'Cornelia',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            367 => 
            array (
                'cast_id' => 883,
                'movie_id' => 93,
                'person_id' => 525,
                'character' => 'Malcolm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            368 => 
            array (
                'cast_id' => 884,
                'movie_id' => 93,
                'person_id' => 526,
                'character' => 'Ellie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            369 => 
            array (
                'cast_id' => 885,
                'movie_id' => 93,
                'person_id' => 527,
                'character' => 'Koba',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            370 => 
            array (
                'cast_id' => 886,
                'movie_id' => 94,
                'person_id' => 528,
                'character' => 'Rocky Balboa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            371 => 
            array (
                'cast_id' => 887,
                'movie_id' => 94,
                'person_id' => 529,
                'character' => 'Paulie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            372 => 
            array (
                'cast_id' => 888,
                'movie_id' => 94,
                'person_id' => 530,
                'character' => 'Mason The Line Dixon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            373 => 
            array (
                'cast_id' => 889,
                'movie_id' => 94,
                'person_id' => 531,
                'character' => 'Marie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            374 => 
            array (
                'cast_id' => 890,
                'movie_id' => 94,
                'person_id' => 532,
                'character' => 'Robert Balboa Jr',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            375 => 
            array (
                'cast_id' => 891,
                'movie_id' => 95,
                'person_id' => 355,
                'character' => 'Private Caparzo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            376 => 
            array (
                'cast_id' => 892,
                'movie_id' => 95,
                'person_id' => 155,
                'character' => 'T4 Medic Wade',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            377 => 
            array (
                'cast_id' => 893,
                'movie_id' => 95,
                'person_id' => 177,
                'character' => 'Private Ryan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            378 => 
            array (
                'cast_id' => 894,
                'movie_id' => 95,
                'person_id' => 146,
                'character' => 'War Department Colonel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            379 => 
            array (
                'cast_id' => 895,
                'movie_id' => 95,
                'person_id' => 533,
                'character' => 'Captain Miller',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            380 => 
            array (
                'cast_id' => 896,
                'movie_id' => 95,
                'person_id' => 534,
                'character' => 'Sergeant Horvath',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            381 => 
            array (
                'cast_id' => 897,
                'movie_id' => 95,
                'person_id' => 535,
                'character' => 'Private Reiben',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            382 => 
            array (
                'cast_id' => 898,
                'movie_id' => 95,
                'person_id' => 536,
                'character' => 'Corporal Upham',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            383 => 
            array (
                'cast_id' => 899,
                'movie_id' => 95,
                'person_id' => 537,
                'character' => 'Private Jackson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            384 => 
            array (
                'cast_id' => 900,
                'movie_id' => 95,
                'person_id' => 538,
                'character' => 'Private Mellish',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            385 => 
            array (
                'cast_id' => 901,
                'movie_id' => 95,
                'person_id' => 539,
                'character' => 'Captain Hamill',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            386 => 
            array (
                'cast_id' => 902,
                'movie_id' => 95,
                'person_id' => 540,
                'character' => 'Sergeant Hill',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            387 => 
            array (
                'cast_id' => 903,
                'movie_id' => 95,
                'person_id' => 541,
                'character' => 'Lieutenant Colonel Anderson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            388 => 
            array (
                'cast_id' => 904,
                'movie_id' => 95,
                'person_id' => 542,
                'character' => 'Minnesota Ryan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            389 => 
            array (
                'cast_id' => 905,
                'movie_id' => 96,
                'person_id' => 542,
                'character' => 'Mal',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            390 => 
            array (
                'cast_id' => 906,
                'movie_id' => 96,
                'person_id' => 428,
                'character' => 'Wash',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            391 => 
            array (
                'cast_id' => 907,
                'movie_id' => 96,
                'person_id' => 53,
                'character' => 'Trade Agent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            392 => 
            array (
                'cast_id' => 908,
                'movie_id' => 96,
                'person_id' => 543,
                'character' => 'Zo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            393 => 
            array (
                'cast_id' => 909,
                'movie_id' => 96,
                'person_id' => 544,
                'character' => 'Inara',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            394 => 
            array (
                'cast_id' => 910,
                'movie_id' => 96,
                'person_id' => 545,
                'character' => 'Jayne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            395 => 
            array (
                'cast_id' => 911,
                'movie_id' => 96,
                'person_id' => 546,
                'character' => 'Kaylee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            396 => 
            array (
                'cast_id' => 912,
                'movie_id' => 96,
                'person_id' => 547,
                'character' => 'Simon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            397 => 
            array (
                'cast_id' => 913,
                'movie_id' => 96,
                'person_id' => 548,
                'character' => 'River',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            398 => 
            array (
                'cast_id' => 914,
                'movie_id' => 96,
                'person_id' => 549,
                'character' => 'Shepherd Derrial Book',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            399 => 
            array (
                'cast_id' => 915,
                'movie_id' => 96,
                'person_id' => 550,
                'character' => 'The Operative',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            400 => 
            array (
                'cast_id' => 916,
                'movie_id' => 97,
                'person_id' => 424,
                'character' => 'Dr Rutledge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            401 => 
            array (
                'cast_id' => 917,
                'movie_id' => 97,
                'person_id' => 551,
                'character' => 'Colter Stevens',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            402 => 
            array (
                'cast_id' => 918,
                'movie_id' => 97,
                'person_id' => 552,
                'character' => 'Christina Warren',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            403 => 
            array (
                'cast_id' => 919,
                'movie_id' => 97,
                'person_id' => 553,
                'character' => 'Colleen Goodwin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            404 => 
            array (
                'cast_id' => 920,
                'movie_id' => 97,
                'person_id' => 554,
                'character' => 'Derek Frost',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            405 => 
            array (
                'cast_id' => 921,
                'movie_id' => 97,
                'person_id' => 555,
                'character' => 'Colters Father',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            406 => 
            array (
                'cast_id' => 922,
                'movie_id' => 98,
                'person_id' => 520,
                'character' => 'Older Latika',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            407 => 
            array (
                'cast_id' => 923,
                'movie_id' => 98,
                'person_id' => 271,
                'character' => 'Police Inspector',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            408 => 
            array (
                'cast_id' => 924,
                'movie_id' => 98,
                'person_id' => 556,
                'character' => 'Older Jamal',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            409 => 
            array (
                'cast_id' => 925,
                'movie_id' => 98,
                'person_id' => 557,
                'character' => 'Prem',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            410 => 
            array (
                'cast_id' => 926,
                'movie_id' => 99,
                'person_id' => 558,
                'character' => 'Gargamel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            411 => 
            array (
                'cast_id' => 927,
                'movie_id' => 99,
                'person_id' => 559,
                'character' => 'Patrick Winslow',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            412 => 
            array (
                'cast_id' => 928,
                'movie_id' => 99,
                'person_id' => 560,
                'character' => 'Odile',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            413 => 
            array (
                'cast_id' => 929,
                'movie_id' => 99,
                'person_id' => 561,
                'character' => 'Papa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            414 => 
            array (
                'cast_id' => 930,
                'movie_id' => 99,
                'person_id' => 562,
                'character' => 'Gutsy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            415 => 
            array (
                'cast_id' => 931,
                'movie_id' => 99,
                'person_id' => 563,
                'character' => 'Smurfette',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            416 => 
            array (
                'cast_id' => 932,
                'movie_id' => 99,
                'person_id' => 564,
                'character' => 'Clumsy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            417 => 
            array (
                'cast_id' => 933,
                'movie_id' => 99,
                'person_id' => 565,
                'character' => 'Vanity',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            418 => 
            array (
                'cast_id' => 934,
                'movie_id' => 99,
                'person_id' => 566,
                'character' => 'Jokey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            419 => 
            array (
                'cast_id' => 935,
                'movie_id' => 99,
                'person_id' => 567,
                'character' => 'Azrael',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            420 => 
            array (
                'cast_id' => 936,
                'movie_id' => 100,
                'person_id' => 430,
                'character' => 'Pike',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            421 => 
            array (
                'cast_id' => 937,
                'movie_id' => 100,
                'person_id' => 188,
                'character' => 'Bones',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            422 => 
            array (
                'cast_id' => 938,
                'movie_id' => 100,
                'person_id' => 152,
                'character' => 'Uhura',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            423 => 
            array (
                'cast_id' => 939,
                'movie_id' => 100,
                'person_id' => 512,
                'character' => 'Scotty',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            424 => 
            array (
                'cast_id' => 940,
                'movie_id' => 100,
                'person_id' => 564,
                'character' => 'Chekov',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            425 => 
            array (
                'cast_id' => 941,
                'movie_id' => 100,
                'person_id' => 45,
                'character' => 'Amanda Grayson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            426 => 
            array (
                'cast_id' => 942,
                'movie_id' => 100,
                'person_id' => 124,
                'character' => 'George Kirk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            427 => 
            array (
                'cast_id' => 943,
                'movie_id' => 100,
                'person_id' => 568,
                'character' => 'Kirk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            428 => 
            array (
                'cast_id' => 944,
                'movie_id' => 100,
                'person_id' => 569,
                'character' => 'Spock',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            429 => 
            array (
                'cast_id' => 945,
                'movie_id' => 100,
                'person_id' => 570,
                'character' => 'Spock',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            430 => 
            array (
                'cast_id' => 946,
                'movie_id' => 100,
                'person_id' => 571,
                'character' => 'Nero',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            431 => 
            array (
                'cast_id' => 947,
                'movie_id' => 100,
                'person_id' => 572,
                'character' => 'Sulu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            432 => 
            array (
                'cast_id' => 948,
                'movie_id' => 100,
                'person_id' => 573,
                'character' => 'Sarek',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            433 => 
            array (
                'cast_id' => 949,
                'movie_id' => 100,
                'person_id' => 574,
                'character' => 'Stepdad',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            434 => 
            array (
                'cast_id' => 950,
                'movie_id' => 101,
                'person_id' => 568,
                'character' => 'Kirk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            435 => 
            array (
                'cast_id' => 951,
                'movie_id' => 101,
                'person_id' => 569,
                'character' => 'Spock',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            436 => 
            array (
                'cast_id' => 952,
                'movie_id' => 101,
                'person_id' => 152,
                'character' => 'Uhura',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            437 => 
            array (
                'cast_id' => 953,
                'movie_id' => 101,
                'person_id' => 188,
                'character' => 'Bones',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            438 => 
            array (
                'cast_id' => 954,
                'movie_id' => 101,
                'person_id' => 512,
                'character' => 'Scotty',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            439 => 
            array (
                'cast_id' => 955,
                'movie_id' => 101,
                'person_id' => 572,
                'character' => 'Sulu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            440 => 
            array (
                'cast_id' => 956,
                'movie_id' => 101,
                'person_id' => 564,
                'character' => 'Chekov',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            441 => 
            array (
                'cast_id' => 957,
                'movie_id' => 101,
                'person_id' => 430,
                'character' => 'Pike',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            442 => 
            array (
                'cast_id' => 958,
                'movie_id' => 101,
                'person_id' => 503,
                'character' => 'Carol',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            443 => 
            array (
                'cast_id' => 959,
                'movie_id' => 101,
                'person_id' => 124,
                'character' => 'George Kirk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            444 => 
            array (
                'cast_id' => 961,
                'movie_id' => 101,
                'person_id' => 570,
                'character' => 'Spock',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            445 => 
            array (
                'cast_id' => 962,
                'movie_id' => 101,
                'person_id' => 575,
                'character' => 'Khan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            446 => 
            array (
                'cast_id' => 963,
                'movie_id' => 101,
                'person_id' => 576,
                'character' => 'Admiral Marcus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            447 => 
            array (
                'cast_id' => 964,
                'movie_id' => 101,
                'person_id' => 577,
                'character' => 'Rima Harewood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            448 => 
            array (
                'cast_id' => 965,
                'movie_id' => 102,
                'person_id' => 86,
                'character' => 'Darth Vader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            449 => 
            array (
                'cast_id' => 966,
                'movie_id' => 103,
                'person_id' => 369,
                'character' => 'Wicket',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            450 => 
            array (
                'cast_id' => 967,
                'movie_id' => 103,
                'person_id' => 306,
                'character' => 'Boba Fett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            451 => 
            array (
                'cast_id' => 968,
                'movie_id' => 103,
                'person_id' => 578,
                'character' => 'The Emperor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            452 => 
            array (
                'cast_id' => 969,
                'movie_id' => 104,
                'person_id' => 198,
                'character' => 'QuiGon Jinn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            453 => 
            array (
                'cast_id' => 970,
                'movie_id' => 104,
                'person_id' => 432,
                'character' => 'ObiWan Kenobi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            454 => 
            array (
                'cast_id' => 971,
                'movie_id' => 104,
                'person_id' => 221,
                'character' => 'Queen Amidala  Padm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            455 => 
            array (
                'cast_id' => 972,
                'movie_id' => 104,
                'person_id' => 578,
                'character' => 'Senator Palpatine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            456 => 
            array (
                'cast_id' => 973,
                'movie_id' => 104,
                'person_id' => 83,
                'character' => 'C3PO',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            457 => 
            array (
                'cast_id' => 974,
                'movie_id' => 104,
                'person_id' => 84,
                'character' => 'R2D2',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            458 => 
            array (
                'cast_id' => 975,
                'movie_id' => 104,
                'person_id' => 305,
                'character' => 'Yoda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            459 => 
            array (
                'cast_id' => 976,
                'movie_id' => 104,
                'person_id' => 345,
                'character' => 'Chancellor Valorum',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            460 => 
            array (
                'cast_id' => 977,
                'movie_id' => 104,
                'person_id' => 369,
                'character' => 'Pod Race Spectator',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            461 => 
            array (
                'cast_id' => 978,
                'movie_id' => 104,
                'person_id' => 97,
                'character' => 'Mace Windu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            462 => 
            array (
                'cast_id' => 979,
                'movie_id' => 104,
                'person_id' => 363,
            'character' => 'Darth Maul (voive)',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            463 => 
            array (
                'cast_id' => 980,
                'movie_id' => 104,
                'person_id' => 579,
                'character' => 'Anakin Skywalker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            464 => 
            array (
                'cast_id' => 981,
                'movie_id' => 104,
                'person_id' => 580,
                'character' => 'Shmi Skywalker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            465 => 
            array (
                'cast_id' => 982,
                'movie_id' => 104,
                'person_id' => 581,
                'character' => 'Captain Panaka',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            466 => 
            array (
                'cast_id' => 983,
                'movie_id' => 104,
                'person_id' => 582,
                'character' => 'Jar Jar Binks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            467 => 
            array (
                'cast_id' => 984,
                'movie_id' => 104,
                'person_id' => 583,
                'character' => 'Boss Nass',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            468 => 
            array (
                'cast_id' => 985,
                'movie_id' => 104,
                'person_id' => 584,
                'character' => 'Darth Maul',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            469 => 
            array (
                'cast_id' => 986,
                'movie_id' => 104,
                'person_id' => 585,
                'character' => 'Sab',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            470 => 
            array (
                'cast_id' => 987,
                'movie_id' => 105,
                'person_id' => 432,
                'character' => 'Obi-Wan Kenobi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            471 => 
            array (
                'cast_id' => 988,
                'movie_id' => 105,
                'person_id' => 221,
                'character' => 'Padme',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            472 => 
            array (
                'cast_id' => 989,
                'movie_id' => 105,
                'person_id' => 409,
                'character' => 'Count Dooku',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            473 => 
            array (
                'cast_id' => 990,
                'movie_id' => 105,
                'person_id' => 97,
                'character' => 'Mace Windu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            474 => 
            array (
                'cast_id' => 991,
                'movie_id' => 105,
                'person_id' => 305,
                'character' => 'Yoda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            475 => 
            array (
                'cast_id' => 992,
                'movie_id' => 105,
                'person_id' => 578,
                'character' => 'Supreme Chancellor Palpatine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            476 => 
            array (
                'cast_id' => 993,
                'movie_id' => 105,
                'person_id' => 580,
                'character' => 'Shmi Skywalker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            477 => 
            array (
                'cast_id' => 994,
                'movie_id' => 105,
                'person_id' => 582,
                'character' => 'Jar Jar Binks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            478 => 
            array (
                'cast_id' => 995,
                'movie_id' => 105,
                'person_id' => 83,
                'character' => 'C3po',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            479 => 
            array (
                'cast_id' => 996,
                'movie_id' => 105,
                'person_id' => 84,
                'character' => 'R2D2',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            480 => 
            array (
                'cast_id' => 997,
                'movie_id' => 105,
                'person_id' => 198,
                'character' => 'QuiGon Jinn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            481 => 
            array (
                'cast_id' => 998,
                'movie_id' => 105,
                'person_id' => 586,
                'character' => 'Anakin Skywalker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            482 => 
            array (
                'cast_id' => 999,
                'movie_id' => 105,
                'person_id' => 587,
                'character' => 'Jango Fett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            483 => 
            array (
                'cast_id' => 1000,
                'movie_id' => 105,
                'person_id' => 588,
                'character' => 'Senator Bail Organa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            484 => 
            array (
                'cast_id' => 1001,
                'movie_id' => 106,
                'person_id' => 432,
                'character' => 'Obi-Wan Kenobi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            485 => 
            array (
                'cast_id' => 1002,
                'movie_id' => 106,
                'person_id' => 221,
                'character' => 'Padme',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            486 => 
            array (
                'cast_id' => 1003,
                'movie_id' => 106,
                'person_id' => 586,
                'character' => 'Anakin Skywalker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            487 => 
            array (
                'cast_id' => 1004,
                'movie_id' => 106,
                'person_id' => 578,
                'character' => 'Supreme Chancellor Palpatine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            488 => 
            array (
                'cast_id' => 1005,
                'movie_id' => 106,
                'person_id' => 97,
                'character' => 'Mace Windu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            489 => 
            array (
                'cast_id' => 1006,
                'movie_id' => 106,
                'person_id' => 588,
                'character' => 'Senator Bail Organa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            490 => 
            array (
                'cast_id' => 1007,
                'movie_id' => 106,
                'person_id' => 305,
                'character' => 'Yoda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            491 => 
            array (
                'cast_id' => 1008,
                'movie_id' => 106,
                'person_id' => 83,
                'character' => 'C3PO',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            492 => 
            array (
                'cast_id' => 1009,
                'movie_id' => 106,
                'person_id' => 409,
                'character' => 'Count Dooku',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            493 => 
            array (
                'cast_id' => 1010,
                'movie_id' => 106,
                'person_id' => 587,
                'character' => 'Commander Cody',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            494 => 
            array (
                'cast_id' => 1011,
                'movie_id' => 106,
                'person_id' => 582,
                'character' => 'Jar Jar Binks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            495 => 
            array (
                'cast_id' => 1012,
                'movie_id' => 106,
                'person_id' => 306,
                'character' => 'Captain Colton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            496 => 
            array (
                'cast_id' => 1013,
                'movie_id' => 106,
                'person_id' => 84,
                'character' => 'R2D2',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            497 => 
            array (
                'cast_id' => 1014,
                'movie_id' => 106,
                'person_id' => 87,
                'character' => 'Chewbacca',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            498 => 
            array (
                'cast_id' => 1015,
                'movie_id' => 106,
                'person_id' => 86,
                'character' => 'Darth Vader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            499 => 
            array (
                'cast_id' => 1016,
                'movie_id' => 106,
                'person_id' => 312,
                'character' => 'Senator Bana Breemu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        \DB::table('cast')->insert(array (
            0 => 
            array (
                'cast_id' => 1017,
                'movie_id' => 106,
                'person_id' => 88,
                'character' => 'Baron Papanoida',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'cast_id' => 1018,
                'movie_id' => 107,
                'person_id' => 478,
                'character' => 'Captain Haddock',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'cast_id' => 1019,
                'movie_id' => 107,
                'person_id' => 513,
                'character' => 'Thomson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'cast_id' => 1020,
                'movie_id' => 107,
                'person_id' => 512,
                'character' => 'Thompson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'cast_id' => 1021,
                'movie_id' => 107,
                'person_id' => 375,
                'character' => 'Silk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'cast_id' => 1022,
                'movie_id' => 107,
                'person_id' => 589,
                'character' => 'Tintin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'cast_id' => 1023,
                'movie_id' => 107,
                'person_id' => 590,
                'character' => 'Sakharine  Red Rackham',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'cast_id' => 1024,
                'movie_id' => 107,
                'person_id' => 591,
                'character' => 'Tom Pirate Flunky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'cast_id' => 1025,
                'movie_id' => 107,
                'person_id' => 592,
                'character' => 'Pilot',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'cast_id' => 1026,
                'movie_id' => 108,
                'person_id' => 32,
                'character' => 'Kyle Reese',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'cast_id' => 1027,
                'movie_id' => 108,
                'person_id' => 34,
                'character' => 'Detective Hal Vukovich',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'cast_id' => 1028,
                'movie_id' => 108,
                'person_id' => 35,
                'character' => 'Punk Leader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'cast_id' => 1029,
                'movie_id' => 108,
                'person_id' => 593,
                'character' => 'Terminator',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'cast_id' => 1030,
                'movie_id' => 108,
                'person_id' => 594,
                'character' => 'Sarah Connor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'cast_id' => 1031,
                'movie_id' => 109,
                'person_id' => 593,
                'character' => 'The Terminator',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'cast_id' => 1032,
                'movie_id' => 109,
                'person_id' => 594,
                'character' => 'Sarah Connor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'cast_id' => 1033,
                'movie_id' => 109,
                'person_id' => 37,
                'character' => 'Janelle Voight',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'cast_id' => 1034,
                'movie_id' => 109,
                'person_id' => 255,
                'character' => 'Todd Voight',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'cast_id' => 1035,
                'movie_id' => 109,
                'person_id' => 595,
                'character' => 'John Connor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'cast_id' => 1036,
                'movie_id' => 109,
                'person_id' => 596,
                'character' => 'T1000',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'cast_id' => 1037,
                'movie_id' => 109,
                'person_id' => 597,
                'character' => 'Dr Silberman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'cast_id' => 1038,
                'movie_id' => 109,
                'person_id' => 598,
                'character' => 'Miles Dyson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'cast_id' => 1039,
                'movie_id' => 109,
                'person_id' => 599,
                'character' => 'Swat Team Leader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'cast_id' => 1040,
                'movie_id' => 110,
                'person_id' => 593,
                'character' => 'Terminator',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'cast_id' => 1041,
                'movie_id' => 110,
                'person_id' => 597,
                'character' => 'Dr Peter Silberman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'cast_id' => 1042,
                'movie_id' => 110,
                'person_id' => 600,
                'character' => 'John Connor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'cast_id' => 1043,
                'movie_id' => 110,
                'person_id' => 601,
                'character' => 'Kate Brewster',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'cast_id' => 1044,
                'movie_id' => 110,
                'person_id' => 602,
                'character' => 'Tx',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'cast_id' => 1045,
                'movie_id' => 111,
                'person_id' => 196,
                'character' => 'John Connor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'cast_id' => 1046,
                'movie_id' => 111,
                'person_id' => 151,
                'character' => 'Marcus Wright',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'cast_id' => 1047,
                'movie_id' => 111,
                'person_id' => 17,
                'character' => 'Dr Serena Kogan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'cast_id' => 1048,
                'movie_id' => 111,
                'person_id' => 564,
                'character' => 'Kyle Reese',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'cast_id' => 1049,
                'movie_id' => 111,
                'person_id' => 350,
                'character' => 'Captain Jericho',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'cast_id' => 1050,
                'movie_id' => 111,
                'person_id' => 594,
                'character' => 'Sarah Connor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'cast_id' => 1051,
                'movie_id' => 111,
                'person_id' => 603,
                'character' => 'Blair Williams',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'cast_id' => 1052,
                'movie_id' => 111,
                'person_id' => 604,
                'character' => 'Kate Connor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'cast_id' => 1053,
                'movie_id' => 111,
                'person_id' => 605,
                'character' => 'General Ashdown',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'cast_id' => 1054,
                'movie_id' => 112,
                'person_id' => 145,
                'character' => 'Doug MacRay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'cast_id' => 1055,
                'movie_id' => 112,
                'person_id' => 462,
                'character' => 'Claire Keesey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'cast_id' => 1056,
                'movie_id' => 112,
                'person_id' => 126,
                'character' => 'James Coughlin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'cast_id' => 1057,
                'movie_id' => 112,
                'person_id' => 43,
                'character' => 'Fergus Fergie Colm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'cast_id' => 1058,
                'movie_id' => 112,
                'person_id' => 179,
                'character' => 'Stephen MacRay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'cast_id' => 1059,
                'movie_id' => 112,
                'person_id' => 141,
                'character' => 'Assistant Bank Manager',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'cast_id' => 1060,
                'movie_id' => 112,
                'person_id' => 606,
                'character' => 'Fbi Sa Adam Frawley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'cast_id' => 1061,
                'movie_id' => 112,
                'person_id' => 607,
                'character' => 'Krista Coughlin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'cast_id' => 1062,
                'movie_id' => 113,
                'person_id' => 443,
                'character' => 'Rooster Cogburn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'cast_id' => 1063,
                'movie_id' => 113,
                'person_id' => 177,
                'character' => 'LaBoeuf',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            47 => 
            array (
                'cast_id' => 1064,
                'movie_id' => 113,
                'person_id' => 500,
                'character' => 'Tom Chaney',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            48 => 
            array (
                'cast_id' => 1065,
                'movie_id' => 113,
                'person_id' => 537,
                'character' => 'Lucky Ned Pepper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            49 => 
            array (
                'cast_id' => 1066,
                'movie_id' => 113,
                'person_id' => 395,
                'character' => 'Moon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            50 => 
            array (
                'cast_id' => 1067,
                'movie_id' => 113,
                'person_id' => 608,
                'character' => 'Mattie Ross',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            51 => 
            array (
                'cast_id' => 1068,
                'movie_id' => 113,
                'person_id' => 609,
                'character' => 'J Noble Daggett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            52 => 
            array (
                'cast_id' => 1069,
                'movie_id' => 114,
                'person_id' => 457,
                'character' => 'Sam Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            53 => 
            array (
                'cast_id' => 1070,
                'movie_id' => 114,
                'person_id' => 74,
                'character' => 'Megatron',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            54 => 
            array (
                'cast_id' => 1071,
                'movie_id' => 114,
                'person_id' => 610,
                'character' => 'Mikaela Banes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            55 => 
            array (
                'cast_id' => 1072,
                'movie_id' => 114,
                'person_id' => 611,
                'character' => 'Captain William Lennox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            56 => 
            array (
                'cast_id' => 1073,
                'movie_id' => 114,
                'person_id' => 612,
                'character' => 'Usaf Tech Sergeant Epps',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            57 => 
            array (
                'cast_id' => 1074,
                'movie_id' => 114,
                'person_id' => 613,
                'character' => 'Glen Whitmann',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            58 => 
            array (
                'cast_id' => 1075,
                'movie_id' => 114,
                'person_id' => 614,
                'character' => 'Defense Secretary John Keller',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            59 => 
            array (
                'cast_id' => 1076,
                'movie_id' => 114,
                'person_id' => 615,
                'character' => 'Agent Simmons',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            60 => 
            array (
                'cast_id' => 1077,
                'movie_id' => 114,
                'person_id' => 616,
                'character' => 'Ron Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            61 => 
            array (
                'cast_id' => 1078,
                'movie_id' => 114,
                'person_id' => 617,
                'character' => 'Judy Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            62 => 
            array (
                'cast_id' => 1079,
                'movie_id' => 114,
                'person_id' => 618,
                'character' => 'Bobby Bolivia',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            63 => 
            array (
                'cast_id' => 1080,
                'movie_id' => 114,
                'person_id' => 619,
                'character' => 'Colonel Sharp',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            64 => 
            array (
                'cast_id' => 1081,
                'movie_id' => 114,
                'person_id' => 620,
                'character' => 'Optimus Prime',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            65 => 
            array (
                'cast_id' => 1082,
                'movie_id' => 115,
                'person_id' => 457,
                'character' => 'Sam Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            66 => 
            array (
                'cast_id' => 1083,
                'movie_id' => 115,
                'person_id' => 610,
                'character' => 'Mikaela Banes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            67 => 
            array (
                'cast_id' => 1084,
                'movie_id' => 115,
                'person_id' => 611,
                'character' => 'Major Lennox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            68 => 
            array (
                'cast_id' => 1085,
                'movie_id' => 115,
                'person_id' => 612,
                'character' => 'USAF Master Sergeant Epps',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            69 => 
            array (
                'cast_id' => 1086,
                'movie_id' => 115,
                'person_id' => 615,
                'character' => 'Simmons',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            70 => 
            array (
                'cast_id' => 1087,
                'movie_id' => 115,
                'person_id' => 616,
                'character' => 'Ron Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            71 => 
            array (
                'cast_id' => 1088,
                'movie_id' => 115,
                'person_id' => 617,
                'character' => 'Judy Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            72 => 
            array (
                'cast_id' => 1089,
                'movie_id' => 115,
                'person_id' => 619,
                'character' => 'General Morshower',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            73 => 
            array (
                'cast_id' => 1090,
                'movie_id' => 115,
                'person_id' => 620,
                'character' => 'Optimus Prime',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            74 => 
            array (
                'cast_id' => 1091,
                'movie_id' => 115,
                'person_id' => 74,
                'character' => 'Megatron',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            75 => 
            array (
                'cast_id' => 1092,
                'movie_id' => 115,
                'person_id' => 254,
                'character' => 'Fallen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            76 => 
            array (
                'cast_id' => 1093,
                'movie_id' => 115,
                'person_id' => 567,
                'character' => 'Soundwave',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            77 => 
            array (
                'cast_id' => 1094,
                'movie_id' => 115,
                'person_id' => 621,
                'character' => 'Professor Colan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            78 => 
            array (
                'cast_id' => 1095,
                'movie_id' => 116,
                'person_id' => 457,
                'character' => 'Sam Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            79 => 
            array (
                'cast_id' => 1096,
                'movie_id' => 116,
                'person_id' => 611,
                'character' => 'Lennox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            80 => 
            array (
                'cast_id' => 1097,
                'movie_id' => 116,
                'person_id' => 615,
                'character' => 'Simmons',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            81 => 
            array (
                'cast_id' => 1098,
                'movie_id' => 116,
                'person_id' => 612,
                'character' => 'Epps',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            82 => 
            array (
                'cast_id' => 1099,
                'movie_id' => 116,
                'person_id' => 330,
                'character' => 'Dylan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            83 => 
            array (
                'cast_id' => 1100,
                'movie_id' => 116,
                'person_id' => 616,
                'character' => 'Ron Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            84 => 
            array (
                'cast_id' => 1101,
                'movie_id' => 116,
                'person_id' => 617,
                'character' => 'Judy Witwicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            85 => 
            array (
                'cast_id' => 1102,
                'movie_id' => 116,
                'person_id' => 428,
                'character' => 'Dutch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            86 => 
            array (
                'cast_id' => 1103,
                'movie_id' => 116,
                'person_id' => 619,
                'character' => 'General Morshower',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            87 => 
            array (
                'cast_id' => 1104,
                'movie_id' => 116,
                'person_id' => 620,
                'character' => 'Optimus Prime',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            88 => 
            array (
                'cast_id' => 1105,
                'movie_id' => 116,
                'person_id' => 74,
                'character' => 'Megatron',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            89 => 
            array (
                'cast_id' => 1106,
                'movie_id' => 116,
                'person_id' => 570,
                'character' => 'Sentinel Prime',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            90 => 
            array (
                'cast_id' => 1107,
                'movie_id' => 116,
                'person_id' => 567,
                'character' => 'Soundwave',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            91 => 
            array (
                'cast_id' => 1108,
                'movie_id' => 116,
                'person_id' => 622,
                'character' => 'Carly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            92 => 
            array (
                'cast_id' => 1109,
                'movie_id' => 116,
                'person_id' => 623,
                'character' => 'Mearing',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            93 => 
            array (
                'cast_id' => 1110,
                'movie_id' => 116,
                'person_id' => 624,
                'character' => 'Bruce Brazos',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            94 => 
            array (
                'cast_id' => 1111,
                'movie_id' => 116,
                'person_id' => 625,
                'character' => 'Jerry Wang',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            95 => 
            array (
                'cast_id' => 1112,
                'movie_id' => 117,
                'person_id' => 443,
                'character' => 'Kevin Flynn / Clu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            96 => 
            array (
                'cast_id' => 1113,
                'movie_id' => 117,
                'person_id' => 140,
                'character' => 'Ed Dillinger / Sark',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            97 => 
            array (
                'cast_id' => 1114,
                'movie_id' => 117,
                'person_id' => 626,
                'character' => 'Alan Bradley / Tron',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            98 => 
            array (
                'cast_id' => 1115,
                'movie_id' => 117,
                'person_id' => 627,
                'character' => 'Lora  Yori',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            99 => 
            array (
                'cast_id' => 1116,
                'movie_id' => 117,
                'person_id' => 628,
                'character' => 'Dr Walter Gibbs / Dumont',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            100 => 
            array (
                'cast_id' => 1117,
                'movie_id' => 117,
                'person_id' => 629,
                'character' => 'Ram / Popcorn Co-Worker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            101 => 
            array (
                'cast_id' => 1118,
                'movie_id' => 118,
                'person_id' => 443,
                'character' => 'Kevin Flynn / Clu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            102 => 
            array (
                'cast_id' => 1119,
                'movie_id' => 118,
                'person_id' => 626,
                'character' => 'Alan Bradley / Tron',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            103 => 
            array (
                'cast_id' => 1120,
                'movie_id' => 118,
                'person_id' => 21,
                'character' => 'Castor  Zuse',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            104 => 
            array (
                'cast_id' => 1121,
                'movie_id' => 118,
                'person_id' => 201,
                'character' => 'Edward Dillinger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            105 => 
            array (
                'cast_id' => 1122,
                'movie_id' => 118,
                'person_id' => 630,
                'character' => 'Sam Flynn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            106 => 
            array (
                'cast_id' => 1123,
                'movie_id' => 118,
                'person_id' => 631,
                'character' => 'Quorra',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            107 => 
            array (
                'cast_id' => 1124,
                'movie_id' => 118,
                'person_id' => 632,
                'character' => 'Jarvis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            108 => 
            array (
                'cast_id' => 1125,
                'movie_id' => 118,
                'person_id' => 633,
                'character' => 'Gem',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            109 => 
            array (
                'cast_id' => 1126,
                'movie_id' => 119,
                'person_id' => 634,
                'character' => 'Parajumper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            110 => 
            array (
                'cast_id' => 1127,
                'movie_id' => 119,
                'person_id' => 635,
                'character' => 'Excia Agent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            111 => 
            array (
                'cast_id' => 1128,
                'movie_id' => 119,
                'person_id' => 636,
                'character' => 'Who Doctor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            112 => 
            array (
                'cast_id' => 1129,
                'movie_id' => 120,
                'person_id' => 480,
                'character' => 'Chris Bradley  Bolt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            113 => 
            array (
                'cast_id' => 1130,
                'movie_id' => 120,
                'person_id' => 637,
                'character' => 'Logan  Wolverine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            114 => 
            array (
                'cast_id' => 1131,
                'movie_id' => 120,
                'person_id' => 638,
                'character' => 'Victor Creed',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            115 => 
            array (
                'cast_id' => 1132,
                'movie_id' => 120,
                'person_id' => 639,
                'character' => 'Stryker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            116 => 
            array (
                'cast_id' => 1133,
                'movie_id' => 120,
                'person_id' => 640,
                'character' => 'Fred Dukes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            117 => 
            array (
                'cast_id' => 1134,
                'movie_id' => 120,
                'person_id' => 641,
                'character' => 'Kayla Silverfox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            118 => 
            array (
                'cast_id' => 1135,
                'movie_id' => 120,
                'person_id' => 642,
                'character' => 'Wade Wilson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            119 => 
            array (
                'cast_id' => 1136,
                'movie_id' => 120,
                'person_id' => 643,
                'character' => 'Remy Lebeau',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            120 => 
            array (
                'cast_id' => 1137,
                'movie_id' => 121,
                'person_id' => 637,
                'character' => 'Logan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            121 => 
            array (
                'cast_id' => 1138,
                'movie_id' => 121,
                'person_id' => 5,
                'character' => 'Shingen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            122 => 
            array (
                'cast_id' => 1139,
                'movie_id' => 121,
                'person_id' => 479,
                'character' => 'Magneto',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            123 => 
            array (
                'cast_id' => 1140,
                'movie_id' => 121,
                'person_id' => 644,
                'character' => 'Mariko',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            124 => 
            array (
                'cast_id' => 1141,
                'movie_id' => 121,
                'person_id' => 645,
                'character' => 'Viper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            125 => 
            array (
                'cast_id' => 1142,
                'movie_id' => 121,
                'person_id' => 646,
                'character' => 'Jean Grey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            126 => 
            array (
                'cast_id' => 1143,
                'movie_id' => 121,
                'person_id' => 647,
                'character' => 'Charles Xavier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            127 => 
            array (
                'cast_id' => 1144,
                'movie_id' => 122,
                'person_id' => 436,
                'character' => 'Erik Lensherr',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            128 => 
            array (
                'cast_id' => 1145,
                'movie_id' => 122,
                'person_id' => 411,
                'character' => 'Raven  Mystique',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            129 => 
            array (
                'cast_id' => 1146,
                'movie_id' => 122,
                'person_id' => 469,
                'character' => 'Azazel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            130 => 
            array (
                'cast_id' => 1147,
                'movie_id' => 122,
                'person_id' => 619,
                'character' => 'Colonel Hendry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            131 => 
            array (
                'cast_id' => 1148,
                'movie_id' => 122,
                'person_id' => 605,
                'character' => 'Captain',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            132 => 
            array (
                'cast_id' => 1149,
                'movie_id' => 122,
                'person_id' => 637,
                'character' => 'Logan  Wolverine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            133 => 
            array (
                'cast_id' => 1150,
                'movie_id' => 122,
                'person_id' => 648,
                'character' => 'Charles Xavier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            134 => 
            array (
                'cast_id' => 1151,
                'movie_id' => 122,
                'person_id' => 649,
                'character' => 'Sebastian Shaw',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            135 => 
            array (
                'cast_id' => 1152,
                'movie_id' => 122,
                'person_id' => 650,
                'character' => 'Moira Mactaggert',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            136 => 
            array (
                'cast_id' => 1153,
                'movie_id' => 122,
                'person_id' => 651,
                'character' => 'Man In Black Suit',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            137 => 
            array (
                'cast_id' => 1154,
                'movie_id' => 122,
                'person_id' => 652,
                'character' => 'Riptide',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            138 => 
            array (
                'cast_id' => 1155,
                'movie_id' => 122,
                'person_id' => 653,
                'character' => 'Angel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            139 => 
            array (
                'cast_id' => 1156,
                'movie_id' => 122,
                'person_id' => 654,
                'character' => 'Emma Frost',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            140 => 
            array (
                'cast_id' => 1157,
                'movie_id' => 122,
                'person_id' => 655,
                'character' => 'Hank Mccoy / Beast',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            141 => 
            array (
                'cast_id' => 1158,
                'movie_id' => 122,
                'person_id' => 656,
                'character' => 'Secretary Of State',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            142 => 
            array (
                'cast_id' => 1159,
                'movie_id' => 123,
                'person_id' => 637,
                'character' => 'Logan  Wolverine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            143 => 
            array (
                'cast_id' => 1160,
                'movie_id' => 123,
                'person_id' => 648,
                'character' => 'Charles Xavier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            144 => 
            array (
                'cast_id' => 1161,
                'movie_id' => 123,
                'person_id' => 436,
                'character' => 'Erik Lehnsherr',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            145 => 
            array (
                'cast_id' => 1162,
                'movie_id' => 123,
                'person_id' => 411,
                'character' => 'Raven  Mystique',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            146 => 
            array (
                'cast_id' => 1163,
                'movie_id' => 123,
                'person_id' => 655,
                'character' => 'Hank  Beast',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            147 => 
            array (
                'cast_id' => 1164,
                'movie_id' => 123,
                'person_id' => 438,
                'character' => 'Kitty Pryde',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            148 => 
            array (
                'cast_id' => 1165,
                'movie_id' => 123,
                'person_id' => 120,
                'character' => 'Bishop',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            149 => 
            array (
                'cast_id' => 1166,
                'movie_id' => 123,
                'person_id' => 479,
                'character' => 'Magneto',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            150 => 
            array (
                'cast_id' => 1167,
                'movie_id' => 123,
                'person_id' => 647,
                'character' => 'Professor X',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            151 => 
            array (
                'cast_id' => 1168,
                'movie_id' => 123,
                'person_id' => 646,
                'character' => 'Jean Grey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            152 => 
            array (
                'cast_id' => 1169,
                'movie_id' => 123,
                'person_id' => 331,
                'character' => 'Scott Summers',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            153 => 
            array (
                'cast_id' => 1170,
                'movie_id' => 123,
                'person_id' => 181,
                'character' => 'William Stryker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            154 => 
            array (
                'cast_id' => 1171,
                'movie_id' => 123,
                'person_id' => 657,
                'character' => 'Storm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            155 => 
            array (
                'cast_id' => 1172,
                'movie_id' => 123,
                'person_id' => 658,
                'character' => 'Rogue',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            156 => 
            array (
                'cast_id' => 1173,
                'movie_id' => 123,
                'person_id' => 659,
                'character' => 'Dr Bolivar Trask',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            157 => 
            array (
                'cast_id' => 1174,
                'movie_id' => 123,
                'person_id' => 660,
                'character' => 'Bobby / Iceman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            158 => 
            array (
                'cast_id' => 1175,
                'movie_id' => 123,
                'person_id' => 661,
                'character' => 'Peter / Quicksilver',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            159 => 
            array (
                'cast_id' => 1176,
                'movie_id' => 123,
                'person_id' => 662,
                'character' => 'Maj Bill Stryker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            160 => 
            array (
                'cast_id' => 1177,
                'movie_id' => 123,
                'person_id' => 663,
                'character' => 'Colossus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            161 => 
            array (
                'cast_id' => 1178,
                'movie_id' => 123,
                'person_id' => 664,
                'character' => 'Havok',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            162 => 
            array (
                'cast_id' => 1179,
                'movie_id' => 123,
                'person_id' => 665,
                'character' => 'Beast',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            163 => 
            array (
                'cast_id' => 1180,
                'movie_id' => 124,
                'person_id' => 637,
                'character' => 'Logan / Wolverine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            164 => 
            array (
                'cast_id' => 1181,
                'movie_id' => 124,
                'person_id' => 647,
                'character' => 'Charles Xavier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            165 => 
            array (
                'cast_id' => 1182,
                'movie_id' => 124,
                'person_id' => 479,
                'character' => 'Magneto',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            166 => 
            array (
                'cast_id' => 1183,
                'movie_id' => 124,
                'person_id' => 646,
                'character' => 'Jean Grey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            167 => 
            array (
                'cast_id' => 1184,
                'movie_id' => 124,
                'person_id' => 331,
                'character' => 'Scott Summers / Cyclops',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            168 => 
            array (
                'cast_id' => 1185,
                'movie_id' => 124,
                'person_id' => 657,
                'character' => 'Ororo Munroe / Storm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            169 => 
            array (
                'cast_id' => 1186,
                'movie_id' => 124,
                'person_id' => 658,
                'character' => 'Rogue',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            170 => 
            array (
                'cast_id' => 1187,
                'movie_id' => 124,
                'person_id' => 584,
                'character' => 'Toad',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            171 => 
            array (
                'cast_id' => 1188,
                'movie_id' => 124,
                'person_id' => 660,
                'character' => 'Bobby Drake / Iceman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            172 => 
            array (
                'cast_id' => 1189,
                'movie_id' => 124,
                'person_id' => 459,
                'character' => 'Hot Dog Vendor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            173 => 
            array (
                'cast_id' => 1190,
                'movie_id' => 124,
                'person_id' => 666,
                'character' => 'Sabretooth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            174 => 
            array (
                'cast_id' => 1191,
                'movie_id' => 124,
                'person_id' => 667,
                'character' => 'Mystique',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            175 => 
            array (
                'cast_id' => 1192,
                'movie_id' => 124,
                'person_id' => 668,
                'character' => 'Senator Kelly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            176 => 
            array (
                'cast_id' => 1193,
                'movie_id' => 125,
                'person_id' => 647,
                'character' => 'Professor Charles Xavier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            177 => 
            array (
                'cast_id' => 1194,
                'movie_id' => 125,
                'person_id' => 637,
                'character' => 'Logan  Wolverine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            178 => 
            array (
                'cast_id' => 1195,
                'movie_id' => 125,
                'person_id' => 479,
                'character' => 'Magneto',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            179 => 
            array (
                'cast_id' => 1196,
                'movie_id' => 125,
                'person_id' => 657,
                'character' => 'Ororo Munroe  Storm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            180 => 
            array (
                'cast_id' => 1197,
                'movie_id' => 125,
                'person_id' => 646,
                'character' => 'Jean Grey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            181 => 
            array (
                'cast_id' => 1198,
                'movie_id' => 125,
                'person_id' => 331,
                'character' => 'Scott Summers  Cyclops',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            182 => 
            array (
                'cast_id' => 1199,
                'movie_id' => 125,
                'person_id' => 658,
                'character' => 'Marie  Rogue',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            183 => 
            array (
                'cast_id' => 1200,
                'movie_id' => 125,
                'person_id' => 667,
                'character' => 'Raven Darkholme  Mystique',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            184 => 
            array (
                'cast_id' => 1201,
                'movie_id' => 125,
                'person_id' => 181,
                'character' => 'William Stryker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            185 => 
            array (
                'cast_id' => 1202,
                'movie_id' => 125,
                'person_id' => 562,
                'character' => 'Kurt Wagner  Nightcrawler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            186 => 
            array (
                'cast_id' => 1203,
                'movie_id' => 125,
                'person_id' => 668,
                'character' => 'Senator Kelly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            187 => 
            array (
                'cast_id' => 1204,
                'movie_id' => 125,
                'person_id' => 660,
                'character' => 'Bobby Drake  Iceman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            188 => 
            array (
                'cast_id' => 1205,
                'movie_id' => 125,
                'person_id' => 663,
                'character' => 'Piotr Rasputin  Colossus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            189 => 
            array (
                'cast_id' => 1206,
                'movie_id' => 125,
                'person_id' => 669,
                'character' => 'John Allerdyce  Pyro',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            190 => 
            array (
                'cast_id' => 1207,
                'movie_id' => 125,
                'person_id' => 670,
                'character' => 'Yuriko Oyama  Lady Deathstrike',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            191 => 
            array (
                'cast_id' => 1208,
                'movie_id' => 126,
                'person_id' => 637,
                'character' => 'Logan  Wolverine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            192 => 
            array (
                'cast_id' => 1209,
                'movie_id' => 126,
                'person_id' => 657,
                'character' => 'Ororo Munroe  Storm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            193 => 
            array (
                'cast_id' => 1210,
                'movie_id' => 126,
                'person_id' => 479,
                'character' => 'Magneto',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            194 => 
            array (
                'cast_id' => 1211,
                'movie_id' => 126,
                'person_id' => 647,
                'character' => 'Charles Xavier  Professor X',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            195 => 
            array (
                'cast_id' => 1212,
                'movie_id' => 126,
                'person_id' => 646,
                'character' => 'Jean Grey  Phoenix',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            196 => 
            array (
                'cast_id' => 1213,
                'movie_id' => 126,
                'person_id' => 658,
                'character' => 'Marie  Rogue',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            197 => 
            array (
                'cast_id' => 1214,
                'movie_id' => 126,
                'person_id' => 665,
                'character' => 'Dr Henry Hank McCoy  Beast',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            198 => 
            array (
                'cast_id' => 1215,
                'movie_id' => 126,
                'person_id' => 331,
                'character' => 'Scott Summers  Cyclops',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            199 => 
            array (
                'cast_id' => 1216,
                'movie_id' => 126,
                'person_id' => 667,
                'character' => 'Raven Darkholme  Mystique',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            200 => 
            array (
                'cast_id' => 1217,
                'movie_id' => 126,
                'person_id' => 660,
                'character' => 'Bobby Drake  Iceman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            201 => 
            array (
                'cast_id' => 1218,
                'movie_id' => 126,
                'person_id' => 669,
                'character' => 'John Allerdyce  Pyro',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            202 => 
            array (
                'cast_id' => 1219,
                'movie_id' => 126,
                'person_id' => 438,
                'character' => 'Kitty Pryde  Shadowcat',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            203 => 
            array (
                'cast_id' => 1220,
                'movie_id' => 126,
                'person_id' => 663,
                'character' => 'Peter Rasputin  Colossus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            204 => 
            array (
                'cast_id' => 1221,
                'movie_id' => 126,
                'person_id' => 459,
                'character' => 'Waterhose Man',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            205 => 
            array (
                'cast_id' => 1222,
                'movie_id' => 126,
                'person_id' => 671,
                'character' => 'Cain Marko  Juggernaut',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            206 => 
            array (
                'cast_id' => 1223,
                'movie_id' => 126,
                'person_id' => 672,
                'character' => 'Warren Worthington Iii  Angel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            207 => 
            array (
                'cast_id' => 1224,
                'movie_id' => 126,
                'person_id' => 673,
                'character' => 'Trask',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            208 => 
            array (
                'cast_id' => 1225,
                'movie_id' => 126,
                'person_id' => 674,
                'character' => 'Sergeant',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            209 => 
            array (
                'cast_id' => 1226,
                'movie_id' => 126,
                'person_id' => 675,
                'character' => 'Dr Moira Mactaggart',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            210 => 
            array (
                'cast_id' => 1227,
                'movie_id' => 127,
                'person_id' => 164,
                'character' => 'Charles Charley Bowdre',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            211 => 
            array (
                'cast_id' => 1228,
                'movie_id' => 127,
                'person_id' => 345,
                'character' => 'John Tunstall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            212 => 
            array (
                'cast_id' => 1229,
                'movie_id' => 127,
                'person_id' => 676,
                'character' => 'William H Billy The Kid Bonney',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            213 => 
            array (
                'cast_id' => 1230,
                'movie_id' => 127,
                'person_id' => 677,
                'character' => 'Josiah Gordon Doc Scurlock',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            214 => 
            array (
                'cast_id' => 1231,
                'movie_id' => 127,
                'person_id' => 678,
                'character' => 'Jose Chavez Y Chavez',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            215 => 
            array (
                'cast_id' => 1232,
                'movie_id' => 127,
                'person_id' => 679,
                'character' => 'Richard Dick Brewer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            216 => 
            array (
                'cast_id' => 1233,
                'movie_id' => 127,
                'person_id' => 680,
                'character' => 'Dirty Steve Stephens',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            217 => 
            array (
                'cast_id' => 1234,
                'movie_id' => 127,
                'person_id' => 681,
                'character' => 'Lawrence G Murphy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            218 => 
            array (
                'cast_id' => 1235,
                'movie_id' => 127,
                'person_id' => 682,
                'character' => 'Alex Mcsween',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            219 => 
            array (
                'cast_id' => 1236,
                'movie_id' => 128,
                'person_id' => 413,
                'character' => 'Tallahassee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            220 => 
            array (
                'cast_id' => 1237,
                'movie_id' => 128,
                'person_id' => 55,
                'character' => 'Wichita',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            221 => 
            array (
                'cast_id' => 1238,
                'movie_id' => 128,
                'person_id' => 348,
                'character' => 'Bill Murray',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            222 => 
            array (
                'cast_id' => 1239,
                'movie_id' => 128,
                'person_id' => 683,
                'character' => 'Columbus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            223 => 
            array (
                'cast_id' => 1240,
                'movie_id' => 128,
                'person_id' => 684,
                'character' => 'Little Rock',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            224 => 
            array (
                'cast_id' => 1241,
                'movie_id' => 128,
                'person_id' => 685,
                'character' => '406',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            225 => 
            array (
                'cast_id' => 1242,
                'movie_id' => 15,
                'person_id' => 302,
                'character' => 'Roy Parker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            226 => 
            array (
                'cast_id' => 1243,
                'movie_id' => 15,
                'person_id' => 686,
                'character' => 'Verna Jarrett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            227 => 
            array (
                'cast_id' => 1244,
                'movie_id' => 15,
                'person_id' => 687,
                'character' => 'Hank Fallon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            228 => 
            array (
                'cast_id' => 1245,
                'movie_id' => 15,
                'person_id' => 688,
                'character' => 'Big Ed Somers',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            229 => 
            array (
                'cast_id' => 1246,
                'movie_id' => 15,
                'person_id' => 689,
                'character' => 'Trader Winston',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            230 => 
            array (
                'cast_id' => 1247,
                'movie_id' => 7,
                'person_id' => 690,
                'character' => 'Angel Face',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            231 => 
            array (
                'cast_id' => 1248,
                'movie_id' => 11,
                'person_id' => 26,
                'character' => 'Security Guard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            232 => 
            array (
                'cast_id' => 1249,
                'movie_id' => 11,
                'person_id' => 459,
                'character' => 'Stan Lee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            233 => 
            array (
                'cast_id' => 1250,
                'movie_id' => 11,
                'person_id' => 691,
                'character' => 'World Security Council',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            234 => 
            array (
                'cast_id' => 1251,
                'movie_id' => 12,
                'person_id' => 459,
                'character' => 'School Librarian',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            235 => 
            array (
                'cast_id' => 1254,
                'movie_id' => 13,
                'person_id' => 692,
                'character' => 'Lizzy Calvert',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            236 => 
            array (
                'cast_id' => 1255,
                'movie_id' => 16,
                'person_id' => 641,
                'character' => 'Linda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            237 => 
            array (
                'cast_id' => 1256,
                'movie_id' => 16,
                'person_id' => 693,
                'character' => 'Marlin Whitmore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            238 => 
            array (
                'cast_id' => 1257,
                'movie_id' => 16,
                'person_id' => 694,
                'character' => 'Noreen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            239 => 
            array (
                'cast_id' => 1258,
                'movie_id' => 16,
                'person_id' => 695,
                'character' => 'Factory Worker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            240 => 
            array (
                'cast_id' => 1259,
                'movie_id' => 16,
                'person_id' => 696,
                'character' => 'Alexa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            241 => 
            array (
                'cast_id' => 1260,
                'movie_id' => 16,
                'person_id' => 697,
                'character' => 'Ten Second Tom',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            242 => 
            array (
                'cast_id' => 1261,
                'movie_id' => 17,
                'person_id' => 86,
                'character' => 'Mufasa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            243 => 
            array (
                'cast_id' => 1263,
                'movie_id' => 17,
                'person_id' => 698,
                'character' => 'Adult Simba',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            244 => 
            array (
                'cast_id' => 1264,
                'movie_id' => 17,
                'person_id' => 699,
                'character' => 'Young Simba',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            245 => 
            array (
                'cast_id' => 1265,
                'movie_id' => 17,
                'person_id' => 700,
                'character' => 'Scar',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            246 => 
            array (
                'cast_id' => 1266,
                'movie_id' => 17,
                'person_id' => 701,
                'character' => 'Timon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            247 => 
            array (
                'cast_id' => 1267,
                'movie_id' => 17,
                'person_id' => 702,
                'character' => 'Zazu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            248 => 
            array (
                'cast_id' => 1268,
                'movie_id' => 17,
                'person_id' => 703,
                'character' => 'Sarabi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            249 => 
            array (
                'cast_id' => 1269,
                'movie_id' => 17,
                'person_id' => 704,
                'character' => 'Banzai',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            250 => 
            array (
                'cast_id' => 1270,
                'movie_id' => 17,
                'person_id' => 705,
                'character' => 'Adult Nala',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            251 => 
            array (
                'cast_id' => 1271,
                'movie_id' => 17,
                'person_id' => 706,
                'character' => 'Pumbaa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            252 => 
            array (
                'cast_id' => 1272,
                'movie_id' => 17,
                'person_id' => 707,
                'character' => 'Shenzi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            253 => 
            array (
                'cast_id' => 1273,
                'movie_id' => 18,
                'person_id' => 708,
                'character' => 'Donald Gennaro',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            254 => 
            array (
                'cast_id' => 1274,
                'movie_id' => 18,
                'person_id' => 709,
                'character' => 'Juanito Rostagno',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            255 => 
            array (
                'cast_id' => 1275,
                'movie_id' => 19,
                'person_id' => 96,
                'character' => 'John Hammond',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            256 => 
            array (
                'cast_id' => 1277,
                'movie_id' => 19,
                'person_id' => 435,
                'character' => 'Subway Man',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            257 => 
            array (
                'cast_id' => 1278,
                'movie_id' => 19,
                'person_id' => 105,
                'character' => 'PopcornEating Man',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            258 => 
            array (
                'cast_id' => 1279,
                'movie_id' => 19,
                'person_id' => 710,
                'character' => 'Mr Bowman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            259 => 
            array (
                'cast_id' => 1280,
                'movie_id' => 20,
                'person_id' => 711,
                'character' => 'Cooper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            260 => 
            array (
                'cast_id' => 1281,
                'movie_id' => 21,
                'person_id' => 604,
                'character' => 'Claire',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            261 => 
            array (
                'cast_id' => 1282,
                'movie_id' => 21,
                'person_id' => 271,
                'character' => 'Masrani',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            262 => 
            array (
                'cast_id' => 1285,
                'movie_id' => 23,
                'person_id' => 712,
                'character' => 'Bob Anders',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            263 => 
            array (
                'cast_id' => 1286,
                'movie_id' => 24,
                'person_id' => 439,
                'character' => 'Dr Max Patel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            264 => 
            array (
                'cast_id' => 1288,
                'movie_id' => 26,
                'person_id' => 713,
                'character' => 'Whitey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            265 => 
            array (
                'cast_id' => 1289,
                'movie_id' => 27,
                'person_id' => 159,
                'character' => 'Dr Emmett Brown',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            266 => 
            array (
                'cast_id' => 1291,
                'movie_id' => 27,
                'person_id' => 170,
                'character' => 'Douglas J Needles',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            267 => 
            array (
                'cast_id' => 1292,
                'movie_id' => 27,
                'person_id' => 714,
                'character' => 'Barbwire Salesman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            268 => 
            array (
                'cast_id' => 1293,
                'movie_id' => 29,
                'person_id' => 189,
                'character' => 'Zorn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            269 => 
            array (
                'cast_id' => 1295,
                'movie_id' => 30,
                'person_id' => 552,
                'character' => 'Kim',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            270 => 
            array (
                'cast_id' => 1296,
                'movie_id' => 30,
                'person_id' => 179,
                'character' => 'Conklin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            271 => 
            array (
                'cast_id' => 1297,
                'movie_id' => 31,
                'person_id' => 181,
                'character' => 'Ward Abbott',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            272 => 
            array (
                'cast_id' => 1298,
                'movie_id' => 31,
                'person_id' => 178,
                'character' => 'Marie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            273 => 
            array (
                'cast_id' => 1299,
                'movie_id' => 31,
                'person_id' => 716,
                'character' => 'Paz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            274 => 
            array (
                'cast_id' => 1300,
                'movie_id' => 68,
                'person_id' => 420,
                'character' => 'Caesar Flickerman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            275 => 
            array (
                'cast_id' => 1301,
                'movie_id' => 68,
                'person_id' => 411,
                'character' => 'Katniss Everdeen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            276 => 
            array (
                'cast_id' => 1302,
                'movie_id' => 68,
                'person_id' => 416,
                'character' => 'Primrose Everdeen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            277 => 
            array (
                'cast_id' => 1303,
                'movie_id' => 68,
                'person_id' => 412,
                'character' => 'Gale Hawthorne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            278 => 
            array (
                'cast_id' => 1304,
                'movie_id' => 68,
                'person_id' => 418,
                'character' => 'Effie Trinket',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            279 => 
            array (
                'cast_id' => 1305,
                'movie_id' => 68,
                'person_id' => 415,
                'character' => 'Katniss Mother',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            280 => 
            array (
                'cast_id' => 1306,
                'movie_id' => 68,
                'person_id' => 414,
                'character' => 'Peeta Mellark',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            281 => 
            array (
                'cast_id' => 1307,
                'movie_id' => 68,
                'person_id' => 413,
                'character' => 'Haymitch Abernathy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            282 => 
            array (
                'cast_id' => 1308,
                'movie_id' => 68,
                'person_id' => 375,
                'character' => 'Claudius Templesmith',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            283 => 
            array (
                'cast_id' => 1309,
                'movie_id' => 68,
                'person_id' => 419,
                'character' => 'Cinna',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            284 => 
            array (
                'cast_id' => 1310,
                'movie_id' => 68,
                'person_id' => 417,
                'character' => 'President Snow',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            285 => 
            array (
                'cast_id' => 1311,
                'movie_id' => 68,
                'person_id' => 717,
                'character' => 'Seneca Crane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            286 => 
            array (
                'cast_id' => 1312,
                'movie_id' => 129,
                'person_id' => 567,
                'character' => 'Footstool',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            287 => 
            array (
                'cast_id' => 1313,
                'movie_id' => 129,
                'person_id' => 718,
                'character' => 'Beast',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            288 => 
            array (
                'cast_id' => 1314,
                'movie_id' => 129,
                'person_id' => 719,
                'character' => 'Mrs Potts',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            289 => 
            array (
                'cast_id' => 1315,
                'movie_id' => 129,
                'person_id' => 720,
                'character' => 'Belle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            290 => 
            array (
                'cast_id' => 1316,
                'movie_id' => 130,
                'person_id' => 429,
                'character' => 'Robert Callaghan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            291 => 
            array (
                'cast_id' => 1317,
                'movie_id' => 130,
                'person_id' => 428,
                'character' => 'Alistair Krei',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            292 => 
            array (
                'cast_id' => 1318,
                'movie_id' => 130,
                'person_id' => 459,
                'character' => 'Freds Dad',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            293 => 
            array (
                'cast_id' => 1319,
                'movie_id' => 130,
                'person_id' => 567,
                'character' => 'Mochi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            294 => 
            array (
                'cast_id' => 1320,
                'movie_id' => 130,
                'person_id' => 721,
                'character' => 'Baymax',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            295 => 
            array (
                'cast_id' => 1321,
                'movie_id' => 130,
                'person_id' => 722,
                'character' => 'Fred',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            296 => 
            array (
                'cast_id' => 1322,
                'movie_id' => 130,
                'person_id' => 723,
                'character' => 'Wasabi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            297 => 
            array (
                'cast_id' => 1323,
                'movie_id' => 130,
                'person_id' => 724,
                'character' => 'Honey Lemon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            298 => 
            array (
                'cast_id' => 1324,
                'movie_id' => 131,
                'person_id' => 407,
                'character' => 'Young Penny',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            299 => 
            array (
                'cast_id' => 1325,
                'movie_id' => 131,
                'person_id' => 725,
                'character' => 'Bolt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            300 => 
            array (
                'cast_id' => 1326,
                'movie_id' => 131,
                'person_id' => 726,
                'character' => 'Penny',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            301 => 
            array (
                'cast_id' => 1327,
                'movie_id' => 131,
                'person_id' => 727,
                'character' => 'Dr Calico',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            302 => 
            array (
                'cast_id' => 1328,
                'movie_id' => 131,
                'person_id' => 728,
                'character' => 'Thug',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            303 => 
            array (
                'cast_id' => 1329,
                'movie_id' => 132,
                'person_id' => 453,
                'character' => 'Elinor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            304 => 
            array (
                'cast_id' => 1330,
                'movie_id' => 132,
                'person_id' => 378,
                'character' => 'The Witch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            305 => 
            array (
                'cast_id' => 1331,
                'movie_id' => 132,
                'person_id' => 366,
                'character' => 'Lord Dingwall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            306 => 
            array (
                'cast_id' => 1332,
                'movie_id' => 132,
                'person_id' => 729,
                'character' => 'Merida',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            307 => 
            array (
                'cast_id' => 1333,
                'movie_id' => 132,
                'person_id' => 730,
                'character' => 'Fergus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            308 => 
            array (
                'cast_id' => 1334,
                'movie_id' => 132,
                'person_id' => 731,
                'character' => 'Lord Macguffin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            309 => 
            array (
                'cast_id' => 1335,
                'movie_id' => 132,
                'person_id' => 732,
                'character' => 'Lord Macintosh',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            310 => 
            array (
                'cast_id' => 1336,
                'movie_id' => 132,
                'person_id' => 733,
                'character' => 'Gordon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            311 => 
            array (
                'cast_id' => 1337,
                'movie_id' => 133,
                'person_id' => 57,
                'character' => 'Francis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            312 => 
            array (
                'cast_id' => 1338,
                'movie_id' => 133,
                'person_id' => 733,
                'character' => 'P.T. Flea',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            313 => 
            array (
                'cast_id' => 1339,
                'movie_id' => 133,
                'person_id' => 734,
                'character' => 'Flik',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            314 => 
            array (
                'cast_id' => 1340,
                'movie_id' => 133,
                'person_id' => 735,
                'character' => 'Hopper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            315 => 
            array (
                'cast_id' => 1341,
                'movie_id' => 133,
                'person_id' => 736,
                'character' => 'Atta',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            316 => 
            array (
                'cast_id' => 1342,
                'movie_id' => 133,
                'person_id' => 737,
                'character' => 'Dot',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            317 => 
            array (
                'cast_id' => 1343,
                'movie_id' => 133,
                'person_id' => 738,
                'character' => 'Molt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            318 => 
            array (
                'cast_id' => 1344,
                'movie_id' => 133,
                'person_id' => 739,
                'character' => 'Slim',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            319 => 
            array (
                'cast_id' => 1345,
                'movie_id' => 133,
                'person_id' => 740,
                'character' => 'Mr Soil',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            320 => 
            array (
                'cast_id' => 1346,
                'movie_id' => 133,
                'person_id' => 741,
                'character' => 'Lead Blueberry Scout',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            321 => 
            array (
                'cast_id' => 1347,
                'movie_id' => 133,
                'person_id' => 742,
                'character' => 'Manny',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            322 => 
            array (
                'cast_id' => 1348,
                'movie_id' => 133,
                'person_id' => 743,
                'character' => 'Heimlich',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            323 => 
            array (
                'cast_id' => 1349,
                'movie_id' => 134,
                'person_id' => 400,
                'character' => 'Doc Hudson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            324 => 
            array (
                'cast_id' => 1350,
                'movie_id' => 134,
                'person_id' => 704,
                'character' => 'Ramone',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            325 => 
            array (
                'cast_id' => 1351,
                'movie_id' => 134,
                'person_id' => 494,
                'character' => 'Luigi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            326 => 
            array (
                'cast_id' => 1352,
                'movie_id' => 134,
                'person_id' => 733,
                'character' => 'Mack',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            327 => 
            array (
                'cast_id' => 1353,
                'movie_id' => 134,
                'person_id' => 743,
                'character' => 'Red',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            328 => 
            array (
                'cast_id' => 1354,
                'movie_id' => 134,
                'person_id' => 738,
                'character' => 'Van',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            329 => 
            array (
                'cast_id' => 1355,
                'movie_id' => 134,
                'person_id' => 533,
                'character' => 'Woody Car',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            330 => 
            array (
                'cast_id' => 1356,
                'movie_id' => 134,
                'person_id' => 148,
                'character' => 'Sullivan Truck',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            331 => 
            array (
                'cast_id' => 1357,
                'movie_id' => 134,
                'person_id' => 734,
                'character' => 'Flik Car',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            332 => 
            array (
                'cast_id' => 1358,
                'movie_id' => 134,
                'person_id' => 744,
                'character' => 'Lightning McQueen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            333 => 
            array (
                'cast_id' => 1359,
                'movie_id' => 134,
                'person_id' => 745,
                'character' => 'Chick Hicks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            334 => 
            array (
                'cast_id' => 1360,
                'movie_id' => 134,
                'person_id' => 746,
                'character' => 'Sally Carrera',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            335 => 
            array (
                'cast_id' => 1361,
                'movie_id' => 134,
                'person_id' => 747,
                'character' => 'Mater',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            336 => 
            array (
                'cast_id' => 1362,
                'movie_id' => 134,
                'person_id' => 748,
                'character' => 'Flo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            337 => 
            array (
                'cast_id' => 1363,
                'movie_id' => 134,
                'person_id' => 749,
                'character' => 'Fillmore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            338 => 
            array (
                'cast_id' => 1364,
                'movie_id' => 134,
                'person_id' => 750,
                'character' => 'The King',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            339 => 
            array (
                'cast_id' => 1365,
                'movie_id' => 134,
                'person_id' => 751,
                'character' => 'Harv',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            340 => 
            array (
                'cast_id' => 1366,
                'movie_id' => 135,
                'person_id' => 747,
                'character' => 'Mater',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            341 => 
            array (
                'cast_id' => 1367,
                'movie_id' => 135,
                'person_id' => 744,
                'character' => 'Lightning McQueen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            342 => 
            array (
                'cast_id' => 1368,
                'movie_id' => 135,
                'person_id' => 197,
                'character' => 'Finn McMissile',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            343 => 
            array (
                'cast_id' => 1369,
                'movie_id' => 135,
                'person_id' => 615,
                'character' => 'Francesco Bernoulli',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            344 => 
            array (
                'cast_id' => 1370,
                'movie_id' => 135,
                'person_id' => 746,
                'character' => 'Sally',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            345 => 
            array (
                'cast_id' => 1371,
                'movie_id' => 135,
                'person_id' => 494,
                'character' => 'Luigi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            346 => 
            array (
                'cast_id' => 1372,
                'movie_id' => 135,
                'person_id' => 386,
                'character' => 'Leland Turbo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            347 => 
            array (
                'cast_id' => 1373,
                'movie_id' => 135,
                'person_id' => 748,
                'character' => 'Flo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            348 => 
            array (
                'cast_id' => 1374,
                'movie_id' => 135,
                'person_id' => 704,
                'character' => 'Ramone',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            349 => 
            array (
                'cast_id' => 1375,
                'movie_id' => 135,
                'person_id' => 738,
                'character' => 'Van',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            350 => 
            array (
                'cast_id' => 1376,
                'movie_id' => 135,
                'person_id' => 733,
                'character' => 'Mack',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            351 => 
            array (
                'cast_id' => 1377,
                'movie_id' => 135,
                'person_id' => 752,
                'character' => 'Holley Shiftwell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            352 => 
            array (
                'cast_id' => 1378,
                'movie_id' => 135,
                'person_id' => 753,
                'character' => 'Sir Miles Axlerod',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            353 => 
            array (
                'cast_id' => 1379,
                'movie_id' => 135,
                'person_id' => 754,
                'character' => 'Grem',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            354 => 
            array (
                'cast_id' => 1380,
                'movie_id' => 135,
                'person_id' => 755,
                'character' => 'Rod Torque Redline',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            355 => 
            array (
                'cast_id' => 1381,
                'movie_id' => 135,
                'person_id' => 756,
                'character' => 'The Queen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            356 => 
            array (
                'cast_id' => 1382,
                'movie_id' => 138,
                'person_id' => 324,
                'character' => 'Marlin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            357 => 
            array (
                'cast_id' => 1383,
                'movie_id' => 138,
                'person_id' => 743,
                'character' => 'Jacques',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            358 => 
            array (
                'cast_id' => 1384,
                'movie_id' => 138,
                'person_id' => 571,
                'character' => 'Anchor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            359 => 
            array (
                'cast_id' => 1385,
                'movie_id' => 138,
                'person_id' => 733,
                'character' => 'Fish School',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            360 => 
            array (
                'cast_id' => 1386,
                'movie_id' => 138,
                'person_id' => 757,
                'character' => 'Dory',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            361 => 
            array (
                'cast_id' => 1387,
                'movie_id' => 138,
                'person_id' => 758,
                'character' => 'Nemo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            362 => 
            array (
                'cast_id' => 1388,
                'movie_id' => 138,
                'person_id' => 759,
                'character' => 'Gill',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            363 => 
            array (
                'cast_id' => 1389,
                'movie_id' => 138,
                'person_id' => 760,
                'character' => 'Bloat',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            364 => 
            array (
                'cast_id' => 1390,
                'movie_id' => 138,
                'person_id' => 761,
                'character' => 'Nigel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            365 => 
            array (
                'cast_id' => 1391,
                'movie_id' => 138,
                'person_id' => 762,
                'character' => 'Coral',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            366 => 
            array (
                'cast_id' => 1392,
                'movie_id' => 138,
                'person_id' => 763,
                'character' => 'Bruce',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            367 => 
            array (
                'cast_id' => 1393,
                'movie_id' => 138,
                'person_id' => 764,
                'character' => 'Chum',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            368 => 
            array (
                'cast_id' => 1394,
                'movie_id' => 139,
                'person_id' => 332,
                'character' => 'Elsa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            369 => 
            array (
                'cast_id' => 1395,
                'movie_id' => 139,
                'person_id' => 428,
                'character' => 'Duke',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            370 => 
            array (
                'cast_id' => 1396,
                'movie_id' => 139,
                'person_id' => 567,
                'character' => 'Sven',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            371 => 
            array (
                'cast_id' => 1397,
                'movie_id' => 139,
                'person_id' => 765,
                'character' => 'Anna',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            372 => 
            array (
                'cast_id' => 1398,
                'movie_id' => 139,
                'person_id' => 766,
                'character' => 'Kristoff',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            373 => 
            array (
                'cast_id' => 1399,
                'movie_id' => 139,
                'person_id' => 767,
                'character' => 'Olaf',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            374 => 
            array (
                'cast_id' => 1400,
                'movie_id' => 139,
                'person_id' => 768,
                'character' => 'Hans',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            375 => 
            array (
                'cast_id' => 1401,
                'movie_id' => 139,
                'person_id' => 769,
                'character' => 'Oaken',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            376 => 
            array (
                'cast_id' => 1402,
                'movie_id' => 140,
                'person_id' => 97,
                'character' => 'Lucius Best / Frozone',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            377 => 
            array (
                'cast_id' => 1403,
                'movie_id' => 140,
                'person_id' => 399,
                'character' => 'Gilbert Huph',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            378 => 
            array (
                'cast_id' => 1404,
                'movie_id' => 140,
                'person_id' => 733,
                'character' => 'Underminer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            379 => 
            array (
                'cast_id' => 1405,
                'movie_id' => 140,
                'person_id' => 743,
                'character' => 'Additional Voices',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            380 => 
            array (
                'cast_id' => 1406,
                'movie_id' => 140,
                'person_id' => 770,
                'character' => 'Mr Incredible',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            381 => 
            array (
                'cast_id' => 1407,
                'movie_id' => 140,
                'person_id' => 771,
                'character' => 'Helen Parr  Elastigirl',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            382 => 
            array (
                'cast_id' => 1408,
                'movie_id' => 140,
                'person_id' => 772,
                'character' => 'Buddy Pine  Syndrome',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            383 => 
            array (
                'cast_id' => 1409,
                'movie_id' => 140,
                'person_id' => 773,
                'character' => 'Bernie Kropp',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            384 => 
            array (
                'cast_id' => 1414,
                'movie_id' => 140,
                'person_id' => 774,
                'character' => 'Mirage',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            385 => 
            array (
                'cast_id' => 1415,
                'movie_id' => 140,
                'person_id' => 775,
                'character' => 'Violet Parr',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            386 => 
            array (
                'cast_id' => 1416,
                'movie_id' => 140,
                'person_id' => 776,
                'character' => 'Edna \'E\' Mode',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            387 => 
            array (
                'cast_id' => 1417,
                'movie_id' => 140,
                'person_id' => 777,
                'character' => 'Dashiell Dash Parr',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            388 => 
            array (
                'cast_id' => 1418,
                'movie_id' => 141,
                'person_id' => 778,
                'character' => 'Darling  Si  Am  Peg',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            389 => 
            array (
                'cast_id' => 1419,
                'movie_id' => 141,
                'person_id' => 779,
                'character' => 'Aunt Sarah',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            390 => 
            array (
                'cast_id' => 1420,
                'movie_id' => 200,
                'person_id' => 396,
                'character' => 'Axel Foley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            391 => 
            array (
                'cast_id' => 1421,
                'movie_id' => 200,
                'person_id' => 33,
                'character' => 'Jeffrey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            392 => 
            array (
                'cast_id' => 1422,
                'movie_id' => 200,
                'person_id' => 780,
                'character' => 'Det Billy Rosewood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            393 => 
            array (
                'cast_id' => 1423,
                'movie_id' => 200,
                'person_id' => 781,
                'character' => 'Sgt Taggart',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            394 => 
            array (
                'cast_id' => 1424,
                'movie_id' => 200,
                'person_id' => 782,
                'character' => 'Jenny Summers',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            395 => 
            array (
                'cast_id' => 1425,
                'movie_id' => 200,
                'person_id' => 783,
                'character' => 'Lt Bogomil',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            396 => 
            array (
                'cast_id' => 1426,
                'movie_id' => 200,
                'person_id' => 784,
                'character' => 'Victor Maitland',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            397 => 
            array (
                'cast_id' => 1427,
                'movie_id' => 200,
                'person_id' => 785,
                'character' => 'Mikey Tandino',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            398 => 
            array (
                'cast_id' => 1428,
                'movie_id' => 200,
                'person_id' => 786,
                'character' => 'Zack',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            399 => 
            array (
                'cast_id' => 1429,
                'movie_id' => 200,
                'person_id' => 787,
                'character' => 'Inspector Todd',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            400 => 
            array (
                'cast_id' => 1430,
                'movie_id' => 200,
                'person_id' => 788,
                'character' => 'Banana Man',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            401 => 
            array (
                'cast_id' => 1431,
                'movie_id' => 201,
                'person_id' => 396,
                'character' => 'Axel Foley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            402 => 
            array (
                'cast_id' => 1432,
                'movie_id' => 201,
                'person_id' => 780,
                'character' => 'Billy Rosewood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            403 => 
            array (
                'cast_id' => 1433,
                'movie_id' => 201,
                'person_id' => 783,
                'character' => 'Andrew Bogomil',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            404 => 
            array (
                'cast_id' => 1434,
                'movie_id' => 201,
                'person_id' => 781,
                'character' => 'John Taggart',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            405 => 
            array (
                'cast_id' => 1435,
                'movie_id' => 201,
                'person_id' => 301,
                'character' => 'Chip Cain',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            406 => 
            array (
                'cast_id' => 1436,
                'movie_id' => 201,
                'person_id' => 33,
                'character' => 'Jeffrey Friedman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            407 => 
            array (
                'cast_id' => 1437,
                'movie_id' => 201,
                'person_id' => 787,
                'character' => 'Inspector Todd',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            408 => 
            array (
                'cast_id' => 1438,
                'movie_id' => 201,
                'person_id' => 302,
                'character' => 'Nikos Thomopolis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            409 => 
            array (
                'cast_id' => 1439,
                'movie_id' => 201,
                'person_id' => 789,
                'character' => 'Maxwell Dent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            410 => 
            array (
                'cast_id' => 1440,
                'movie_id' => 201,
                'person_id' => 790,
                'character' => 'Karla Fry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            411 => 
            array (
                'cast_id' => 1441,
                'movie_id' => 201,
                'person_id' => 791,
                'character' => 'Parking Valet',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            412 => 
            array (
                'cast_id' => 1442,
                'movie_id' => 202,
                'person_id' => 396,
                'character' => 'Det. Axel Foley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            413 => 
            array (
                'cast_id' => 1443,
                'movie_id' => 202,
                'person_id' => 787,
                'character' => 'Insp. Douglas Todd',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            414 => 
            array (
                'cast_id' => 1444,
                'movie_id' => 202,
                'person_id' => 780,
                'character' => 'Det. Sgt. William \'Billy\' Rosewood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            415 => 
            array (
                'cast_id' => 1445,
                'movie_id' => 202,
                'person_id' => 88,
                'character' => 'Disappointed Man',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            416 => 
            array (
                'cast_id' => 1446,
                'movie_id' => 202,
                'person_id' => 792,
                'character' => 'Levine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            417 => 
            array (
                'cast_id' => 1447,
                'movie_id' => 202,
                'person_id' => 793,
                'character' => 'Ellis De Wald',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            418 => 
            array (
                'cast_id' => 1448,
                'movie_id' => 202,
                'person_id' => 794,
                'character' => 'Uncle Dave Thornton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            419 => 
            array (
                'cast_id' => 1449,
                'movie_id' => 202,
                'person_id' => 795,
                'character' => 'Janice',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            420 => 
            array (
                'cast_id' => 1450,
                'movie_id' => 203,
                'person_id' => 533,
                'character' => 'Josh',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            421 => 
            array (
                'cast_id' => 1451,
                'movie_id' => 203,
                'person_id' => 762,
                'character' => 'Susan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            422 => 
            array (
                'cast_id' => 1452,
                'movie_id' => 203,
                'person_id' => 796,
                'character' => 'MacMillan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            423 => 
            array (
                'cast_id' => 1453,
                'movie_id' => 203,
                'person_id' => 797,
                'character' => 'Paul',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            424 => 
            array (
                'cast_id' => 1454,
                'movie_id' => 203,
                'person_id' => 798,
                'character' => 'Billy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            425 => 
            array (
                'cast_id' => 1455,
                'movie_id' => 204,
                'person_id' => 443,
                'character' => 'The Dude',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            426 => 
            array (
                'cast_id' => 1456,
                'movie_id' => 204,
                'person_id' => 148,
                'character' => 'Walter Sobchak',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            427 => 
            array (
                'cast_id' => 1457,
                'movie_id' => 204,
                'person_id' => 101,
                'character' => 'Maude Lebowski',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            428 => 
            array (
                'cast_id' => 1458,
                'movie_id' => 204,
                'person_id' => 421,
                'character' => 'Brandt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            429 => 
            array (
                'cast_id' => 1459,
                'movie_id' => 204,
                'person_id' => 103,
                'character' => 'Nihilist #1',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            430 => 
            array (
                'cast_id' => 1460,
                'movie_id' => 204,
                'person_id' => 170,
                'character' => 'Nihilist #2',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            431 => 
            array (
                'cast_id' => 1461,
                'movie_id' => 204,
                'person_id' => 615,
                'character' => 'Jesus Quintana',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            432 => 
            array (
                'cast_id' => 1462,
                'movie_id' => 204,
                'person_id' => 452,
                'character' => 'Knox Harrington',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            433 => 
            array (
                'cast_id' => 1463,
                'movie_id' => 204,
                'person_id' => 799,
                'character' => 'Donny',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            434 => 
            array (
                'cast_id' => 1464,
                'movie_id' => 204,
                'person_id' => 800,
                'character' => 'The Big Lebowski',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            435 => 
            array (
                'cast_id' => 1465,
                'movie_id' => 204,
                'person_id' => 801,
                'character' => 'Bunny Lebowski',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            436 => 
            array (
                'cast_id' => 1466,
                'movie_id' => 204,
                'person_id' => 802,
                'character' => 'Blond Treehorn Thug',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            437 => 
            array (
                'cast_id' => 1467,
                'movie_id' => 204,
                'person_id' => 803,
                'character' => 'The Stranger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            438 => 
            array (
                'cast_id' => 1468,
                'movie_id' => 205,
                'person_id' => 335,
                'character' => 'Jack Burton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            439 => 
            array (
                'cast_id' => 1469,
                'movie_id' => 205,
                'person_id' => 289,
                'character' => 'Wing Kong Man - Extra',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            440 => 
            array (
                'cast_id' => 1470,
                'movie_id' => 205,
                'person_id' => 804,
                'character' => 'Gracie Law',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            441 => 
            array (
                'cast_id' => 1471,
                'movie_id' => 205,
                'person_id' => 805,
                'character' => 'David Lo Pan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            442 => 
            array (
                'cast_id' => 1472,
                'movie_id' => 205,
                'person_id' => 806,
                'character' => 'Egg Shen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            443 => 
            array (
                'cast_id' => 1473,
                'movie_id' => 205,
                'person_id' => 807,
                'character' => 'Margo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            444 => 
            array (
                'cast_id' => 1474,
                'movie_id' => 206,
                'person_id' => 1,
                'character' => 'Ted \'Theodore\' Logan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            445 => 
            array (
                'cast_id' => 1475,
                'movie_id' => 206,
                'person_id' => 749,
                'character' => 'Rufus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            446 => 
            array (
                'cast_id' => 1476,
                'movie_id' => 206,
                'person_id' => 629,
                'character' => 'Billy the Kid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            447 => 
            array (
                'cast_id' => 1477,
                'movie_id' => 206,
                'person_id' => 808,
                'character' => 'Bill S. Preston',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            448 => 
            array (
                'cast_id' => 1478,
                'movie_id' => 207,
                'person_id' => 1,
                'character' => 'Ted',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            449 => 
            array (
                'cast_id' => 1479,
                'movie_id' => 207,
                'person_id' => 808,
                'character' => 'Bill',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            450 => 
            array (
                'cast_id' => 1480,
                'movie_id' => 207,
                'person_id' => 463,
                'character' => 'Grim Reaper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            451 => 
            array (
                'cast_id' => 1481,
                'movie_id' => 207,
                'person_id' => 749,
                'character' => 'Rufus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            452 => 
            array (
                'cast_id' => 1482,
                'movie_id' => 207,
                'person_id' => 567,
                'character' => 'The Devil',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            453 => 
            array (
                'cast_id' => 1483,
                'movie_id' => 207,
                'person_id' => 809,
                'character' => 'De Nomolos',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            454 => 
            array (
                'cast_id' => 1484,
                'movie_id' => 207,
                'person_id' => 810,
                'character' => 'Ms Wardroe',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            455 => 
            array (
                'cast_id' => 1485,
                'movie_id' => 207,
                'person_id' => 811,
                'character' => 'Missy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            456 => 
            array (
                'cast_id' => 1486,
                'movie_id' => 207,
                'person_id' => 812,
                'character' => 'Captain Logan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            457 => 
            array (
                'cast_id' => 1487,
                'movie_id' => 208,
                'person_id' => 673,
                'character' => 'Albert Diggs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            458 => 
            array (
                'cast_id' => 1488,
                'movie_id' => 208,
                'person_id' => 813,
                'character' => 'Rick Jarmin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            459 => 
            array (
                'cast_id' => 1489,
                'movie_id' => 208,
                'person_id' => 814,
                'character' => 'Marianne Graves',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            460 => 
            array (
                'cast_id' => 1490,
                'movie_id' => 208,
                'person_id' => 815,
                'character' => 'Eugene Sorenson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            461 => 
            array (
                'cast_id' => 1491,
                'movie_id' => 208,
                'person_id' => 816,
                'character' => 'Joe Weyburn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            462 => 
            array (
                'cast_id' => 1492,
                'movie_id' => 209,
                'person_id' => 25,
                'character' => 'Cathy Brenner',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            463 => 
            array (
                'cast_id' => 1493,
                'movie_id' => 209,
                'person_id' => 817,
                'character' => 'Melanie Daniels',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            464 => 
            array (
                'cast_id' => 1494,
                'movie_id' => 209,
                'person_id' => 818,
                'character' => 'Mitch Brenner',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            465 => 
            array (
                'cast_id' => 1495,
                'movie_id' => 209,
                'person_id' => 819,
                'character' => 'Lydia Brenner',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            466 => 
            array (
                'cast_id' => 1496,
                'movie_id' => 210,
                'person_id' => 11,
                'character' => 'George Jung',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            467 => 
            array (
                'cast_id' => 1497,
                'movie_id' => 210,
                'person_id' => 178,
                'character' => 'Barbara Buckley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            468 => 
            array (
                'cast_id' => 1498,
                'movie_id' => 210,
                'person_id' => 566,
                'character' => 'Derek Foreal',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            469 => 
            array (
                'cast_id' => 1499,
                'movie_id' => 210,
                'person_id' => 709,
                'character' => 'Augusto Oliveras',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            470 => 
            array (
                'cast_id' => 1500,
                'movie_id' => 210,
                'person_id' => 820,
                'character' => 'Mirtha Jung',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            471 => 
            array (
                'cast_id' => 1501,
                'movie_id' => 210,
                'person_id' => 821,
                'character' => 'Mr T',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            472 => 
            array (
                'cast_id' => 1502,
                'movie_id' => 211,
                'person_id' => 14,
                'character' => 'Elwood Blues',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            473 => 
            array (
                'cast_id' => 1503,
                'movie_id' => 211,
                'person_id' => 81,
                'character' => 'Mystery Woman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            474 => 
            array (
                'cast_id' => 1504,
                'movie_id' => 211,
                'person_id' => 305,
                'character' => 'Corrections Officer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            475 => 
            array (
                'cast_id' => 1505,
                'movie_id' => 211,
                'person_id' => 566,
                'character' => 'Waiter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            476 => 
            array (
                'cast_id' => 1506,
                'movie_id' => 211,
                'person_id' => 105,
                'character' => 'Cook County Assessor\'s Office Clerk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            477 => 
            array (
                'cast_id' => 1507,
                'movie_id' => 211,
                'person_id' => 822,
                'character' => 'Joliet Jake Blues',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            478 => 
            array (
                'cast_id' => 1508,
                'movie_id' => 211,
                'person_id' => 823,
                'character' => 'Reverend Cleophus James',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            479 => 
            array (
                'cast_id' => 1509,
                'movie_id' => 211,
                'person_id' => 824,
                'character' => 'Burton Mercer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            480 => 
            array (
                'cast_id' => 1510,
                'movie_id' => 213,
                'person_id' => 825,
                'character' => 'Judy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            481 => 
            array (
                'cast_id' => 1511,
                'movie_id' => 214,
                'person_id' => 71,
                'character' => 'Furious Styles',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            482 => 
            array (
                'cast_id' => 1512,
                'movie_id' => 214,
                'person_id' => 826,
                'character' => 'Reva Styles',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            483 => 
            array (
                'cast_id' => 1513,
                'movie_id' => 214,
                'person_id' => 827,
                'character' => 'Doughboy  Darren',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            484 => 
            array (
                'cast_id' => 1514,
                'movie_id' => 214,
                'person_id' => 828,
                'character' => 'Tre Styles',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            485 => 
            array (
                'cast_id' => 1515,
                'movie_id' => 214,
                'person_id' => 829,
                'character' => 'Shalika',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            486 => 
            array (
                'cast_id' => 1516,
                'movie_id' => 214,
                'person_id' => 830,
                'character' => 'Brandi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            487 => 
            array (
                'cast_id' => 1517,
                'movie_id' => 215,
                'person_id' => 181,
                'character' => 'Argyle Wallace',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            488 => 
            array (
                'cast_id' => 1518,
                'movie_id' => 215,
                'person_id' => 813,
                'character' => 'William Wallace',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            489 => 
            array (
                'cast_id' => 1519,
                'movie_id' => 215,
                'person_id' => 390,
                'character' => 'Hamish',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            490 => 
            array (
                'cast_id' => 1520,
                'movie_id' => 215,
                'person_id' => 831,
                'character' => 'Longshanks  King Edward I',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            491 => 
            array (
                'cast_id' => 1521,
                'movie_id' => 215,
                'person_id' => 832,
                'character' => 'Campbell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            492 => 
            array (
                'cast_id' => 1522,
                'movie_id' => 215,
                'person_id' => 833,
                'character' => 'Princess Isabelle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            493 => 
            array (
                'cast_id' => 1523,
                'movie_id' => 215,
                'person_id' => 834,
                'character' => 'Stephen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            494 => 
            array (
                'cast_id' => 1524,
                'movie_id' => 216,
                'person_id' => 835,
                'character' => 'Holly Golightly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            495 => 
            array (
                'cast_id' => 1525,
                'movie_id' => 216,
                'person_id' => 836,
                'character' => 'Paul Varjak',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            496 => 
            array (
                'cast_id' => 1526,
                'movie_id' => 216,
                'person_id' => 837,
                'character' => 'Mr Yunioshi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            497 => 
            array (
                'cast_id' => 1527,
                'movie_id' => 217,
                'person_id' => 824,
                'character' => 'Spike Nolan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            498 => 
            array (
                'cast_id' => 1528,
                'movie_id' => 217,
                'person_id' => 352,
                'character' => 'Morty King',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            499 => 
            array (
                'cast_id' => 1529,
                'movie_id' => 217,
                'person_id' => 838,
                'character' => 'Montgomery Brewster',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        \DB::table('cast')->insert(array (
            0 => 
            array (
                'cast_id' => 1530,
                'movie_id' => 217,
                'person_id' => 839,
                'character' => 'Warren Cox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'cast_id' => 1531,
                'movie_id' => 218,
                'person_id' => 12,
                'character' => 'Steve Collins',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'cast_id' => 1532,
                'movie_id' => 218,
                'person_id' => 840,
                'character' => 'Joan Winfield',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'cast_id' => 1533,
                'movie_id' => 219,
                'person_id' => 400,
                'character' => 'Butch Cassidy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'cast_id' => 1534,
                'movie_id' => 219,
                'person_id' => 803,
                'character' => 'Card Player #2',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'cast_id' => 1535,
                'movie_id' => 219,
                'person_id' => 841,
                'character' => 'The Sundance Kid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'cast_id' => 1536,
                'movie_id' => 220,
                'person_id' => 62,
                'character' => 'Rick Blaine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'cast_id' => 1537,
                'movie_id' => 220,
                'person_id' => 842,
                'character' => 'Ilsa Lund',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'cast_id' => 1538,
                'movie_id' => 220,
                'person_id' => 843,
                'character' => 'Ugarte',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'cast_id' => 1539,
                'movie_id' => 220,
                'person_id' => 844,
                'character' => 'Victor Laszlo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'cast_id' => 1540,
                'movie_id' => 220,
                'person_id' => 845,
                'character' => 'Captain Louis Renault',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'cast_id' => 1541,
                'movie_id' => 221,
                'person_id' => 846,
                'character' => 'Sam Ace Rothstein',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'cast_id' => 1542,
                'movie_id' => 221,
                'person_id' => 847,
                'character' => 'Ginger McKenna',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'cast_id' => 1543,
                'movie_id' => 221,
                'person_id' => 848,
                'character' => 'Nicky Santoro',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'cast_id' => 1544,
                'movie_id' => 221,
                'person_id' => 849,
                'character' => 'Lester Diamond',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'cast_id' => 1545,
                'movie_id' => 221,
                'person_id' => 850,
                'character' => 'Frank Marino',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'cast_id' => 1546,
                'movie_id' => 222,
                'person_id' => 835,
                'character' => 'Regina Lampert',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'cast_id' => 1547,
                'movie_id' => 222,
                'person_id' => 851,
                'character' => 'Peter Joshua',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'cast_id' => 1548,
                'movie_id' => 222,
                'person_id' => 852,
                'character' => 'Hamilton Bartholomew',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'cast_id' => 1549,
                'movie_id' => 222,
                'person_id' => 853,
                'character' => 'Tex Panthollow',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'cast_id' => 1550,
                'movie_id' => 222,
                'person_id' => 854,
                'character' => 'Herman Scobie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'cast_id' => 1551,
                'movie_id' => 223,
                'person_id' => 8,
                'character' => 'Dylan Sanders',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'cast_id' => 1552,
                'movie_id' => 223,
                'person_id' => 348,
                'character' => 'John Bosley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'cast_id' => 1553,
                'movie_id' => 223,
                'person_id' => 447,
                'character' => 'Eric Knox / John McKenn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'cast_id' => 1554,
                'movie_id' => 223,
                'person_id' => 19,
                'character' => 'Thin Man',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'cast_id' => 1555,
                'movie_id' => 223,
                'person_id' => 855,
                'character' => 'Natalie Cook',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'cast_id' => 1556,
                'movie_id' => 223,
                'person_id' => 856,
                'character' => 'Alex Munday',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'cast_id' => 1557,
                'movie_id' => 223,
                'person_id' => 857,
                'character' => 'Vivian Wood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'cast_id' => 1558,
                'movie_id' => 223,
                'person_id' => 858,
                'character' => 'Roger Corwin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'cast_id' => 1559,
                'movie_id' => 224,
                'person_id' => 11,
                'character' => 'Willy Wonka',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'cast_id' => 1560,
                'movie_id' => 224,
                'person_id' => 17,
                'character' => 'Mrs. Bucket',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'cast_id' => 1561,
                'movie_id' => 224,
                'person_id' => 694,
                'character' => 'Mrs. Beauregarde',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'cast_id' => 1562,
                'movie_id' => 224,
                'person_id' => 409,
                'character' => 'Dr. Wonka',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'cast_id' => 1563,
                'movie_id' => 224,
                'person_id' => 66,
                'character' => 'Oompa Loompa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'cast_id' => 1564,
                'movie_id' => 224,
                'person_id' => 859,
                'character' => 'Charlie Bucket',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'cast_id' => 1566,
                'movie_id' => 224,
                'person_id' => 860,
                'character' => 'Grandpa Joe',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'cast_id' => 1567,
                'movie_id' => 224,
                'person_id' => 861,
                'character' => 'Violet Beauregarde',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'cast_id' => 1568,
                'movie_id' => 225,
                'person_id' => 550,
                'character' => 'Luke',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'cast_id' => 1569,
                'movie_id' => 225,
                'person_id' => 639,
                'character' => 'Nigel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'cast_id' => 1570,
                'movie_id' => 225,
                'person_id' => 381,
                'character' => 'Miriam',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'cast_id' => 1571,
                'movie_id' => 226,
                'person_id' => 805,
                'character' => 'Evelyn\'s Butler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'cast_id' => 1572,
                'movie_id' => 226,
                'person_id' => 529,
                'character' => 'Curly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'cast_id' => 1573,
                'movie_id' => 226,
                'person_id' => 862,
                'character' => 'JJ Gittes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'cast_id' => 1574,
                'movie_id' => 226,
                'person_id' => 863,
                'character' => 'Evelyn Mulwray',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'cast_id' => 1575,
                'movie_id' => 226,
                'person_id' => 864,
                'character' => 'Noah Cross',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'cast_id' => 1576,
                'movie_id' => 227,
                'person_id' => 72,
                'character' => 'Caroline Clairmont',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'cast_id' => 1577,
                'movie_id' => 227,
                'person_id' => 103,
                'character' => 'Serge Muscat',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            47 => 
            array (
                'cast_id' => 1578,
                'movie_id' => 227,
                'person_id' => 11,
                'character' => 'Roux',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            48 => 
            array (
                'cast_id' => 1579,
                'movie_id' => 227,
                'person_id' => 865,
                'character' => 'Comte de Reynaud',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            49 => 
            array (
                'cast_id' => 1580,
                'movie_id' => 227,
                'person_id' => 866,
                'character' => 'Vianne Rocher',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            50 => 
            array (
                'cast_id' => 1581,
                'movie_id' => 227,
                'person_id' => 867,
                'character' => 'Armande Voizin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            51 => 
            array (
                'cast_id' => 1584,
                'movie_id' => 228,
                'person_id' => 868,
                'character' => 'Salvatore Tot Di Vita  Teenager',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            52 => 
            array (
                'cast_id' => 1585,
                'movie_id' => 228,
                'person_id' => 869,
                'character' => 'Salvatore Tot Di Vita  Child',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            53 => 
            array (
                'cast_id' => 1586,
                'movie_id' => 228,
                'person_id' => 870,
                'character' => 'Salvatore Tot Di Vita  Adult',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            54 => 
            array (
                'cast_id' => 1587,
                'movie_id' => 228,
                'person_id' => 871,
                'character' => 'Alfredo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            55 => 
            array (
                'cast_id' => 1588,
                'movie_id' => 229,
                'person_id' => 872,
                'character' => 'Anglica',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            56 => 
            array (
                'cast_id' => 1589,
                'movie_id' => 230,
                'person_id' => 151,
                'character' => 'Perseus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            57 => 
            array (
                'cast_id' => 1590,
                'movie_id' => 230,
                'person_id' => 198,
                'character' => 'Zeus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            58 => 
            array (
                'cast_id' => 1591,
                'movie_id' => 230,
                'person_id' => 388,
                'character' => 'Hades',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            59 => 
            array (
                'cast_id' => 1592,
                'movie_id' => 230,
                'person_id' => 469,
                'character' => 'Calibos / Acrisius',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            60 => 
            array (
                'cast_id' => 1593,
                'movie_id' => 230,
                'person_id' => 655,
                'character' => 'Eusebios',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            61 => 
            array (
                'cast_id' => 1594,
                'movie_id' => 230,
                'person_id' => 43,
                'character' => 'Spyros',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            62 => 
            array (
                'cast_id' => 1595,
                'movie_id' => 230,
                'person_id' => 470,
                'character' => 'Marmara',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            63 => 
            array (
                'cast_id' => 1596,
                'movie_id' => 230,
                'person_id' => 639,
                'character' => 'Poseidon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            64 => 
            array (
                'cast_id' => 1597,
                'movie_id' => 230,
                'person_id' => 873,
                'character' => 'Io',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            65 => 
            array (
                'cast_id' => 1598,
                'movie_id' => 230,
                'person_id' => 874,
                'character' => 'Andromeda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            66 => 
            array (
                'cast_id' => 1599,
                'movie_id' => 230,
                'person_id' => 875,
                'character' => 'Draco',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            67 => 
            array (
                'cast_id' => 1600,
                'movie_id' => 230,
                'person_id' => 876,
                'character' => 'Apollo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            68 => 
            array (
                'cast_id' => 1601,
                'movie_id' => 230,
                'person_id' => 877,
                'character' => 'Hermes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            69 => 
            array (
                'cast_id' => 1602,
                'movie_id' => 231,
                'person_id' => 722,
                'character' => 'Hudson \'Hud\' Platt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            70 => 
            array (
                'cast_id' => 1603,
                'movie_id' => 231,
                'person_id' => 878,
                'character' => 'Beth McIntyre',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            71 => 
            array (
                'cast_id' => 1604,
                'movie_id' => 232,
                'person_id' => 396,
                'character' => 'Prince Akeem',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            72 => 
            array (
                'cast_id' => 1605,
                'movie_id' => 232,
                'person_id' => 86,
                'character' => 'King Jaffe Joffer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            73 => 
            array (
                'cast_id' => 1606,
                'movie_id' => 232,
                'person_id' => 703,
                'character' => 'Queen Aoleon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            74 => 
            array (
                'cast_id' => 1607,
                'movie_id' => 232,
                'person_id' => 97,
                'character' => 'Hold-Up Man',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            75 => 
            array (
                'cast_id' => 1608,
                'movie_id' => 232,
                'person_id' => 828,
                'character' => 'Boy Getting Haircut',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            76 => 
            array (
                'cast_id' => 1609,
                'movie_id' => 232,
                'person_id' => 879,
                'character' => 'Semmi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            77 => 
            array (
                'cast_id' => 1610,
                'movie_id' => 232,
                'person_id' => 880,
                'character' => 'Cleo McDowell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            78 => 
            array (
                'cast_id' => 1611,
                'movie_id' => 232,
                'person_id' => 881,
                'character' => 'Lisa McDowell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            79 => 
            array (
                'cast_id' => 1612,
                'movie_id' => 232,
                'person_id' => 882,
                'character' => 'Mortimer Duke',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            80 => 
            array (
                'cast_id' => 1613,
                'movie_id' => 232,
                'person_id' => 883,
                'character' => 'Randolph Duke',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            81 => 
            array (
                'cast_id' => 1614,
                'movie_id' => 233,
                'person_id' => 593,
                'character' => 'John Matrix',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            82 => 
            array (
                'cast_id' => 1615,
                'movie_id' => 233,
                'person_id' => 49,
                'character' => 'Arius',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            83 => 
            array (
                'cast_id' => 1616,
                'movie_id' => 233,
                'person_id' => 673,
                'character' => 'Cooke',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            84 => 
            array (
                'cast_id' => 1617,
                'movie_id' => 233,
                'person_id' => 35,
                'character' => 'Intercept Officer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            85 => 
            array (
                'cast_id' => 1618,
                'movie_id' => 233,
                'person_id' => 884,
                'character' => 'Cindy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            86 => 
            array (
                'cast_id' => 1619,
                'movie_id' => 233,
                'person_id' => 885,
                'character' => 'Jenny Matrix',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            87 => 
            array (
                'cast_id' => 1620,
                'movie_id' => 233,
                'person_id' => 886,
                'character' => 'Bennett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            88 => 
            array (
                'cast_id' => 1621,
                'movie_id' => 234,
                'person_id' => 423,
                'character' => 'Young Ellie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            89 => 
            array (
                'cast_id' => 1622,
                'movie_id' => 234,
                'person_id' => 635,
                'character' => 'Ted Arroway',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            90 => 
            array (
                'cast_id' => 1623,
                'movie_id' => 234,
                'person_id' => 24,
                'character' => 'David Drumlin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            91 => 
            array (
                'cast_id' => 1624,
                'movie_id' => 234,
                'person_id' => 849,
                'character' => 'Michael Kitz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            92 => 
            array (
                'cast_id' => 1625,
                'movie_id' => 234,
                'person_id' => 826,
                'character' => 'Rachel Constantine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            93 => 
            array (
                'cast_id' => 1626,
                'movie_id' => 234,
                'person_id' => 27,
                'character' => 'S.R. Hadden',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            94 => 
            array (
                'cast_id' => 1627,
                'movie_id' => 234,
                'person_id' => 887,
                'character' => 'Eleanor Arroway',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            95 => 
            array (
                'cast_id' => 1628,
                'movie_id' => 234,
                'person_id' => 888,
                'character' => 'Fisher',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            96 => 
            array (
                'cast_id' => 1629,
                'movie_id' => 234,
                'person_id' => 889,
                'character' => 'Kent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            97 => 
            array (
                'cast_id' => 1630,
                'movie_id' => 234,
                'person_id' => 890,
                'character' => 'Palmer Joss',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            98 => 
            array (
                'cast_id' => 1631,
                'movie_id' => 234,
                'person_id' => 891,
                'character' => 'Richard Rank',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            99 => 
            array (
                'cast_id' => 1632,
                'movie_id' => 234,
                'person_id' => 892,
                'character' => 'Joseph',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            100 => 
            array (
                'cast_id' => 1633,
                'movie_id' => 235,
                'person_id' => 1,
                'character' => 'John Constantine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            101 => 
            array (
                'cast_id' => 1634,
                'movie_id' => 235,
                'person_id' => 457,
                'character' => 'Chas Kramer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            102 => 
            array (
                'cast_id' => 1635,
                'movie_id' => 235,
                'person_id' => 360,
                'character' => 'Midnite',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            103 => 
            array (
                'cast_id' => 1636,
                'movie_id' => 235,
                'person_id' => 103,
                'character' => 'Satan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            104 => 
            array (
                'cast_id' => 1637,
                'movie_id' => 235,
                'person_id' => 552,
                'character' => 'Ellie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            105 => 
            array (
                'cast_id' => 1638,
                'movie_id' => 235,
                'person_id' => 893,
                'character' => 'Angela Dodson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            106 => 
            array (
                'cast_id' => 1639,
                'movie_id' => 235,
                'person_id' => 894,
                'character' => 'Gabriel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            107 => 
            array (
                'cast_id' => 1640,
                'movie_id' => 236,
                'person_id' => 824,
                'character' => 'Irv',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            108 => 
            array (
                'cast_id' => 1641,
                'movie_id' => 236,
                'person_id' => 895,
                'character' => 'Derice Bannock',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            109 => 
            array (
                'cast_id' => 1642,
                'movie_id' => 236,
                'person_id' => 896,
                'character' => 'Sanka Coffie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            110 => 
            array (
                'cast_id' => 1643,
                'movie_id' => 236,
                'person_id' => 897,
                'character' => 'Kurt Hemphill',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            111 => 
            array (
                'cast_id' => 1644,
                'movie_id' => 237,
                'person_id' => 528,
                'character' => 'Freddy Heflin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            112 => 
            array (
                'cast_id' => 1645,
                'movie_id' => 237,
                'person_id' => 846,
                'character' => 'Moe Tilden',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            113 => 
            array (
                'cast_id' => 1646,
                'movie_id' => 237,
                'person_id' => 283,
                'character' => 'Joey Randone',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            114 => 
            array (
                'cast_id' => 1647,
                'movie_id' => 237,
                'person_id' => 596,
                'character' => 'Jack Rucker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            115 => 
            array (
                'cast_id' => 1648,
                'movie_id' => 237,
                'person_id' => 850,
                'character' => 'PDA President Lassaro',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            116 => 
            array (
                'cast_id' => 1649,
                'movie_id' => 237,
                'person_id' => 898,
                'character' => 'Ray Donlan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            117 => 
            array (
                'cast_id' => 1650,
                'movie_id' => 237,
                'person_id' => 899,
                'character' => 'Gary Figgis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            118 => 
            array (
                'cast_id' => 1651,
                'movie_id' => 237,
                'person_id' => 900,
                'character' => 'Murray Babitch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            119 => 
            array (
                'cast_id' => 1652,
                'movie_id' => 237,
                'person_id' => 901,
                'character' => 'Deputy Bill Geisler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            120 => 
            array (
                'cast_id' => 1653,
                'movie_id' => 238,
                'person_id' => 446,
                'character' => 'Det. Graham Waters',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            121 => 
            array (
                'cast_id' => 1654,
                'movie_id' => 238,
                'person_id' => 889,
                'character' => 'Flanagan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            122 => 
            array (
                'cast_id' => 1655,
                'movie_id' => 238,
                'person_id' => 442,
                'character' => 'Cameron Thayer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            123 => 
            array (
                'cast_id' => 1656,
                'movie_id' => 238,
                'person_id' => 902,
                'character' => 'Jean Cabot',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            124 => 
            array (
                'cast_id' => 1658,
                'movie_id' => 238,
                'person_id' => 903,
                'character' => 'Lt Dixon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            125 => 
            array (
                'cast_id' => 1659,
                'movie_id' => 238,
                'person_id' => 904,
                'character' => 'Officer John Ryan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            126 => 
            array (
                'cast_id' => 1660,
                'movie_id' => 238,
                'person_id' => 905,
                'character' => 'Ria',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            127 => 
            array (
                'cast_id' => 1661,
                'movie_id' => 238,
                'person_id' => 906,
                'character' => 'Rick Cabot',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            128 => 
            array (
                'cast_id' => 1662,
                'movie_id' => 238,
                'person_id' => 907,
                'character' => 'Christine Thayer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            129 => 
            array (
                'cast_id' => 1663,
                'movie_id' => 238,
                'person_id' => 908,
                'character' => 'Daniel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            130 => 
            array (
                'cast_id' => 1664,
                'movie_id' => 238,
                'person_id' => 909,
                'character' => 'Officer Tom Hansen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            131 => 
            array (
                'cast_id' => 1665,
                'movie_id' => 238,
                'person_id' => 910,
                'character' => 'Shereen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            132 => 
            array (
                'cast_id' => 1666,
                'movie_id' => 239,
                'person_id' => 267,
                'character' => 'Lt. Peter \'Weps\' Ince',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            133 => 
            array (
                'cast_id' => 1667,
                'movie_id' => 239,
                'person_id' => 143,
                'character' => 'Petty Officer First Class Danny Rivetti',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            134 => 
            array (
                'cast_id' => 1668,
                'movie_id' => 239,
                'person_id' => 909,
                'character' => 'Seaman Grattam',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            135 => 
            array (
                'cast_id' => 1669,
                'movie_id' => 239,
                'person_id' => 911,
                'character' => 'Lt Commander Ron Hunter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            136 => 
            array (
                'cast_id' => 1670,
                'movie_id' => 239,
                'person_id' => 912,
                'character' => 'Capt Frank Ramsey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            137 => 
            array (
                'cast_id' => 1671,
                'movie_id' => 239,
                'person_id' => 913,
                'character' => 'Lt Bobby Dougherty',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            138 => 
            array (
                'cast_id' => 1672,
                'movie_id' => 239,
                'person_id' => 914,
                'character' => 'William Barnes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            139 => 
            array (
                'cast_id' => 1673,
                'movie_id' => 240,
                'person_id' => 533,
                'character' => 'Robert Langdon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            140 => 
            array (
                'cast_id' => 1674,
                'movie_id' => 240,
                'person_id' => 479,
                'character' => 'Sir Leigh Teabing',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            141 => 
            array (
                'cast_id' => 1675,
                'movie_id' => 240,
                'person_id' => 132,
                'character' => 'Silas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            142 => 
            array (
                'cast_id' => 1676,
                'movie_id' => 240,
                'person_id' => 865,
                'character' => 'Bishop Manuel Aringarosa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            143 => 
            array (
                'cast_id' => 1677,
                'movie_id' => 240,
                'person_id' => 789,
                'character' => 'Andre Vernet',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            144 => 
            array (
                'cast_id' => 1678,
                'movie_id' => 240,
                'person_id' => 915,
                'character' => 'Sophie Neveu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            145 => 
            array (
                'cast_id' => 1679,
                'movie_id' => 240,
                'person_id' => 916,
                'character' => 'Captain Bezu Fache',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            146 => 
            array (
                'cast_id' => 1680,
                'movie_id' => 241,
                'person_id' => 533,
                'character' => 'Robert Langdon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            147 => 
            array (
                'cast_id' => 1681,
                'movie_id' => 241,
                'person_id' => 432,
                'character' => 'Camerlengo Patrick McKenna',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            148 => 
            array (
                'cast_id' => 1682,
                'movie_id' => 241,
                'person_id' => 130,
                'character' => 'Commander Richter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            149 => 
            array (
                'cast_id' => 1683,
                'movie_id' => 241,
                'person_id' => 917,
                'character' => 'Inspector Olivetti',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            150 => 
            array (
                'cast_id' => 1684,
                'movie_id' => 241,
                'person_id' => 918,
                'character' => 'Cardinal Strauss',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            151 => 
            array (
                'cast_id' => 1685,
                'movie_id' => 241,
                'person_id' => 919,
                'character' => 'Vittoria Vetra',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            152 => 
            array (
                'cast_id' => 1686,
                'movie_id' => 242,
                'person_id' => 1,
                'character' => 'Jack Traven',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            153 => 
            array (
                'cast_id' => 1687,
                'movie_id' => 242,
                'person_id' => 902,
                'character' => 'Annie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            154 => 
            array (
                'cast_id' => 1688,
                'movie_id' => 242,
                'person_id' => 598,
                'character' => 'Capt. McMahon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            155 => 
            array (
                'cast_id' => 1689,
                'movie_id' => 242,
                'person_id' => 473,
                'character' => 'Harry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            156 => 
            array (
                'cast_id' => 1690,
                'movie_id' => 242,
                'person_id' => 104,
                'character' => 'Train Driver',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            157 => 
            array (
                'cast_id' => 1691,
                'movie_id' => 242,
                'person_id' => 25,
                'character' => 'Bag Lady',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            158 => 
            array (
                'cast_id' => 1692,
                'movie_id' => 242,
                'person_id' => 920,
                'character' => 'Howard Payne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            159 => 
            array (
                'cast_id' => 1693,
                'movie_id' => 243,
                'person_id' => 594,
                'character' => 'Rachel Wando',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            160 => 
            array (
                'cast_id' => 1694,
                'movie_id' => 243,
                'person_id' => 921,
                'character' => 'Harry Dalton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            161 => 
            array (
                'cast_id' => 1695,
                'movie_id' => 243,
                'person_id' => 922,
                'character' => 'Greg',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            162 => 
            array (
                'cast_id' => 1696,
                'movie_id' => 244,
                'person_id' => 677,
                'character' => 'Dr. Daniel P. Schreber',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            163 => 
            array (
                'cast_id' => 1697,
                'movie_id' => 244,
                'person_id' => 764,
                'character' => 'Mr. Wall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            164 => 
            array (
                'cast_id' => 1698,
                'movie_id' => 244,
                'person_id' => 485,
                'character' => 'Schreber\'s Assistant',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            165 => 
            array (
                'cast_id' => 1699,
                'movie_id' => 244,
                'person_id' => 923,
                'character' => 'John Murdoch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            166 => 
            array (
                'cast_id' => 1700,
                'movie_id' => 244,
                'person_id' => 924,
                'character' => 'Inspector Frank Bumstead',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            167 => 
            array (
                'cast_id' => 1701,
                'movie_id' => 244,
                'person_id' => 925,
                'character' => 'Emma Murdoch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            168 => 
            array (
                'cast_id' => 1702,
                'movie_id' => 244,
                'person_id' => 926,
                'character' => 'Mr Hand',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            169 => 
            array (
                'cast_id' => 1703,
                'movie_id' => 244,
                'person_id' => 927,
                'character' => 'May',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            170 => 
            array (
                'cast_id' => 1704,
                'movie_id' => 245,
                'person_id' => 551,
                'character' => 'Sam Hall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            171 => 
            array (
                'cast_id' => 1705,
                'movie_id' => 245,
                'person_id' => 28,
                'character' => 'Terry Rapson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            172 => 
            array (
                'cast_id' => 1706,
                'movie_id' => 245,
                'person_id' => 928,
                'character' => 'Jack Hall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            173 => 
            array (
                'cast_id' => 1707,
                'movie_id' => 245,
                'person_id' => 929,
                'character' => 'Laura Chapman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            174 => 
            array (
                'cast_id' => 1708,
                'movie_id' => 245,
                'person_id' => 930,
                'character' => 'Jason Evans',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            175 => 
            array (
                'cast_id' => 1709,
                'movie_id' => 245,
                'person_id' => 931,
                'character' => 'Frank Harris',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            176 => 
            array (
                'cast_id' => 1710,
                'movie_id' => 245,
                'person_id' => 932,
                'character' => 'Dr Lucy Hall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            177 => 
            array (
                'cast_id' => 1711,
                'movie_id' => 246,
                'person_id' => 528,
                'character' => 'Kit Latura',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            178 => 
            array (
                'cast_id' => 1712,
                'movie_id' => 246,
                'person_id' => 267,
                'character' => 'Roy Nord',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            179 => 
            array (
                'cast_id' => 1713,
                'movie_id' => 246,
                'person_id' => 49,
                'character' => 'Frank Kraft',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            180 => 
            array (
                'cast_id' => 1714,
                'movie_id' => 246,
                'person_id' => 931,
                'character' => 'Steven Crighton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            181 => 
            array (
                'cast_id' => 1715,
                'movie_id' => 246,
                'person_id' => 38,
                'character' => 'Chief Dennis Wilson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            182 => 
            array (
                'cast_id' => 1716,
                'movie_id' => 246,
                'person_id' => 933,
                'character' => 'Madelyne Thompson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            183 => 
            array (
                'cast_id' => 1717,
                'movie_id' => 247,
                'person_id' => 134,
                'character' => 'Billy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            184 => 
            array (
                'cast_id' => 1718,
                'movie_id' => 247,
                'person_id' => 177,
                'character' => 'Colin Sullivan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            185 => 
            array (
                'cast_id' => 1719,
                'movie_id' => 247,
                'person_id' => 862,
                'character' => 'Frank Costello',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            186 => 
            array (
                'cast_id' => 1720,
                'movie_id' => 247,
                'person_id' => 58,
                'character' => 'Queenan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            187 => 
            array (
                'cast_id' => 1721,
                'movie_id' => 247,
                'person_id' => 408,
                'character' => 'Mr. French',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            188 => 
            array (
                'cast_id' => 1722,
                'movie_id' => 247,
                'person_id' => 553,
                'character' => 'Madolyn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            189 => 
            array (
                'cast_id' => 1723,
                'movie_id' => 247,
                'person_id' => 613,
                'character' => 'Trooper Brown',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            190 => 
            array (
                'cast_id' => 1724,
                'movie_id' => 247,
                'person_id' => 834,
                'character' => 'Fitzy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            191 => 
            array (
                'cast_id' => 1725,
                'movie_id' => 247,
                'person_id' => 38,
                'character' => 'Delahunt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            192 => 
            array (
                'cast_id' => 1726,
                'movie_id' => 247,
                'person_id' => 934,
                'character' => 'Dignam',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            193 => 
            array (
                'cast_id' => 1727,
                'movie_id' => 247,
                'person_id' => 935,
                'character' => 'Ellerby',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            194 => 
            array (
                'cast_id' => 1728,
                'movie_id' => 248,
                'person_id' => 18,
                'character' => 'Andy Sachs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            195 => 
            array (
                'cast_id' => 1729,
                'movie_id' => 248,
                'person_id' => 471,
                'character' => 'Emily',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            196 => 
            array (
                'cast_id' => 1730,
                'movie_id' => 248,
                'person_id' => 420,
                'character' => 'Nigel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            197 => 
            array (
                'cast_id' => 1731,
                'movie_id' => 248,
                'person_id' => 936,
                'character' => 'Miranda Priestly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            198 => 
            array (
                'cast_id' => 1732,
                'movie_id' => 248,
                'person_id' => 937,
                'character' => 'Nate',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            199 => 
            array (
                'cast_id' => 1733,
                'movie_id' => 249,
                'person_id' => 67,
                'character' => 'Lt. John McClane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            200 => 
            array (
                'cast_id' => 1734,
                'movie_id' => 249,
                'person_id' => 272,
                'character' => 'Holly McClane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            201 => 
            array (
                'cast_id' => 1735,
                'movie_id' => 249,
                'person_id' => 68,
                'character' => 'Richard Thornburg',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            202 => 
            array (
                'cast_id' => 1736,
                'movie_id' => 249,
                'person_id' => 463,
                'character' => 'Col. Stuart',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            203 => 
            array (
                'cast_id' => 1737,
                'movie_id' => 249,
                'person_id' => 880,
                'character' => 'Maj. Grant',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            204 => 
            array (
                'cast_id' => 1738,
                'movie_id' => 249,
                'person_id' => 596,
                'character' => 'O\'Reilly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            205 => 
            array (
                'cast_id' => 1739,
                'movie_id' => 249,
                'person_id' => 264,
                'character' => 'Burke',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            206 => 
            array (
                'cast_id' => 1740,
                'movie_id' => 249,
                'person_id' => 938,
                'character' => 'Gen Ramon Esperanza',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            207 => 
            array (
                'cast_id' => 1741,
                'movie_id' => 249,
                'person_id' => 939,
                'character' => 'Pilot',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            208 => 
            array (
                'cast_id' => 1742,
                'movie_id' => 250,
                'person_id' => 67,
                'character' => 'John McClane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            209 => 
            array (
                'cast_id' => 1743,
                'movie_id' => 250,
                'person_id' => 700,
                'character' => 'Simon Gruber',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            210 => 
            array (
                'cast_id' => 1744,
                'movie_id' => 250,
                'person_id' => 97,
                'character' => 'Zeus Carver',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            211 => 
            array (
                'cast_id' => 1746,
                'movie_id' => 250,
                'person_id' => 940,
                'character' => 'Joe Lambert',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            212 => 
            array (
                'cast_id' => 1747,
                'movie_id' => 251,
                'person_id' => 100,
                'character' => 'Stan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            213 => 
            array (
                'cast_id' => 1748,
                'movie_id' => 251,
                'person_id' => 941,
                'character' => 'Baby Houseman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            214 => 
            array (
                'cast_id' => 1749,
                'movie_id' => 251,
                'person_id' => 942,
                'character' => 'Johnny Castle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            215 => 
            array (
                'cast_id' => 1750,
                'movie_id' => 252,
                'person_id' => 457,
                'character' => 'Kale',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            216 => 
            array (
                'cast_id' => 1751,
                'movie_id' => 252,
                'person_id' => 72,
                'character' => 'Julie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            217 => 
            array (
                'cast_id' => 1752,
                'movie_id' => 252,
                'person_id' => 635,
                'character' => 'Mr. Turner',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            218 => 
            array (
                'cast_id' => 1753,
                'movie_id' => 252,
                'person_id' => 943,
                'character' => 'Ashley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            219 => 
            array (
                'cast_id' => 1754,
                'movie_id' => 253,
                'person_id' => 80,
                'character' => 'Yevgraf',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            220 => 
            array (
                'cast_id' => 1755,
                'movie_id' => 253,
                'person_id' => 944,
                'character' => 'Yuri',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            221 => 
            array (
                'cast_id' => 1756,
                'movie_id' => 253,
                'person_id' => 945,
                'character' => 'Lara',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            222 => 
            array (
                'cast_id' => 1757,
                'movie_id' => 253,
                'person_id' => 946,
                'character' => 'Komarovsky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            223 => 
            array (
                'cast_id' => 1758,
                'movie_id' => 143,
                'person_id' => 148,
                'character' => 'Sullivan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            224 => 
            array (
                'cast_id' => 1759,
                'movie_id' => 143,
                'person_id' => 799,
                'character' => 'Randy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            225 => 
            array (
                'cast_id' => 1760,
                'movie_id' => 143,
                'person_id' => 734,
                'character' => 'Terry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            226 => 
            array (
                'cast_id' => 1761,
                'movie_id' => 143,
                'person_id' => 865,
                'character' => 'Professor Knight',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            227 => 
            array (
                'cast_id' => 1762,
                'movie_id' => 143,
                'person_id' => 523,
                'character' => 'Greek Council VP',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            228 => 
            array (
                'cast_id' => 1763,
                'movie_id' => 143,
                'person_id' => 542,
                'character' => 'Johnny',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            229 => 
            array (
                'cast_id' => 1764,
                'movie_id' => 143,
                'person_id' => 746,
                'character' => 'Mrs. Graves',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            230 => 
            array (
                'cast_id' => 1765,
                'movie_id' => 143,
                'person_id' => 504,
                'character' => 'Referee / Slug',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            231 => 
            array (
                'cast_id' => 1766,
                'movie_id' => 143,
                'person_id' => 733,
                'character' => 'Yeti',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            232 => 
            array (
                'cast_id' => 1767,
                'movie_id' => 143,
                'person_id' => 947,
                'character' => 'Mike',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            233 => 
            array (
                'cast_id' => 1768,
                'movie_id' => 143,
                'person_id' => 948,
                'character' => 'Dean Hardscrabble',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            234 => 
            array (
                'cast_id' => 1769,
                'movie_id' => 144,
                'person_id' => 148,
                'character' => 'James P. "Sulley" Sullivan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            235 => 
            array (
                'cast_id' => 1770,
                'movie_id' => 144,
                'person_id' => 947,
                'character' => 'Mike Wazowski',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            236 => 
            array (
                'cast_id' => 1771,
                'movie_id' => 144,
                'person_id' => 799,
                'character' => 'Randall Boggs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            237 => 
            array (
                'cast_id' => 1772,
                'movie_id' => 144,
                'person_id' => 853,
                'character' => 'Henry J. Waternoose',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            238 => 
            array (
                'cast_id' => 1773,
                'movie_id' => 144,
                'person_id' => 398,
                'character' => 'Celia',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            239 => 
            array (
                'cast_id' => 1774,
                'movie_id' => 144,
                'person_id' => 733,
                'character' => 'The Abominable Snowman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            240 => 
            array (
                'cast_id' => 1775,
                'movie_id' => 144,
                'person_id' => 305,
                'character' => 'Fungus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            241 => 
            array (
                'cast_id' => 1776,
                'movie_id' => 144,
                'person_id' => 746,
                'character' => 'Flint',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            242 => 
            array (
                'cast_id' => 1778,
                'movie_id' => 144,
                'person_id' => 399,
                'character' => 'Rex',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            243 => 
            array (
                'cast_id' => 1780,
                'movie_id' => 144,
                'person_id' => 949,
                'character' => 'Boo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            244 => 
            array (
                'cast_id' => 1781,
                'movie_id' => 145,
                'person_id' => 66,
            'character' => 'Jack Skellington (singing)',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            245 => 
            array (
                'cast_id' => 1782,
                'movie_id' => 145,
                'person_id' => 566,
                'character' => 'Lock',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            246 => 
            array (
                'cast_id' => 1783,
                'movie_id' => 145,
                'person_id' => 743,
                'character' => 'Igor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            247 => 
            array (
                'cast_id' => 1784,
                'movie_id' => 145,
                'person_id' => 950,
                'character' => 'Jack Skellington',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            248 => 
            array (
                'cast_id' => 1785,
                'movie_id' => 145,
                'person_id' => 951,
                'character' => 'Mayor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            249 => 
            array (
                'cast_id' => 1786,
                'movie_id' => 145,
                'person_id' => 952,
                'character' => 'Oogie Boogie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            250 => 
            array (
                'cast_id' => 1787,
                'movie_id' => 146,
                'person_id' => 903,
                'character' => 'Dr. Facilier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            251 => 
            array (
                'cast_id' => 1788,
                'movie_id' => 146,
                'person_id' => 748,
                'character' => 'Mama Odie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            252 => 
            array (
                'cast_id' => 1789,
                'movie_id' => 146,
                'person_id' => 442,
                'character' => 'James',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            253 => 
            array (
                'cast_id' => 1790,
                'movie_id' => 146,
                'person_id' => 148,
                'character' => '\'Big Daddy\' La Bouff',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            254 => 
            array (
                'cast_id' => 1791,
                'movie_id' => 147,
                'person_id' => 28,
                'character' => 'Skinner',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            255 => 
            array (
                'cast_id' => 1792,
                'movie_id' => 147,
                'person_id' => 773,
                'character' => 'Linguini',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            256 => 
            array (
                'cast_id' => 1793,
                'movie_id' => 147,
                'person_id' => 760,
                'character' => 'Gusteau',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            257 => 
            array (
                'cast_id' => 1794,
                'movie_id' => 147,
                'person_id' => 733,
                'character' => 'Mustafa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            258 => 
            array (
                'cast_id' => 1795,
                'movie_id' => 147,
                'person_id' => 776,
                'character' => 'Ambrister Minion',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            259 => 
            array (
                'cast_id' => 1796,
                'movie_id' => 147,
                'person_id' => 953,
                'character' => 'Remy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            260 => 
            array (
                'cast_id' => 1797,
                'movie_id' => 147,
                'person_id' => 954,
                'character' => 'Anton Ego',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            261 => 
            array (
                'cast_id' => 1798,
                'movie_id' => 147,
                'person_id' => 955,
                'character' => 'Django',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            262 => 
            array (
                'cast_id' => 1799,
                'movie_id' => 147,
                'person_id' => 956,
                'character' => 'Colette',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            263 => 
            array (
                'cast_id' => 1800,
                'movie_id' => 149,
                'person_id' => 46,
                'character' => 'Stabbington Brother',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            264 => 
            array (
                'cast_id' => 1801,
                'movie_id' => 149,
                'person_id' => 514,
                'character' => 'Big Nose Thug',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            265 => 
            array (
                'cast_id' => 1802,
                'movie_id' => 149,
                'person_id' => 760,
                'character' => 'Hook Hand Thug',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            266 => 
            array (
                'cast_id' => 1803,
                'movie_id' => 149,
                'person_id' => 567,
                'character' => 'Pascal / Maximus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            267 => 
            array (
                'cast_id' => 1804,
                'movie_id' => 149,
                'person_id' => 957,
                'character' => 'Rapunzel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            268 => 
            array (
                'cast_id' => 1805,
                'movie_id' => 149,
                'person_id' => 958,
                'character' => 'Flynn Rider',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            269 => 
            array (
                'cast_id' => 1806,
                'movie_id' => 149,
                'person_id' => 959,
                'character' => 'Mother Gothel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            270 => 
            array (
                'cast_id' => 1807,
                'movie_id' => 149,
                'person_id' => 960,
                'character' => 'Vlad',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            271 => 
            array (
                'cast_id' => 1808,
                'movie_id' => 150,
                'person_id' => 533,
                'character' => 'Woody',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            272 => 
            array (
                'cast_id' => 1809,
                'movie_id' => 150,
                'person_id' => 399,
                'character' => 'Rex',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            273 => 
            array (
                'cast_id' => 1810,
                'movie_id' => 150,
                'person_id' => 733,
                'character' => 'Hamm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            274 => 
            array (
                'cast_id' => 1811,
                'movie_id' => 150,
                'person_id' => 353,
                'character' => 'Bo Peep',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            275 => 
            array (
                'cast_id' => 1812,
                'movie_id' => 150,
                'person_id' => 674,
                'character' => 'Sergeant',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            276 => 
            array (
                'cast_id' => 1813,
                'movie_id' => 150,
                'person_id' => 743,
                'character' => 'Lenny the Binoculars',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            277 => 
            array (
                'cast_id' => 1814,
                'movie_id' => 150,
                'person_id' => 701,
                'character' => 'Timon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            278 => 
            array (
                'cast_id' => 1815,
                'movie_id' => 150,
                'person_id' => 706,
                'character' => 'Pumbaa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            279 => 
            array (
                'cast_id' => 1817,
                'movie_id' => 150,
                'person_id' => 961,
                'character' => 'Buzz Lightyear',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            280 => 
            array (
                'cast_id' => 1818,
                'movie_id' => 150,
                'person_id' => 962,
                'character' => 'Mr Potato Head',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            281 => 
            array (
                'cast_id' => 1819,
                'movie_id' => 150,
                'person_id' => 963,
                'character' => 'Andy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            282 => 
            array (
                'cast_id' => 1820,
                'movie_id' => 150,
                'person_id' => 964,
                'character' => 'Mrs Davis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            283 => 
            array (
                'cast_id' => 1821,
                'movie_id' => 150,
                'person_id' => 965,
                'character' => 'Slinky Dog',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            284 => 
            array (
                'cast_id' => 1822,
                'movie_id' => 150,
                'person_id' => 966,
                'character' => 'Sid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            285 => 
            array (
                'cast_id' => 1823,
                'movie_id' => 151,
                'person_id' => 533,
                'character' => 'Woody',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            286 => 
            array (
                'cast_id' => 1824,
                'movie_id' => 151,
                'person_id' => 961,
                'character' => 'Buzz Lightyear',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            287 => 
            array (
                'cast_id' => 1825,
                'movie_id' => 151,
                'person_id' => 665,
                'character' => 'Stinky Pete the Prospector',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            288 => 
            array (
                'cast_id' => 1826,
                'movie_id' => 151,
                'person_id' => 962,
                'character' => 'Mr. Potato Head',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            289 => 
            array (
                'cast_id' => 1827,
                'movie_id' => 151,
                'person_id' => 965,
                'character' => 'Slinky Dog',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            290 => 
            array (
                'cast_id' => 1828,
                'movie_id' => 151,
                'person_id' => 399,
                'character' => 'Rex the Green Dinosaur',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            291 => 
            array (
                'cast_id' => 1829,
                'movie_id' => 151,
                'person_id' => 733,
                'character' => 'Hamm the Piggy Bank',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            292 => 
            array (
                'cast_id' => 1830,
                'movie_id' => 151,
                'person_id' => 353,
                'character' => 'Bo Peep',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            293 => 
            array (
                'cast_id' => 1831,
                'movie_id' => 151,
                'person_id' => 100,
                'character' => 'Al the Toy Collector',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            294 => 
            array (
                'cast_id' => 1832,
                'movie_id' => 151,
                'person_id' => 963,
                'character' => 'Andy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            295 => 
            array (
                'cast_id' => 1833,
                'movie_id' => 151,
                'person_id' => 964,
                'character' => 'Andy\'s Mom',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            296 => 
            array (
                'cast_id' => 1834,
                'movie_id' => 151,
                'person_id' => 674,
                'character' => 'Army Sarge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            297 => 
            array (
                'cast_id' => 1835,
                'movie_id' => 151,
                'person_id' => 742,
                'character' => 'Geri the Cleaner',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            298 => 
            array (
                'cast_id' => 1836,
                'movie_id' => 151,
                'person_id' => 743,
                'character' => 'Wheezy the Penguin / Heimlich',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            299 => 
            array (
                'cast_id' => 1837,
                'movie_id' => 151,
                'person_id' => 734,
                'character' => 'Flik the Ant',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            300 => 
            array (
                'cast_id' => 1839,
                'movie_id' => 151,
                'person_id' => 967,
                'character' => 'Jessie the Yodeling Cowgirl',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            301 => 
            array (
                'cast_id' => 1840,
                'movie_id' => 151,
                'person_id' => 969,
                'character' => 'Barbie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            302 => 
            array (
                'cast_id' => 1841,
                'movie_id' => 152,
                'person_id' => 533,
                'character' => 'Woody',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            303 => 
            array (
                'cast_id' => 1842,
                'movie_id' => 152,
                'person_id' => 961,
                'character' => 'Buzz Lightyear',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            304 => 
            array (
                'cast_id' => 1843,
                'movie_id' => 152,
                'person_id' => 967,
                'character' => 'Jessie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            305 => 
            array (
                'cast_id' => 1844,
                'movie_id' => 152,
                'person_id' => 962,
                'character' => 'Mr. Potato Head',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            306 => 
            array (
                'cast_id' => 1845,
                'movie_id' => 152,
                'person_id' => 745,
                'character' => 'Ken',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            307 => 
            array (
                'cast_id' => 1846,
                'movie_id' => 152,
                'person_id' => 399,
                'character' => 'Rex',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            308 => 
            array (
                'cast_id' => 1847,
                'movie_id' => 152,
                'person_id' => 733,
                'character' => 'Hamm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            309 => 
            array (
                'cast_id' => 1848,
                'movie_id' => 152,
                'person_id' => 968,
                'character' => 'Mrs. Potato Head',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            310 => 
            array (
                'cast_id' => 1849,
                'movie_id' => 152,
                'person_id' => 963,
                'character' => 'Andy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            311 => 
            array (
                'cast_id' => 1850,
                'movie_id' => 152,
                'person_id' => 969,
                'character' => 'Barbie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            312 => 
            array (
                'cast_id' => 1851,
                'movie_id' => 152,
                'person_id' => 964,
                'character' => 'Andy\'s Mom',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            313 => 
            array (
                'cast_id' => 1852,
                'movie_id' => 152,
                'person_id' => 693,
                'character' => 'Slinky Dog',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            314 => 
            array (
                'cast_id' => 1853,
                'movie_id' => 152,
                'person_id' => 746,
                'character' => 'Dolly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            315 => 
            array (
                'cast_id' => 1854,
                'movie_id' => 152,
                'person_id' => 707,
                'character' => 'Stretch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            316 => 
            array (
                'cast_id' => 1855,
                'movie_id' => 152,
                'person_id' => 674,
                'character' => 'Sarge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            317 => 
            array (
                'cast_id' => 1856,
                'movie_id' => 152,
                'person_id' => 738,
                'character' => 'Bookworm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            318 => 
            array (
                'cast_id' => 1859,
                'movie_id' => 152,
                'person_id' => 970,
                'character' => 'Lotso',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            319 => 
            array (
                'cast_id' => 1860,
                'movie_id' => 152,
                'person_id' => 971,
                'character' => 'Mr Pricklepants',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            320 => 
            array (
                'cast_id' => 1861,
                'movie_id' => 153,
                'person_id' => 733,
                'character' => 'Construction Foreman Tom',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            321 => 
            array (
                'cast_id' => 1862,
                'movie_id' => 153,
                'person_id' => 972,
                'character' => 'Carl Fredricksen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            322 => 
            array (
                'cast_id' => 1863,
                'movie_id' => 153,
                'person_id' => 973,
                'character' => 'Charles Muntz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            323 => 
            array (
                'cast_id' => 1864,
                'movie_id' => 154,
                'person_id' => 733,
                'character' => 'John',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            324 => 
            array (
                'cast_id' => 1865,
                'movie_id' => 154,
                'person_id' => 974,
                'character' => 'Captain',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            325 => 
            array (
                'cast_id' => 1866,
                'movie_id' => 154,
                'person_id' => 975,
                'character' => 'Shelby Forthright',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            326 => 
            array (
                'cast_id' => 1867,
                'movie_id' => 155,
                'person_id' => 361,
                'character' => 'Ralph',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            327 => 
            array (
                'cast_id' => 1868,
                'movie_id' => 155,
                'person_id' => 515,
                'character' => 'Calhoun',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            328 => 
            array (
                'cast_id' => 1869,
                'movie_id' => 155,
                'person_id' => 428,
                'character' => 'King Candy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            329 => 
            array (
                'cast_id' => 1870,
                'movie_id' => 155,
                'person_id' => 976,
                'character' => 'Vanellope',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            330 => 
            array (
                'cast_id' => 1871,
                'movie_id' => 155,
                'person_id' => 977,
                'character' => 'Felix',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            331 => 
            array (
                'cast_id' => 1872,
                'movie_id' => 155,
                'person_id' => 978,
                'character' => 'Taffyta Muttonfudge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            332 => 
            array (
                'cast_id' => 1873,
                'movie_id' => 155,
                'person_id' => 979,
                'character' => 'Mr Litwak',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            333 => 
            array (
                'cast_id' => 1874,
                'movie_id' => 156,
                'person_id' => 504,
                'character' => 'Flint Lockwood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            334 => 
            array (
                'cast_id' => 1875,
                'movie_id' => 156,
                'person_id' => 349,
                'character' => 'Tim Lockwood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            335 => 
            array (
                'cast_id' => 1876,
                'movie_id' => 156,
                'person_id' => 755,
                'character' => 'Mayor Shelbourne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            336 => 
            array (
                'cast_id' => 1877,
                'movie_id' => 156,
                'person_id' => 559,
                'character' => 'Steve',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            337 => 
            array (
                'cast_id' => 1878,
                'movie_id' => 156,
                'person_id' => 980,
                'character' => 'Sam Sparks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            338 => 
            array (
                'cast_id' => 1879,
                'movie_id' => 156,
                'person_id' => 981,
                'character' => 'Baby Brent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            339 => 
            array (
                'cast_id' => 1880,
                'movie_id' => 157,
                'person_id' => 903,
                'character' => 'The Cat',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            340 => 
            array (
                'cast_id' => 1881,
                'movie_id' => 157,
                'person_id' => 982,
                'character' => 'Coraline Jones',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            341 => 
            array (
                'cast_id' => 1882,
                'movie_id' => 157,
                'person_id' => 983,
                'character' => 'Mel Jones',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            342 => 
            array (
                'cast_id' => 1883,
                'movie_id' => 157,
                'person_id' => 984,
                'character' => 'Miss April Spink',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            343 => 
            array (
                'cast_id' => 1884,
                'movie_id' => 157,
                'person_id' => 985,
                'character' => 'Miss Miriam Forcible',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            344 => 
            array (
                'cast_id' => 1885,
                'movie_id' => 157,
                'person_id' => 986,
                'character' => 'Mr Sergei Alexander Bobinsky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            345 => 
            array (
                'cast_id' => 1886,
                'movie_id' => 158,
                'person_id' => 343,
                'character' => 'Gru',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            346 => 
            array (
                'cast_id' => 1887,
                'movie_id' => 158,
                'person_id' => 508,
                'character' => 'Vector',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            347 => 
            array (
                'cast_id' => 1888,
                'movie_id' => 158,
                'person_id' => 334,
                'character' => 'Gru\'s Mom',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            348 => 
            array (
                'cast_id' => 1889,
                'movie_id' => 158,
                'person_id' => 518,
                'character' => 'Miss Hattie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            349 => 
            array (
                'cast_id' => 1890,
                'movie_id' => 158,
                'person_id' => 501,
                'character' => 'Jerry the Minion',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            350 => 
            array (
                'cast_id' => 1891,
                'movie_id' => 158,
                'person_id' => 977,
                'character' => 'Carnival Barker / Tourist Dad',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            351 => 
            array (
                'cast_id' => 1892,
                'movie_id' => 158,
                'person_id' => 978,
                'character' => 'Tourist Mom',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            352 => 
            array (
                'cast_id' => 1893,
                'movie_id' => 158,
                'person_id' => 625,
                'character' => 'Talk Show Host',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            353 => 
            array (
                'cast_id' => 1894,
                'movie_id' => 158,
                'person_id' => 987,
                'character' => 'Dr Nefario',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            354 => 
            array (
                'cast_id' => 1895,
                'movie_id' => 158,
                'person_id' => 988,
                'character' => 'Mr Perkins',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            355 => 
            array (
                'cast_id' => 1896,
                'movie_id' => 158,
                'person_id' => 989,
                'character' => 'Margo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            356 => 
            array (
                'cast_id' => 1897,
                'movie_id' => 158,
                'person_id' => 990,
                'character' => 'Fred McDade',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            357 => 
            array (
                'cast_id' => 1898,
                'movie_id' => 159,
                'person_id' => 732,
                'character' => 'Gobber',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            358 => 
            array (
                'cast_id' => 1899,
                'movie_id' => 159,
                'person_id' => 466,
                'character' => 'Fishlegs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            359 => 
            array (
                'cast_id' => 1900,
                'movie_id' => 159,
                'person_id' => 722,
                'character' => 'Tuffnut',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            360 => 
            array (
                'cast_id' => 1901,
                'movie_id' => 159,
                'person_id' => 518,
                'character' => 'Ruffnut',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            361 => 
            array (
                'cast_id' => 1902,
                'movie_id' => 159,
                'person_id' => 384,
                'character' => 'Spitelout',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            362 => 
            array (
                'cast_id' => 1903,
                'movie_id' => 159,
                'person_id' => 991,
                'character' => 'Hiccup',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            363 => 
            array (
                'cast_id' => 1904,
                'movie_id' => 159,
                'person_id' => 992,
                'character' => 'Stoick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            364 => 
            array (
                'cast_id' => 1905,
                'movie_id' => 159,
                'person_id' => 993,
                'character' => 'Snotlout',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            365 => 
            array (
                'cast_id' => 1906,
                'movie_id' => 160,
                'person_id' => 264,
                'character' => 'Sid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            366 => 
            array (
                'cast_id' => 1907,
                'movie_id' => 160,
                'person_id' => 57,
                'character' => 'Diego',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            367 => 
            array (
                'cast_id' => 1908,
                'movie_id' => 160,
                'person_id' => 428,
                'character' => 'Lenny',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            368 => 
            array (
                'cast_id' => 1909,
                'movie_id' => 160,
                'person_id' => 994,
                'character' => 'Manfred',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            369 => 
            array (
                'cast_id' => 1910,
                'movie_id' => 160,
                'person_id' => 995,
                'character' => 'Zeke',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            370 => 
            array (
                'cast_id' => 1911,
                'movie_id' => 161,
                'person_id' => 994,
                'character' => 'Manny',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            371 => 
            array (
                'cast_id' => 1912,
                'movie_id' => 161,
                'person_id' => 264,
                'character' => 'Sid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            372 => 
            array (
                'cast_id' => 1913,
                'movie_id' => 161,
                'person_id' => 57,
                'character' => 'Diego',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            373 => 
            array (
                'cast_id' => 1914,
                'movie_id' => 161,
                'person_id' => 988,
                'character' => 'Lone Gunslinger Vulture',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            374 => 
            array (
                'cast_id' => 1915,
                'movie_id' => 161,
                'person_id' => 428,
                'character' => 'Cholly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            375 => 
            array (
                'cast_id' => 1916,
                'movie_id' => 161,
                'person_id' => 996,
                'character' => 'Crash',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            376 => 
            array (
                'cast_id' => 1917,
                'movie_id' => 161,
                'person_id' => 997,
                'character' => 'Eddie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            377 => 
            array (
                'cast_id' => 1918,
                'movie_id' => 161,
                'person_id' => 998,
                'character' => 'Ellie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            378 => 
            array (
                'cast_id' => 1919,
                'movie_id' => 162,
                'person_id' => 504,
                'character' => 'Gazelle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            379 => 
            array (
                'cast_id' => 1920,
                'movie_id' => 162,
                'person_id' => 998,
                'character' => 'Ellie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            380 => 
            array (
                'cast_id' => 1921,
                'movie_id' => 162,
                'person_id' => 57,
                'character' => 'Diego',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            381 => 
            array (
                'cast_id' => 1922,
                'movie_id' => 162,
                'person_id' => 264,
                'character' => 'Sid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            382 => 
            array (
                'cast_id' => 1923,
                'movie_id' => 162,
                'person_id' => 515,
                'character' => 'Diatryma Mom',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            383 => 
            array (
                'cast_id' => 1924,
                'movie_id' => 162,
                'person_id' => 997,
                'character' => 'Eddie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            384 => 
            array (
                'cast_id' => 1925,
                'movie_id' => 162,
                'person_id' => 512,
                'character' => 'Buck',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            385 => 
            array (
                'cast_id' => 1926,
                'movie_id' => 162,
                'person_id' => 994,
                'character' => 'Manny',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            386 => 
            array (
                'cast_id' => 1927,
                'movie_id' => 162,
                'person_id' => 996,
                'character' => 'Crash',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            387 => 
            array (
                'cast_id' => 1928,
                'movie_id' => 162,
                'person_id' => 518,
                'character' => 'Pudgy Beaver Mom',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            388 => 
            array (
                'cast_id' => 1929,
                'movie_id' => 163,
                'person_id' => 995,
                'character' => 'Po',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            389 => 
            array (
                'cast_id' => 1930,
                'movie_id' => 163,
                'person_id' => 986,
                'character' => 'Tai Lung',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            390 => 
            array (
                'cast_id' => 1931,
                'movie_id' => 163,
                'person_id' => 327,
                'character' => 'Monkey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            391 => 
            array (
                'cast_id' => 1932,
                'movie_id' => 163,
                'person_id' => 516,
                'character' => 'Mantis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            392 => 
            array (
                'cast_id' => 1933,
                'movie_id' => 163,
                'person_id' => 856,
                'character' => 'Viper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            393 => 
            array (
                'cast_id' => 1934,
                'movie_id' => 163,
                'person_id' => 496,
                'character' => 'Crane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            394 => 
            array (
                'cast_id' => 1935,
                'movie_id' => 163,
                'person_id' => 805,
                'character' => 'Mr. Ping',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            395 => 
            array (
                'cast_id' => 1936,
                'movie_id' => 163,
                'person_id' => 100,
                'character' => 'Gang Boss',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            396 => 
            array (
                'cast_id' => 1937,
                'movie_id' => 163,
                'person_id' => 999,
                'character' => 'Shifu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            397 => 
            array (
                'cast_id' => 1938,
                'movie_id' => 163,
                'person_id' => 1000,
                'character' => 'Tigress',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            398 => 
            array (
                'cast_id' => 1939,
                'movie_id' => 163,
                'person_id' => 1001,
                'character' => 'Oogway',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            399 => 
            array (
                'cast_id' => 1940,
                'movie_id' => 163,
                'person_id' => 1002,
                'character' => 'Commander Vachir',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            400 => 
            array (
                'cast_id' => 1941,
                'movie_id' => 164,
                'person_id' => 995,
                'character' => 'Po',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            401 => 
            array (
                'cast_id' => 1942,
                'movie_id' => 164,
                'person_id' => 1000,
                'character' => 'Tigress',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            402 => 
            array (
                'cast_id' => 1943,
                'movie_id' => 164,
                'person_id' => 999,
                'character' => 'Shifu',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            403 => 
            array (
                'cast_id' => 1944,
                'movie_id' => 164,
                'person_id' => 200,
                'character' => 'Shen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            404 => 
            array (
                'cast_id' => 1945,
                'movie_id' => 164,
                'person_id' => 327,
                'character' => 'Monkey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            405 => 
            array (
                'cast_id' => 1946,
                'movie_id' => 164,
                'person_id' => 516,
                'character' => 'Mantis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            406 => 
            array (
                'cast_id' => 1947,
                'movie_id' => 164,
                'person_id' => 856,
                'character' => 'Viper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            407 => 
            array (
                'cast_id' => 1948,
                'movie_id' => 164,
                'person_id' => 496,
                'character' => 'Crane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            408 => 
            array (
                'cast_id' => 1949,
                'movie_id' => 164,
                'person_id' => 805,
                'character' => 'Mr. Ping',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            409 => 
            array (
                'cast_id' => 1950,
                'movie_id' => 164,
                'person_id' => 313,
                'character' => 'Soothsayer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            410 => 
            array (
                'cast_id' => 1951,
                'movie_id' => 164,
                'person_id' => 990,
                'character' => 'Wolf Boss',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            411 => 
            array (
                'cast_id' => 1952,
                'movie_id' => 164,
                'person_id' => 141,
                'character' => 'Master Rhino',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            412 => 
            array (
                'cast_id' => 1953,
                'movie_id' => 164,
                'person_id' => 1003,
                'character' => 'Master Ox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            413 => 
            array (
                'cast_id' => 1954,
                'movie_id' => 164,
                'person_id' => 1004,
                'character' => 'Master Croc',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            414 => 
            array (
                'cast_id' => 1955,
                'movie_id' => 165,
                'person_id' => 450,
                'character' => 'Professor Kipple',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            415 => 
            array (
                'cast_id' => 1956,
                'movie_id' => 165,
                'person_id' => 200,
                'character' => 'General Grawl',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            416 => 
            array (
                'cast_id' => 1957,
                'movie_id' => 165,
                'person_id' => 344,
                'character' => 'Captain Charles T. Baker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            417 => 
            array (
                'cast_id' => 1958,
                'movie_id' => 165,
                'person_id' => 996,
                'character' => 'Skiff',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            418 => 
            array (
                'cast_id' => 1959,
                'movie_id' => 165,
                'person_id' => 1005,
                'character' => 'Neera',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            419 => 
            array (
                'cast_id' => 1960,
                'movie_id' => 165,
                'person_id' => 1006,
                'character' => 'Lem',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            420 => 
            array (
                'cast_id' => 1985,
                'movie_id' => 166,
                'person_id' => 659,
                'character' => 'Tyrion Lannister',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            421 => 
            array (
                'cast_id' => 1986,
                'movie_id' => 166,
                'person_id' => 321,
                'character' => 'Cersei Lannister',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            422 => 
            array (
                'cast_id' => 1991,
                'movie_id' => 166,
                'person_id' => 474,
                'character' => 'Eddard \'Ned\' Stark',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            423 => 
            array (
                'cast_id' => 1994,
                'movie_id' => 166,
                'person_id' => 451,
                'character' => 'Walder Frey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            424 => 
            array (
                'cast_id' => 1997,
                'movie_id' => 166,
                'person_id' => 1007,
                'character' => 'Daenerys Targaryen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            425 => 
            array (
                'cast_id' => 1998,
                'movie_id' => 166,
                'person_id' => 1008,
                'character' => 'Jon Snow',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            426 => 
            array (
                'cast_id' => 1999,
                'movie_id' => 166,
                'person_id' => 1009,
                'character' => 'Sansa Stark',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            427 => 
            array (
                'cast_id' => 2000,
                'movie_id' => 166,
                'person_id' => 1010,
                'character' => 'Jorah Mormont',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            428 => 
            array (
                'cast_id' => 2001,
                'movie_id' => 166,
                'person_id' => 1011,
                'character' => 'Arya Stark',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            429 => 
            array (
                'cast_id' => 2002,
                'movie_id' => 166,
                'person_id' => 1012,
                'character' => 'Jaime Lannister',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            430 => 
            array (
                'cast_id' => 2003,
                'movie_id' => 166,
                'person_id' => 1013,
                'character' => 'Theon Greyjoy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            431 => 
            array (
                'cast_id' => 2004,
                'movie_id' => 166,
                'person_id' => 1014,
                'character' => 'Petyr Littlefinger Baelish',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            432 => 
            array (
                'cast_id' => 2005,
                'movie_id' => 166,
                'person_id' => 1015,
                'character' => 'Joffrey Baratheon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            433 => 
            array (
                'cast_id' => 2006,
                'movie_id' => 167,
                'person_id' => 358,
                'character' => 'Merle Dixon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            434 => 
            array (
                'cast_id' => 2007,
                'movie_id' => 167,
                'person_id' => 901,
                'character' => 'Dr. Edwin Jenner',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            435 => 
            array (
                'cast_id' => 2008,
                'movie_id' => 167,
                'person_id' => 519,
                'character' => 'Eastman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            436 => 
            array (
                'cast_id' => 2009,
                'movie_id' => 167,
                'person_id' => 1016,
                'character' => 'Rick Grimes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            437 => 
            array (
                'cast_id' => 2010,
                'movie_id' => 167,
                'person_id' => 1017,
                'character' => 'Carl Grimes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            438 => 
            array (
                'cast_id' => 2011,
                'movie_id' => 167,
                'person_id' => 1018,
                'character' => 'Daryl Dixon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            439 => 
            array (
                'cast_id' => 2012,
                'movie_id' => 167,
                'person_id' => 1019,
                'character' => 'Carol Peletier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            440 => 
            array (
                'cast_id' => 2013,
                'movie_id' => 167,
                'person_id' => 1020,
                'character' => 'Lori Grimes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            441 => 
            array (
                'cast_id' => 2014,
                'movie_id' => 167,
                'person_id' => 1022,
                'character' => 'Shane Walsh',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            442 => 
            array (
                'cast_id' => 2015,
                'movie_id' => 168,
                'person_id' => 1016,
                'character' => 'Rick Grimes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            443 => 
            array (
                'cast_id' => 2016,
                'movie_id' => 168,
                'person_id' => 1017,
                'character' => 'Carl Grimes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            444 => 
            array (
                'cast_id' => 2017,
                'movie_id' => 168,
                'person_id' => 1018,
                'character' => 'Daryl Dixon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            445 => 
            array (
                'cast_id' => 2018,
                'movie_id' => 168,
                'person_id' => 1019,
                'character' => 'Carol Peletier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            446 => 
            array (
                'cast_id' => 2019,
                'movie_id' => 168,
                'person_id' => 1020,
                'character' => 'Lori Grimes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            447 => 
            array (
                'cast_id' => 2021,
                'movie_id' => 168,
                'person_id' => 1022,
                'character' => 'Shane Walsh',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            448 => 
            array (
                'cast_id' => 2022,
                'movie_id' => 168,
                'person_id' => 358,
                'character' => 'Merle Dixon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            449 => 
            array (
                'cast_id' => 2025,
                'movie_id' => 168,
                'person_id' => 1023,
                'character' => 'Maggie Greene',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            450 => 
            array (
                'cast_id' => 2026,
                'movie_id' => 168,
                'person_id' => 1024,
                'character' => 'Glenn Rhee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            451 => 
            array (
                'cast_id' => 2027,
                'movie_id' => 168,
                'person_id' => 1025,
                'character' => 'Beth Greene',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            452 => 
            array (
                'cast_id' => 2028,
                'movie_id' => 168,
                'person_id' => 1026,
                'character' => 'Hershel Greene',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            453 => 
            array (
                'cast_id' => 2029,
                'movie_id' => 169,
                'person_id' => 1016,
                'character' => 'Rick Grimes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            454 => 
            array (
                'cast_id' => 2030,
                'movie_id' => 169,
                'person_id' => 1017,
                'character' => 'Carl Grimes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            455 => 
            array (
                'cast_id' => 2031,
                'movie_id' => 169,
                'person_id' => 1018,
                'character' => 'Daryl Dixon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            456 => 
            array (
                'cast_id' => 2032,
                'movie_id' => 169,
                'person_id' => 1019,
                'character' => 'Carol Peletier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            457 => 
            array (
                'cast_id' => 2033,
                'movie_id' => 169,
                'person_id' => 1023,
                'character' => 'Maggie Greene',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            458 => 
            array (
                'cast_id' => 2034,
                'movie_id' => 169,
                'person_id' => 1024,
                'character' => 'Glenn Rhee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            459 => 
            array (
                'cast_id' => 2035,
                'movie_id' => 169,
                'person_id' => 1025,
                'character' => 'Beth Greene',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            460 => 
            array (
                'cast_id' => 2036,
                'movie_id' => 169,
                'person_id' => 1026,
                'character' => 'Hershel Greene',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            461 => 
            array (
                'cast_id' => 2037,
                'movie_id' => 169,
                'person_id' => 1020,
                'character' => 'Lori Grimes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            462 => 
            array (
                'cast_id' => 2038,
                'movie_id' => 169,
                'person_id' => 1021,
                'character' => 'Morgan Jones',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            463 => 
            array (
                'cast_id' => 2040,
                'movie_id' => 169,
                'person_id' => 358,
                'character' => 'Merle Dixon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            464 => 
            array (
                'cast_id' => 2043,
                'movie_id' => 169,
                'person_id' => 1027,
                'character' => 'Michonne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            465 => 
            array (
                'cast_id' => 2044,
                'movie_id' => 169,
                'person_id' => 1028,
                'character' => 'The Governor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            466 => 
            array (
                'cast_id' => 2045,
                'movie_id' => 171,
                'person_id' => 400,
                'character' => 'Luke',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            467 => 
            array (
                'cast_id' => 2046,
                'movie_id' => 171,
                'person_id' => 854,
                'character' => 'Dragline',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            468 => 
            array (
                'cast_id' => 2047,
                'movie_id' => 171,
                'person_id' => 920,
                'character' => 'Babalugats',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            469 => 
            array (
                'cast_id' => 2048,
                'movie_id' => 171,
                'person_id' => 26,
                'character' => 'Tramp',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            470 => 
            array (
                'cast_id' => 2049,
                'movie_id' => 170,
                'person_id' => 1016,
                'character' => 'Rick Grimes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            471 => 
            array (
                'cast_id' => 2050,
                'movie_id' => 170,
                'person_id' => 1017,
                'character' => 'Carl Grimes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            472 => 
            array (
                'cast_id' => 2051,
                'movie_id' => 170,
                'person_id' => 1018,
                'character' => 'Daryl Dixon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            473 => 
            array (
                'cast_id' => 2052,
                'movie_id' => 170,
                'person_id' => 1019,
                'character' => 'Carol Peletier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            474 => 
            array (
                'cast_id' => 2053,
                'movie_id' => 170,
                'person_id' => 1023,
                'character' => 'Maggie Greene',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            475 => 
            array (
                'cast_id' => 2054,
                'movie_id' => 170,
                'person_id' => 1024,
                'character' => 'Glenn Rhee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            476 => 
            array (
                'cast_id' => 2055,
                'movie_id' => 170,
                'person_id' => 1027,
                'character' => 'Michonne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            477 => 
            array (
                'cast_id' => 2056,
                'movie_id' => 170,
                'person_id' => 1025,
                'character' => 'Beth Greene',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            478 => 
            array (
                'cast_id' => 2059,
                'movie_id' => 170,
                'person_id' => 1021,
                'character' => 'Morgan Jones',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            479 => 
            array (
                'cast_id' => 2065,
                'movie_id' => 172,
                'person_id' => 738,
                'character' => 'Bing Bong',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            480 => 
            array (
                'cast_id' => 2066,
                'movie_id' => 172,
                'person_id' => 504,
                'character' => 'Fear',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            481 => 
            array (
                'cast_id' => 2067,
                'movie_id' => 172,
                'person_id' => 978,
                'character' => 'Disgust',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            482 => 
            array (
                'cast_id' => 2068,
                'movie_id' => 172,
                'person_id' => 487,
                'character' => 'Mom',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            483 => 
            array (
                'cast_id' => 2069,
                'movie_id' => 172,
                'person_id' => 316,
                'character' => 'Dad',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            484 => 
            array (
                'cast_id' => 2070,
                'movie_id' => 172,
                'person_id' => 305,
                'character' => 'Subconscious Guard Dave',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            485 => 
            array (
                'cast_id' => 2071,
                'movie_id' => 172,
                'person_id' => 170,
                'character' => 'Mind Worker Cop Jake',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            486 => 
            array (
                'cast_id' => 2072,
                'movie_id' => 172,
                'person_id' => 733,
                'character' => 'Fritz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            487 => 
            array (
                'cast_id' => 2073,
                'movie_id' => 172,
                'person_id' => 949,
                'character' => 'Additional Voices',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            488 => 
            array (
                'cast_id' => 2074,
                'movie_id' => 172,
                'person_id' => 1029,
                'character' => 'Joy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            489 => 
            array (
                'cast_id' => 2075,
                'movie_id' => 172,
                'person_id' => 1030,
                'character' => 'Anger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            490 => 
            array (
                'cast_id' => 2076,
                'movie_id' => 172,
                'person_id' => 1031,
                'character' => 'Sadness',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            491 => 
            array (
                'cast_id' => 2077,
                'movie_id' => 173,
                'person_id' => 937,
                'character' => 'Vince',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            492 => 
            array (
                'cast_id' => 2078,
                'movie_id' => 173,
                'person_id' => 318,
                'character' => 'Johnny Drama',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            493 => 
            array (
                'cast_id' => 2079,
                'movie_id' => 173,
                'person_id' => 751,
                'character' => 'Ari Gold',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            494 => 
            array (
                'cast_id' => 2080,
                'movie_id' => 173,
                'person_id' => 285,
                'character' => 'Shauna',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            495 => 
            array (
                'cast_id' => 2081,
                'movie_id' => 173,
                'person_id' => 445,
                'character' => 'Jon Favreau',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            496 => 
            array (
                'cast_id' => 2082,
                'movie_id' => 173,
                'person_id' => 198,
                'character' => 'Liam Neeson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            497 => 
            array (
                'cast_id' => 2083,
                'movie_id' => 173,
                'person_id' => 979,
                'character' => 'Ed O\'Neill',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            498 => 
            array (
                'cast_id' => 2084,
                'movie_id' => 173,
                'person_id' => 665,
                'character' => 'Kelsey Grammer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            499 => 
            array (
                'cast_id' => 2085,
                'movie_id' => 173,
                'person_id' => 934,
                'character' => 'Mark Wahlberg',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        \DB::table('cast')->insert(array (
            0 => 
            array (
                'cast_id' => 2086,
                'movie_id' => 173,
                'person_id' => 119,
                'character' => 'Casting Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'cast_id' => 2087,
                'movie_id' => 173,
                'person_id' => 104,
                'character' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'cast_id' => 2089,
                'movie_id' => 173,
                'person_id' => 1032,
                'character' => 'Eric',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'cast_id' => 2090,
                'movie_id' => 173,
                'person_id' => 1033,
                'character' => 'Turtle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'cast_id' => 2091,
                'movie_id' => 173,
                'person_id' => 1034,
                'character' => 'Sloan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'cast_id' => 2092,
                'movie_id' => 173,
                'person_id' => 1035,
                'character' => 'Mrs Ari',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'cast_id' => 2093,
                'movie_id' => 173,
                'person_id' => 1036,
                'character' => 'Lloyd',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'cast_id' => 2094,
                'movie_id' => 173,
                'person_id' => 1037,
                'character' => 'Billy Walsh',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'cast_id' => 2095,
                'movie_id' => 173,
                'person_id' => 1038,
                'character' => 'Dana Gordon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'cast_id' => 2096,
                'movie_id' => 173,
                'person_id' => 1039,
                'character' => 'Travis McCredle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'cast_id' => 2097,
                'movie_id' => 173,
                'person_id' => 1040,
                'character' => 'Ronda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'cast_id' => 2098,
                'movie_id' => 173,
                'person_id' => 1041,
                'character' => 'Emily Ratajkowski',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'cast_id' => 2099,
                'movie_id' => 173,
                'person_id' => 1042,
                'character' => 'Larsen McCredle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'cast_id' => 2100,
                'movie_id' => 173,
                'person_id' => 1043,
                'character' => 'John Ellis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'cast_id' => 2101,
                'movie_id' => 174,
                'person_id' => 119,
                'character' => 'Maggie Lang',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'cast_id' => 2102,
                'movie_id' => 174,
                'person_id' => 908,
                'character' => 'Luis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'cast_id' => 2103,
                'movie_id' => 174,
                'person_id' => 459,
                'character' => 'Bartender',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'cast_id' => 2105,
                'movie_id' => 174,
                'person_id' => 1044,
                'character' => 'Scott Lang  AntMan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'cast_id' => 2106,
                'movie_id' => 174,
                'person_id' => 1045,
                'character' => 'Dr Hank Pym',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'cast_id' => 2107,
                'movie_id' => 174,
                'person_id' => 1046,
                'character' => 'Hope van Dyne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'cast_id' => 2108,
                'movie_id' => 174,
                'person_id' => 1047,
                'character' => 'Darren Cross',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'cast_id' => 2109,
                'movie_id' => 174,
                'person_id' => 1048,
                'character' => 'Paxton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'cast_id' => 2110,
                'movie_id' => 174,
                'person_id' => 1049,
                'character' => 'Falcon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'cast_id' => 2111,
                'movie_id' => 175,
                'person_id' => 344,
                'character' => 'Raymond Gaines',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'cast_id' => 2112,
                'movie_id' => 175,
                'person_id' => 144,
                'character' => 'Daniel Riddick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'cast_id' => 2113,
                'movie_id' => 175,
                'person_id' => 540,
                'character' => 'Dr. Lawrence Hayes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'cast_id' => 2114,
                'movie_id' => 175,
                'person_id' => 215,
                'character' => 'Bussinessman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'cast_id' => 2115,
                'movie_id' => 175,
                'person_id' => 1050,
                'character' => 'Emma Gaines',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'cast_id' => 2116,
                'movie_id' => 175,
                'person_id' => 1051,
                'character' => 'Blake Gaines',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'cast_id' => 2117,
                'movie_id' => 175,
                'person_id' => 1052,
                'character' => 'Susan Riddick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'cast_id' => 2118,
                'movie_id' => 176,
                'person_id' => 947,
                'character' => 'Morty the Mime',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'cast_id' => 2119,
                'movie_id' => 176,
                'person_id' => 975,
                'character' => 'Colonel On Military Base',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'cast_id' => 2120,
                'movie_id' => 176,
                'person_id' => 1053,
                'character' => 'Marty DiBergi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'cast_id' => 2121,
                'movie_id' => 176,
                'person_id' => 1054,
                'character' => 'Ian Faith',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'cast_id' => 2122,
                'movie_id' => 176,
                'person_id' => 1055,
                'character' => 'Nigel Tufnel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'cast_id' => 2123,
                'movie_id' => 176,
                'person_id' => 1056,
                'character' => 'Tommy Pischedda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'cast_id' => 2124,
                'movie_id' => 176,
                'person_id' => 1057,
                'character' => 'Derek Smalls',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'cast_id' => 2125,
                'movie_id' => 177,
                'person_id' => 961,
                'character' => 'Jason Nesmith',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'cast_id' => 2126,
                'movie_id' => 177,
                'person_id' => 10,
                'character' => 'Gwen DeMarco',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'cast_id' => 2127,
                'movie_id' => 177,
                'person_id' => 23,
                'character' => 'Alexander Dane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'cast_id' => 2128,
                'movie_id' => 177,
                'person_id' => 494,
                'character' => 'Fred Kwan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'cast_id' => 2129,
                'movie_id' => 177,
                'person_id' => 447,
                'character' => 'Guy Fleegman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'cast_id' => 2130,
                'movie_id' => 177,
                'person_id' => 710,
                'character' => 'Sarris',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'cast_id' => 2131,
                'movie_id' => 177,
                'person_id' => 694,
                'character' => 'Laliari',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'cast_id' => 2132,
                'movie_id' => 177,
                'person_id' => 1006,
                'character' => 'Brandon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'cast_id' => 2133,
                'movie_id' => 177,
                'person_id' => 621,
                'character' => 'Lahnk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'cast_id' => 2134,
                'movie_id' => 177,
                'person_id' => 1058,
                'character' => 'Tommy Webber',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            47 => 
            array (
                'cast_id' => 2135,
                'movie_id' => 177,
                'person_id' => 1059,
                'character' => 'Young Tommy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            48 => 
            array (
                'cast_id' => 2136,
                'movie_id' => 178,
                'person_id' => 992,
                'character' => 'King Leonidas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            49 => 
            array (
                'cast_id' => 2137,
                'movie_id' => 178,
                'person_id' => 321,
                'character' => 'Queen Gorgo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            50 => 
            array (
                'cast_id' => 2138,
                'movie_id' => 178,
                'person_id' => 485,
                'character' => 'Dilios',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            51 => 
            array (
                'cast_id' => 2139,
                'movie_id' => 178,
                'person_id' => 436,
                'character' => 'Stelios',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            52 => 
            array (
                'cast_id' => 2140,
                'movie_id' => 178,
                'person_id' => 1060,
                'character' => 'Theron',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            53 => 
            array (
                'cast_id' => 2141,
                'movie_id' => 179,
                'person_id' => 1061,
                'character' => 'Dr Dave Bowman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            54 => 
            array (
                'cast_id' => 2142,
                'movie_id' => 179,
                'person_id' => 1062,
                'character' => 'Dr Andrei Smyslov',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            55 => 
            array (
                'cast_id' => 2143,
                'movie_id' => 179,
                'person_id' => 1063,
                'character' => 'Dr Frank Poole',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            56 => 
            array (
                'cast_id' => 2144,
                'movie_id' => 180,
                'person_id' => 431,
                'character' => 'Ace Ventura',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            57 => 
            array (
                'cast_id' => 2145,
                'movie_id' => 180,
                'person_id' => 1064,
                'character' => 'Melissa Robinson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            58 => 
            array (
                'cast_id' => 2146,
                'movie_id' => 180,
                'person_id' => 1065,
                'character' => 'Lt Lois Einhorn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            59 => 
            array (
                'cast_id' => 2147,
                'movie_id' => 181,
                'person_id' => 735,
                'character' => 'Lester Burnham',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            60 => 
            array (
                'cast_id' => 2148,
                'movie_id' => 181,
                'person_id' => 717,
                'character' => 'Ricky Fitts',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            61 => 
            array (
                'cast_id' => 2149,
                'movie_id' => 181,
                'person_id' => 179,
                'character' => 'Colonel Fitts',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            62 => 
            array (
                'cast_id' => 2150,
                'movie_id' => 181,
                'person_id' => 555,
                'character' => 'Jim Olmeyer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            63 => 
            array (
                'cast_id' => 2152,
                'movie_id' => 181,
                'person_id' => 1066,
                'character' => 'Carolyn Burnham',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            64 => 
            array (
                'cast_id' => 2154,
                'movie_id' => 181,
                'person_id' => 572,
                'character' => 'Sale House Man #1',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            65 => 
            array (
                'cast_id' => 2155,
                'movie_id' => 181,
                'person_id' => 1067,
                'character' => 'Jane Burnham',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            66 => 
            array (
                'cast_id' => 2156,
                'movie_id' => 181,
                'person_id' => 1068,
                'character' => 'Angela Hayes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            67 => 
            array (
                'cast_id' => 2157,
                'movie_id' => 182,
                'person_id' => 7,
                'character' => 'Derek Vinyard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            68 => 
            array (
                'cast_id' => 2158,
                'movie_id' => 182,
                'person_id' => 595,
                'character' => 'Danny Vinyard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            69 => 
            array (
                'cast_id' => 2159,
                'movie_id' => 182,
                'person_id' => 230,
                'character' => 'Stacey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            70 => 
            array (
                'cast_id' => 2160,
                'movie_id' => 182,
                'person_id' => 1069,
                'character' => 'Doris Vinyard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            71 => 
            array (
                'cast_id' => 2161,
                'movie_id' => 182,
                'person_id' => 1070,
                'character' => 'Dr Bob Sweeney',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            72 => 
            array (
                'cast_id' => 2162,
                'movie_id' => 182,
                'person_id' => 1071,
                'character' => 'Murray',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            73 => 
            array (
                'cast_id' => 2163,
                'movie_id' => 182,
                'person_id' => 1072,
                'character' => 'Cameron Alexander',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            74 => 
            array (
                'cast_id' => 2164,
                'movie_id' => 183,
                'person_id' => 801,
                'character' => 'Victoria \'Vicky\' Lathum',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            75 => 
            array (
                'cast_id' => 2165,
                'movie_id' => 183,
                'person_id' => 996,
                'character' => 'Steve Stifler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            76 => 
            array (
                'cast_id' => 2166,
                'movie_id' => 183,
                'person_id' => 1068,
                'character' => 'Heather',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            77 => 
            array (
                'cast_id' => 2167,
                'movie_id' => 183,
                'person_id' => 572,
                'character' => 'John, \'MILF\' Guy #2',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            78 => 
            array (
                'cast_id' => 2168,
                'movie_id' => 183,
                'person_id' => 1073,
                'character' => 'Jim Levenstein',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            79 => 
            array (
                'cast_id' => 2169,
                'movie_id' => 183,
                'person_id' => 1074,
                'character' => 'Michelle Flaherty',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            80 => 
            array (
                'cast_id' => 2170,
                'movie_id' => 183,
                'person_id' => 1075,
                'character' => 'Jims Dad',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            81 => 
            array (
                'cast_id' => 2171,
                'movie_id' => 183,
                'person_id' => 1076,
                'character' => 'Nadia',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            82 => 
            array (
                'cast_id' => 2172,
                'movie_id' => 183,
                'person_id' => 1077,
                'character' => 'Stiflers Mom',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            83 => 
            array (
                'cast_id' => 2173,
                'movie_id' => 183,
                'person_id' => 1078,
                'character' => 'Chris Oz Ostreicher',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            84 => 
            array (
                'cast_id' => 2174,
                'movie_id' => 183,
                'person_id' => 1078,
                'character' => 'Chris Oz Ostreicher',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            85 => 
            array (
                'cast_id' => 2175,
                'movie_id' => 183,
                'person_id' => 1079,
                'character' => 'Kevin Myers',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            86 => 
            array (
                'cast_id' => 2176,
                'movie_id' => 183,
                'person_id' => 1080,
                'character' => 'Paul Finch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            87 => 
            array (
                'cast_id' => 2177,
                'movie_id' => 183,
                'person_id' => 1081,
                'character' => 'Jessica',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            88 => 
            array (
                'cast_id' => 2178,
                'movie_id' => 183,
                'person_id' => 1082,
                'character' => 'Chuck Sherman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            89 => 
            array (
                'cast_id' => 2179,
                'movie_id' => 184,
                'person_id' => 58,
                'character' => 'Captain Benjamin L. Willard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            90 => 
            array (
                'cast_id' => 2180,
                'movie_id' => 184,
                'person_id' => 71,
                'character' => 'Tyrone \'Clean\' Miller',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            91 => 
            array (
                'cast_id' => 2181,
                'movie_id' => 184,
                'person_id' => 79,
                'character' => 'Colonel Lucas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            92 => 
            array (
                'cast_id' => 2182,
                'movie_id' => 184,
                'person_id' => 920,
                'character' => 'Photojournalist',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            93 => 
            array (
                'cast_id' => 2183,
                'movie_id' => 184,
                'person_id' => 192,
                'character' => 'Lieutenant Richard M. Colby',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            94 => 
            array (
                'cast_id' => 2184,
                'movie_id' => 184,
                'person_id' => 674,
                'character' => 'Helicopter Pilot',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            95 => 
            array (
                'cast_id' => 2186,
                'movie_id' => 184,
                'person_id' => 1083,
                'character' => 'Colonel Walter E Kurtz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            96 => 
            array (
                'cast_id' => 2187,
                'movie_id' => 184,
                'person_id' => 1084,
                'character' => 'Lieutenant Colonel Bill Kilgore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            97 => 
            array (
                'cast_id' => 2188,
                'movie_id' => 186,
                'person_id' => 862,
                'character' => 'Melvin Udall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            98 => 
            array (
                'cast_id' => 2189,
                'movie_id' => 186,
                'person_id' => 828,
                'character' => 'Frank Sachs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            99 => 
            array (
                'cast_id' => 2190,
                'movie_id' => 186,
                'person_id' => 694,
                'character' => 'Cafe 24 Waitress',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            100 => 
            array (
                'cast_id' => 2191,
                'movie_id' => 186,
                'person_id' => 351,
                'character' => 'Dr. Bettes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            101 => 
            array (
                'cast_id' => 2192,
                'movie_id' => 186,
                'person_id' => 1085,
                'character' => 'Carol Connelly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            102 => 
            array (
                'cast_id' => 2193,
                'movie_id' => 186,
                'person_id' => 1086,
                'character' => 'Simon Bishop',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            103 => 
            array (
                'cast_id' => 2194,
                'movie_id' => 186,
                'person_id' => 1087,
                'character' => 'Vincent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            104 => 
            array (
                'cast_id' => 2195,
                'movie_id' => 187,
                'person_id' => 513,
                'character' => 'Ron',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            105 => 
            array (
                'cast_id' => 2196,
                'movie_id' => 187,
                'person_id' => 1088,
                'character' => 'Moses',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            106 => 
            array (
                'cast_id' => 2197,
                'movie_id' => 188,
                'person_id' => 458,
                'character' => 'Austin Powers / Dr. Evil',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            107 => 
            array (
                'cast_id' => 2198,
                'movie_id' => 188,
                'person_id' => 81,
                'character' => 'Therapist',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            108 => 
            array (
                'cast_id' => 2199,
                'movie_id' => 188,
                'person_id' => 891,
                'character' => 'Decapitated Henchman\'s Friend',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            109 => 
            array (
                'cast_id' => 2200,
                'movie_id' => 188,
                'person_id' => 1089,
                'character' => 'Vanessa Kensington',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            110 => 
            array (
                'cast_id' => 2201,
                'movie_id' => 188,
                'person_id' => 1090,
                'character' => 'Basil Exposition',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            111 => 
            array (
                'cast_id' => 2202,
                'movie_id' => 188,
                'person_id' => 1091,
                'character' => 'Mrs Kensington',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            112 => 
            array (
                'cast_id' => 2203,
                'movie_id' => 188,
                'person_id' => 1092,
                'character' => 'Number Two',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            113 => 
            array (
                'cast_id' => 2204,
                'movie_id' => 188,
                'person_id' => 1093,
                'character' => 'Scott Evil',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            114 => 
            array (
                'cast_id' => 2205,
                'movie_id' => 188,
                'person_id' => 1094,
                'character' => 'Frau Farbissina',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            115 => 
            array (
                'cast_id' => 2206,
                'movie_id' => 188,
                'person_id' => 1095,
                'character' => 'Mustafa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            116 => 
            array (
                'cast_id' => 2207,
                'movie_id' => 188,
                'person_id' => 1096,
                'character' => 'Johnson Ritter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            117 => 
            array (
                'cast_id' => 2208,
                'movie_id' => 189,
                'person_id' => 458,
                'character' => 'Austin Powers',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            118 => 
            array (
                'cast_id' => 2209,
                'movie_id' => 189,
                'person_id' => 1093,
                'character' => 'Scott Evil',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            119 => 
            array (
                'cast_id' => 2210,
                'movie_id' => 189,
                'person_id' => 1090,
                'character' => 'Basil Exposition',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            120 => 
            array (
                'cast_id' => 2211,
                'movie_id' => 189,
                'person_id' => 1092,
                'character' => 'Number Two',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            121 => 
            array (
                'cast_id' => 2212,
                'movie_id' => 189,
                'person_id' => 1094,
                'character' => 'Frau Farbissina',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            122 => 
            array (
                'cast_id' => 2213,
                'movie_id' => 189,
                'person_id' => 370,
                'character' => 'Mini Me',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            123 => 
            array (
                'cast_id' => 2214,
                'movie_id' => 189,
                'person_id' => 197,
                'character' => 'Nigel Powers',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            124 => 
            array (
                'cast_id' => 2215,
                'movie_id' => 189,
                'person_id' => 346,
                'character' => 'Japanese Pedestrian',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            125 => 
            array (
                'cast_id' => 2216,
                'movie_id' => 189,
                'person_id' => 1096,
                'character' => 'Johnson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            126 => 
            array (
                'cast_id' => 2218,
                'movie_id' => 189,
                'person_id' => 957,
                'character' => 'Dancer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            127 => 
            array (
                'cast_id' => 2219,
                'movie_id' => 189,
                'person_id' => 280,
                'character' => 'Famous Austin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            128 => 
            array (
                'cast_id' => 2220,
                'movie_id' => 189,
                'person_id' => 131,
                'character' => 'Dixie Normous',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            129 => 
            array (
                'cast_id' => 2221,
                'movie_id' => 189,
                'person_id' => 735,
                'character' => 'Famous Dr. Evil',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            130 => 
            array (
                'cast_id' => 2222,
                'movie_id' => 189,
                'person_id' => 105,
                'character' => 'Director',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            131 => 
            array (
                'cast_id' => 2224,
                'movie_id' => 189,
                'person_id' => 725,
                'character' => 'Famous Goldmember',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            132 => 
            array (
                'cast_id' => 2225,
                'movie_id' => 189,
                'person_id' => 891,
                'character' => 'Middle Number Two',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            133 => 
            array (
                'cast_id' => 2226,
                'movie_id' => 189,
                'person_id' => 1097,
                'character' => 'Foxxy Cleopatra',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            134 => 
            array (
                'cast_id' => 2227,
                'movie_id' => 190,
                'person_id' => 351,
                'character' => 'Steven Buchner',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            135 => 
            array (
                'cast_id' => 2228,
                'movie_id' => 190,
                'person_id' => 1098,
                'character' => 'JC Wiatt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            136 => 
            array (
                'cast_id' => 2229,
                'movie_id' => 190,
                'person_id' => 1099,
                'character' => 'Ken Arrenberg',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            137 => 
            array (
                'cast_id' => 2230,
                'movie_id' => 191,
                'person_id' => 426,
                'character' => 'Mike Lowrey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            138 => 
            array (
                'cast_id' => 2231,
                'movie_id' => 191,
                'person_id' => 795,
                'character' => 'Theresa Burnett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            139 => 
            array (
                'cast_id' => 2232,
                'movie_id' => 191,
                'person_id' => 73,
                'character' => 'Captain Howard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            140 => 
            array (
                'cast_id' => 2233,
                'movie_id' => 191,
                'person_id' => 108,
                'character' => 'Julie Mott',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            141 => 
            array (
                'cast_id' => 2234,
                'movie_id' => 191,
                'person_id' => 1100,
                'character' => 'Marcus Burnett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            142 => 
            array (
                'cast_id' => 2235,
                'movie_id' => 192,
                'person_id' => 1100,
                'character' => 'Detective Marcus Burnett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            143 => 
            array (
                'cast_id' => 2236,
                'movie_id' => 192,
                'person_id' => 426,
                'character' => 'Detective Mike Lowrey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            144 => 
            array (
                'cast_id' => 2237,
                'movie_id' => 192,
                'person_id' => 103,
                'character' => 'Alexei',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            145 => 
            array (
                'cast_id' => 2238,
                'movie_id' => 192,
                'person_id' => 795,
                'character' => 'Theresa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            146 => 
            array (
                'cast_id' => 2239,
                'movie_id' => 192,
                'person_id' => 73,
                'character' => 'Captain Howard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            147 => 
            array (
                'cast_id' => 2240,
                'movie_id' => 192,
                'person_id' => 231,
                'character' => 'Floyd Poteet',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            148 => 
            array (
                'cast_id' => 2241,
                'movie_id' => 192,
                'person_id' => 468,
                'character' => 'Swat Leader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            149 => 
            array (
                'cast_id' => 2242,
                'movie_id' => 192,
                'person_id' => 610,
                'character' => 'Dancing Under Waterfall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            150 => 
            array (
                'cast_id' => 2243,
                'movie_id' => 192,
                'person_id' => 1101,
                'character' => 'Hector Juan Carlos Johnny Tapia',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            151 => 
            array (
                'cast_id' => 2244,
                'movie_id' => 192,
                'person_id' => 1103,
                'character' => 'Syd',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            152 => 
            array (
                'cast_id' => 2245,
                'movie_id' => 192,
                'person_id' => 1104,
                'character' => 'Carlos',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            153 => 
            array (
                'cast_id' => 2246,
                'movie_id' => 192,
                'person_id' => 1105,
                'character' => 'TNT Leader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            154 => 
            array (
                'cast_id' => 2247,
                'movie_id' => 193,
                'person_id' => 745,
                'character' => 'Batman / Bruce Wayne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            155 => 
            array (
                'cast_id' => 2248,
                'movie_id' => 193,
                'person_id' => 862,
                'character' => 'Joker / Jack Napier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            156 => 
            array (
                'cast_id' => 2249,
                'movie_id' => 193,
                'person_id' => 304,
                'character' => 'Harvey Dent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            157 => 
            array (
                'cast_id' => 2250,
                'movie_id' => 193,
                'person_id' => 681,
                'character' => 'Carl Grissom',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            158 => 
            array (
                'cast_id' => 2251,
                'movie_id' => 193,
                'person_id' => 243,
                'character' => 'Nic',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            159 => 
            array (
                'cast_id' => 2252,
                'movie_id' => 193,
                'person_id' => 1106,
                'character' => 'Vicki Vale',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            160 => 
            array (
                'cast_id' => 2253,
                'movie_id' => 193,
                'person_id' => 1107,
                'character' => 'Alfred Pennyworth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            161 => 
            array (
                'cast_id' => 2254,
                'movie_id' => 193,
                'person_id' => 1108,
                'character' => 'Alicia Hunt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            162 => 
            array (
                'cast_id' => 2255,
                'movie_id' => 194,
                'person_id' => 745,
                'character' => 'Batman / Bruce Wayne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            163 => 
            array (
                'cast_id' => 2256,
                'movie_id' => 194,
                'person_id' => 1107,
                'character' => 'Alfred Pennyworth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            164 => 
            array (
                'cast_id' => 2257,
                'movie_id' => 194,
                'person_id' => 511,
                'character' => 'Thin Clown',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            165 => 
            array (
                'cast_id' => 2258,
                'movie_id' => 194,
                'person_id' => 566,
                'character' => 'Penguin\'s Father',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            166 => 
            array (
                'cast_id' => 2259,
                'movie_id' => 194,
                'person_id' => 1109,
                'character' => 'Penguin  Oswald Cobblepot',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            167 => 
            array (
                'cast_id' => 2260,
                'movie_id' => 194,
                'person_id' => 1110,
                'character' => 'Catwoman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            168 => 
            array (
                'cast_id' => 2261,
                'movie_id' => 194,
                'person_id' => 1111,
                'character' => 'Max Shreck',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            169 => 
            array (
                'cast_id' => 2262,
                'movie_id' => 195,
                'person_id' => 228,
                'character' => 'Batman / Bruce Wayne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            170 => 
            array (
                'cast_id' => 2263,
                'movie_id' => 195,
                'person_id' => 491,
                'character' => 'Two-Face / Harvey Dent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            171 => 
            array (
                'cast_id' => 2264,
                'movie_id' => 195,
                'person_id' => 431,
                'character' => 'Riddler / Dr. Edward Nygma',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            172 => 
            array (
                'cast_id' => 2265,
                'movie_id' => 195,
                'person_id' => 825,
                'character' => 'Dr. Chase Meridian',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            173 => 
            array (
                'cast_id' => 2266,
                'movie_id' => 195,
                'person_id' => 1107,
                'character' => 'Alfred Pennyworth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            174 => 
            array (
                'cast_id' => 2267,
                'movie_id' => 195,
                'person_id' => 8,
                'character' => 'Sugar',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            175 => 
            array (
                'cast_id' => 2268,
                'movie_id' => 195,
                'person_id' => 285,
                'character' => 'Spice',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            176 => 
            array (
                'cast_id' => 2269,
                'movie_id' => 195,
                'person_id' => 445,
                'character' => 'Assistant',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            177 => 
            array (
                'cast_id' => 2270,
                'movie_id' => 195,
                'person_id' => 1112,
                'character' => 'Robin  Dick Grayson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            178 => 
            array (
                'cast_id' => 2271,
                'movie_id' => 195,
                'person_id' => 1113,
                'character' => 'Dr Burton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            179 => 
            array (
                'cast_id' => 2272,
                'movie_id' => 196,
                'person_id' => 593,
                'character' => 'Mr. Freeze / Dr. Victor Fries',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            180 => 
            array (
                'cast_id' => 2273,
                'movie_id' => 196,
                'person_id' => 1112,
                'character' => 'Robin / Dick Grayson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            181 => 
            array (
                'cast_id' => 2274,
                'movie_id' => 196,
                'person_id' => 1107,
                'character' => 'Alfred Pennyworth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            182 => 
            array (
                'cast_id' => 2275,
                'movie_id' => 196,
                'person_id' => 1114,
                'character' => 'Batman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            183 => 
            array (
                'cast_id' => 2276,
                'movie_id' => 196,
                'person_id' => 1115,
                'character' => 'Poison Ivy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            184 => 
            array (
                'cast_id' => 2277,
                'movie_id' => 196,
                'person_id' => 1116,
                'character' => 'Batgirl',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            185 => 
            array (
                'cast_id' => 2278,
                'movie_id' => 196,
                'person_id' => 1117,
                'character' => 'Ms B Haven',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            186 => 
            array (
                'cast_id' => 2279,
                'movie_id' => 197,
                'person_id' => 855,
                'character' => 'Lotte Schwartz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            187 => 
            array (
                'cast_id' => 2280,
                'movie_id' => 197,
                'person_id' => 624,
                'character' => 'John Horatio Malkovich',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            188 => 
            array (
                'cast_id' => 2281,
                'movie_id' => 197,
                'person_id' => 679,
                'character' => 'Charlie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            189 => 
            array (
                'cast_id' => 2282,
                'movie_id' => 197,
                'person_id' => 44,
                'character' => 'Christopher Bing',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            190 => 
            array (
                'cast_id' => 2283,
                'movie_id' => 197,
                'person_id' => 999,
                'character' => 'Willy Loman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            191 => 
            array (
                'cast_id' => 2284,
                'movie_id' => 197,
                'person_id' => 262,
                'character' => 'Himself',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            192 => 
            array (
                'cast_id' => 2285,
                'movie_id' => 197,
                'person_id' => 6,
                'character' => 'Brad Pitt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            193 => 
            array (
                'cast_id' => 2286,
                'movie_id' => 197,
                'person_id' => 45,
                'character' => 'Herself',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            194 => 
            array (
                'cast_id' => 2287,
                'movie_id' => 197,
                'person_id' => 1118,
                'character' => 'Craig Schwartz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            195 => 
            array (
                'cast_id' => 2288,
                'movie_id' => 197,
                'person_id' => 1119,
                'character' => 'Maxine Lund',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            196 => 
            array (
                'cast_id' => 2289,
                'movie_id' => 198,
                'person_id' => 624,
                'character' => 'Unferth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            197 => 
            array (
                'cast_id' => 2290,
                'movie_id' => 198,
                'person_id' => 19,
                'character' => 'Grendel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            198 => 
            array (
                'cast_id' => 2291,
                'movie_id' => 198,
                'person_id' => 408,
                'character' => 'Beowulf',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            199 => 
            array (
                'cast_id' => 2292,
                'movie_id' => 198,
                'person_id' => 390,
                'character' => 'Wiglaf',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            200 => 
            array (
                'cast_id' => 2293,
                'movie_id' => 198,
                'person_id' => 1000,
                'character' => 'Grendel\'s Mother',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            201 => 
            array (
                'cast_id' => 2294,
                'movie_id' => 198,
                'person_id' => 1120,
                'character' => 'Wealthow',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            202 => 
            array (
                'cast_id' => 2295,
                'movie_id' => 198,
                'person_id' => 1121,
                'character' => 'Hrothgar',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            203 => 
            array (
                'cast_id' => 2296,
                'movie_id' => 199,
                'person_id' => 789,
                'character' => 'General Alexander Radek',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            204 => 
            array (
                'cast_id' => 2297,
                'movie_id' => 199,
                'person_id' => 629,
                'character' => 'Notre Dame Aide',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            205 => 
            array (
                'cast_id' => 2298,
                'movie_id' => 199,
                'person_id' => 619,
                'character' => 'Agent Walters',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            206 => 
            array (
                'cast_id' => 2299,
                'movie_id' => 199,
                'person_id' => 793,
                'character' => 'Secret Service Agent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            207 => 
            array (
                'cast_id' => 2300,
                'movie_id' => 254,
                'person_id' => 1083,
                'character' => 'Dr. Jack Mickler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            208 => 
            array (
                'cast_id' => 2301,
                'movie_id' => 254,
                'person_id' => 11,
                'character' => 'Don Juan DeMarco',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            209 => 
            array (
                'cast_id' => 2302,
                'movie_id' => 254,
                'person_id' => 863,
                'character' => 'Marilyn Mickler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            210 => 
            array (
                'cast_id' => 2303,
                'movie_id' => 254,
                'person_id' => 1122,
                'character' => 'Rocco Compton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            211 => 
            array (
                'cast_id' => 2316,
                'movie_id' => 255,
                'person_id' => 261,
                'character' => 'Lefty',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            212 => 
            array (
                'cast_id' => 2317,
                'movie_id' => 255,
                'person_id' => 11,
                'character' => 'Donnie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            213 => 
            array (
                'cast_id' => 2318,
                'movie_id' => 255,
                'person_id' => 319,
                'character' => 'Sonny',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            214 => 
            array (
                'cast_id' => 2319,
                'movie_id' => 255,
                'person_id' => 1056,
                'character' => 'Nicky',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            215 => 
            array (
                'cast_id' => 2320,
                'movie_id' => 255,
                'person_id' => 785,
                'character' => 'Paulie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            216 => 
            array (
                'cast_id' => 2321,
                'movie_id' => 255,
                'person_id' => 540,
                'character' => 'FBI Technician',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            217 => 
            array (
                'cast_id' => 2322,
                'movie_id' => 255,
                'person_id' => 1123,
                'character' => 'Maggie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            218 => 
            array (
                'cast_id' => 2323,
                'movie_id' => 255,
                'person_id' => 1124,
                'character' => 'Sonnys Girlfriend',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            219 => 
            array (
                'cast_id' => 2324,
                'movie_id' => 256,
                'person_id' => 1006,
                'character' => 'Clay Dalton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            220 => 
            array (
                'cast_id' => 2325,
                'movie_id' => 256,
                'person_id' => 439,
                'character' => 'Rham Jas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            221 => 
            array (
                'cast_id' => 2326,
                'movie_id' => 256,
                'person_id' => 258,
                'character' => 'Doctor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            222 => 
            array (
                'cast_id' => 2327,
                'movie_id' => 256,
                'person_id' => 1125,
                'character' => 'Christine Brown',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            223 => 
            array (
                'cast_id' => 2328,
                'movie_id' => 257,
                'person_id' => 327,
                'character' => 'Wong Fei-Hung',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            224 => 
            array (
                'cast_id' => 2329,
                'movie_id' => 258,
                'person_id' => 11,
                'character' => 'Ed Wood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            225 => 
            array (
                'cast_id' => 2330,
                'movie_id' => 258,
                'person_id' => 115,
                'character' => 'Orson Welles',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            226 => 
            array (
                'cast_id' => 2331,
                'movie_id' => 258,
                'person_id' => 348,
                'character' => 'Bunny Breckinridge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            227 => 
            array (
                'cast_id' => 2332,
                'movie_id' => 258,
                'person_id' => 1126,
                'character' => 'Bela Lugosi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            228 => 
            array (
                'cast_id' => 2333,
                'movie_id' => 258,
                'person_id' => 1127,
                'character' => 'Dolores Fuller',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            229 => 
            array (
                'cast_id' => 2334,
                'movie_id' => 258,
                'person_id' => 1128,
                'character' => 'Kathy OHara',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            230 => 
            array (
                'cast_id' => 2335,
                'movie_id' => 258,
                'person_id' => 1129,
                'character' => 'Criswell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            231 => 
            array (
                'cast_id' => 2336,
                'movie_id' => 258,
                'person_id' => 1130,
                'character' => 'Vampira',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            232 => 
            array (
                'cast_id' => 2337,
                'movie_id' => 260,
                'person_id' => 11,
                'character' => 'Edward Scissorhands',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            233 => 
            array (
                'cast_id' => 2338,
                'movie_id' => 260,
                'person_id' => 45,
                'character' => 'Kim',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            234 => 
            array (
                'cast_id' => 2339,
                'movie_id' => 260,
                'person_id' => 211,
                'character' => 'Jim',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            235 => 
            array (
                'cast_id' => 2340,
                'movie_id' => 260,
                'person_id' => 147,
                'character' => 'Bill',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            236 => 
            array (
                'cast_id' => 2341,
                'movie_id' => 260,
                'person_id' => 1131,
                'character' => 'Peg',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            237 => 
            array (
                'cast_id' => 2342,
                'movie_id' => 260,
                'person_id' => 1132,
                'character' => 'The Inventor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            238 => 
            array (
                'cast_id' => 2343,
                'movie_id' => 261,
                'person_id' => 285,
                'character' => 'Jane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            239 => 
            array (
                'cast_id' => 2344,
                'movie_id' => 261,
                'person_id' => 149,
                'character' => 'Lucas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            240 => 
            array (
                'cast_id' => 2345,
                'movie_id' => 261,
                'person_id' => 482,
                'character' => 'Corey Mason',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            241 => 
            array (
                'cast_id' => 2346,
                'movie_id' => 261,
                'person_id' => 1133,
                'character' => 'Joe Reaves',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            242 => 
            array (
                'cast_id' => 2347,
                'movie_id' => 261,
                'person_id' => 1134,
                'character' => 'Rex Manning',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            243 => 
            array (
                'cast_id' => 2348,
                'movie_id' => 261,
                'person_id' => 1135,
                'character' => 'AJ',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            244 => 
            array (
                'cast_id' => 2349,
                'movie_id' => 261,
                'person_id' => 1136,
                'character' => 'Debra',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            245 => 
            array (
                'cast_id' => 2350,
                'movie_id' => 261,
                'person_id' => 1137,
                'character' => 'Gina',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            246 => 
            array (
                'cast_id' => 2351,
                'movie_id' => 262,
                'person_id' => 426,
                'character' => 'Robert Clayton Dean',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            247 => 
            array (
                'cast_id' => 2352,
                'movie_id' => 262,
                'person_id' => 912,
                'character' => 'Edward Lyle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            248 => 
            array (
                'cast_id' => 2353,
                'movie_id' => 262,
                'person_id' => 614,
                'character' => 'Thomas Brian Reynolds',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            249 => 
            array (
                'cast_id' => 2354,
                'movie_id' => 262,
                'person_id' => 829,
                'character' => 'Carla Dean',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            250 => 
            array (
                'cast_id' => 2355,
                'movie_id' => 262,
                'person_id' => 537,
                'character' => 'David Pratt',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            251 => 
            array (
                'cast_id' => 2356,
                'movie_id' => 262,
                'person_id' => 892,
                'character' => 'Krug',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            252 => 
            array (
                'cast_id' => 2357,
                'movie_id' => 262,
                'person_id' => 772,
                'character' => 'Daniel Zavitz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            253 => 
            array (
                'cast_id' => 2358,
                'movie_id' => 262,
                'person_id' => 995,
                'character' => 'Fiedler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            254 => 
            array (
                'cast_id' => 2359,
                'movie_id' => 262,
                'person_id' => 922,
                'character' => 'Lenny',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            255 => 
            array (
                'cast_id' => 2360,
                'movie_id' => 262,
                'person_id' => 1093,
                'character' => 'Selby',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            256 => 
            array (
                'cast_id' => 2361,
                'movie_id' => 262,
                'person_id' => 534,
                'character' => 'Boss Paulie Pintero',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            257 => 
            array (
                'cast_id' => 2362,
                'movie_id' => 262,
                'person_id' => 1138,
                'character' => 'Brill',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            258 => 
            array (
                'cast_id' => 2363,
                'movie_id' => 262,
                'person_id' => 1139,
                'character' => 'Jamie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            259 => 
            array (
                'cast_id' => 2364,
                'movie_id' => 263,
                'person_id' => 194,
                'character' => 'Ed Masry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            260 => 
            array (
                'cast_id' => 2365,
                'movie_id' => 263,
                'person_id' => 207,
                'character' => 'George',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            261 => 
            array (
                'cast_id' => 2366,
                'movie_id' => 263,
                'person_id' => 1140,
                'character' => 'Erin Brockovich',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            262 => 
            array (
                'cast_id' => 2367,
                'movie_id' => 264,
                'person_id' => 431,
                'character' => 'Joel Barish',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            263 => 
            array (
                'cast_id' => 2368,
                'movie_id' => 264,
                'person_id' => 135,
                'character' => 'Clementine Kruczynski',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            264 => 
            array (
                'cast_id' => 2369,
                'movie_id' => 264,
                'person_id' => 169,
                'character' => 'Patrick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            265 => 
            array (
                'cast_id' => 2370,
                'movie_id' => 264,
                'person_id' => 123,
                'character' => 'Stan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            266 => 
            array (
                'cast_id' => 2371,
                'movie_id' => 264,
                'person_id' => 496,
                'character' => 'Rob',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            267 => 
            array (
                'cast_id' => 2372,
                'movie_id' => 264,
                'person_id' => 202,
                'character' => 'Dr. Mierzwiak',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            268 => 
            array (
                'cast_id' => 2373,
                'movie_id' => 264,
                'person_id' => 1141,
                'character' => 'Mary',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            269 => 
            array (
                'cast_id' => 2374,
                'movie_id' => 265,
                'person_id' => 755,
                'character' => 'Ashley \'Ash\' J. Williams',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            270 => 
            array (
                'cast_id' => 2375,
                'movie_id' => 265,
                'person_id' => 258,
                'character' => 'Possessed Henrietta',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            271 => 
            array (
                'cast_id' => 2376,
                'movie_id' => 266,
                'person_id' => 755,
                'character' => 'Ash',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            272 => 
            array (
                'cast_id' => 2377,
                'movie_id' => 266,
                'person_id' => 258,
                'character' => 'Cowardly Warrior',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            273 => 
            array (
                'cast_id' => 2378,
                'movie_id' => 266,
                'person_id' => 259,
                'character' => 'Fake Shemp',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            274 => 
            array (
                'cast_id' => 2379,
                'movie_id' => 267,
                'person_id' => 725,
                'character' => 'Sean Archer / Castor Troy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            275 => 
            array (
                'cast_id' => 2380,
                'movie_id' => 267,
                'person_id' => 226,
                'character' => 'Castor Troy / Sean Archer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            276 => 
            array (
                'cast_id' => 2381,
                'movie_id' => 267,
                'person_id' => 190,
                'character' => 'Dr. Eve Archer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            277 => 
            array (
                'cast_id' => 2382,
                'movie_id' => 267,
                'person_id' => 109,
                'character' => 'Pollux Troy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            278 => 
            array (
                'cast_id' => 2383,
                'movie_id' => 267,
                'person_id' => 519,
                'character' => 'Prison Guard Walton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            279 => 
            array (
                'cast_id' => 2384,
                'movie_id' => 267,
                'person_id' => 157,
                'character' => 'Hollis Miller',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            280 => 
            array (
                'cast_id' => 2385,
                'movie_id' => 267,
                'person_id' => 1142,
                'character' => 'Sasha Hassler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            281 => 
            array (
                'cast_id' => 2386,
                'movie_id' => 267,
                'person_id' => 1143,
                'character' => 'Jamie Archer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            282 => 
            array (
                'cast_id' => 2387,
                'movie_id' => 267,
                'person_id' => 1144,
                'character' => 'Dietrich Hassler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            283 => 
            array (
                'cast_id' => 2388,
                'movie_id' => 268,
                'person_id' => 1098,
                'character' => 'Nina Banks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            284 => 
            array (
                'cast_id' => 2389,
                'movie_id' => 268,
                'person_id' => 98,
                'character' => 'Howard Weinstein',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            285 => 
            array (
                'cast_id' => 2390,
                'movie_id' => 268,
                'person_id' => 1075,
                'character' => 'Singer at Audition',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            286 => 
            array (
                'cast_id' => 2391,
                'movie_id' => 268,
                'person_id' => 1145,
                'character' => 'George Banks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            287 => 
            array (
                'cast_id' => 2392,
                'movie_id' => 268,
                'person_id' => 1146,
                'character' => 'Annie Banks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            288 => 
            array (
                'cast_id' => 2393,
                'movie_id' => 268,
                'person_id' => 1147,
                'character' => 'Matty Banks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            289 => 
            array (
                'cast_id' => 2394,
                'movie_id' => 268,
                'person_id' => 1148,
                'character' => 'Franck Eggelhoffer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            290 => 
            array (
                'cast_id' => 2402,
                'movie_id' => 270,
                'person_id' => 11,
                'character' => 'Raoul Duke',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            291 => 
            array (
                'cast_id' => 2403,
                'movie_id' => 270,
                'person_id' => 362,
                'character' => 'Dr Gonzo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            292 => 
            array (
                'cast_id' => 2404,
                'movie_id' => 270,
                'person_id' => 111,
                'character' => 'L. Ron Bumquist',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            293 => 
            array (
                'cast_id' => 2405,
                'movie_id' => 270,
                'person_id' => 170,
                'character' => 'Musician',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            294 => 
            array (
                'cast_id' => 2406,
                'movie_id' => 270,
                'person_id' => 26,
                'character' => 'Judge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            295 => 
            array (
                'cast_id' => 2407,
                'movie_id' => 270,
                'person_id' => 855,
                'character' => 'Blonde TV Reporter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            296 => 
            array (
                'cast_id' => 2408,
                'movie_id' => 270,
                'person_id' => 370,
                'character' => 'Wee Waiter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            297 => 
            array (
                'cast_id' => 2409,
                'movie_id' => 270,
                'person_id' => 489,
                'character' => 'Clerk at Flamingo Hotel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            298 => 
            array (
                'cast_id' => 2410,
                'movie_id' => 270,
                'person_id' => 37,
                'character' => 'Alice the Maid',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            299 => 
            array (
                'cast_id' => 2411,
                'movie_id' => 270,
                'person_id' => 1149,
                'character' => 'Hitchhiker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            300 => 
            array (
                'cast_id' => 2412,
                'movie_id' => 270,
                'person_id' => 1150,
                'character' => 'Highway Patrolman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            301 => 
            array (
                'cast_id' => 2413,
                'movie_id' => 271,
                'person_id' => 698,
                'character' => 'Ferris Bueller',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            302 => 
            array (
                'cast_id' => 2414,
                'movie_id' => 271,
                'person_id' => 1129,
                'character' => 'Ed Rooney',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            303 => 
            array (
                'cast_id' => 2415,
                'movie_id' => 271,
                'person_id' => 941,
                'character' => 'Jeanie Bueller',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            304 => 
            array (
                'cast_id' => 2416,
                'movie_id' => 271,
                'person_id' => 679,
                'character' => 'Boy in Police Station',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            305 => 
            array (
                'cast_id' => 2417,
                'movie_id' => 271,
                'person_id' => 1151,
                'character' => 'Cameron Frye',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            306 => 
            array (
                'cast_id' => 2418,
                'movie_id' => 271,
                'person_id' => 1152,
                'character' => 'Sloane Peterson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            307 => 
            array (
                'cast_id' => 2419,
                'movie_id' => 271,
                'person_id' => 1153,
                'character' => 'Grace',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            308 => 
            array (
                'cast_id' => 2420,
                'movie_id' => 272,
                'person_id' => 1045,
                'character' => 'D-Fens',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            309 => 
            array (
                'cast_id' => 2421,
                'movie_id' => 272,
                'person_id' => 1084,
                'character' => 'Prendergast',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            310 => 
            array (
                'cast_id' => 2422,
                'movie_id' => 272,
                'person_id' => 224,
                'character' => 'Beth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            311 => 
            array (
                'cast_id' => 2423,
                'movie_id' => 272,
                'person_id' => 897,
                'character' => 'Captain Yardley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            312 => 
            array (
                'cast_id' => 2424,
                'movie_id' => 272,
                'person_id' => 711,
                'character' => 'Dad',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            313 => 
            array (
                'cast_id' => 2425,
                'movie_id' => 272,
                'person_id' => 1154,
                'character' => 'Sandra',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            314 => 
            array (
                'cast_id' => 2426,
                'movie_id' => 272,
                'person_id' => 1155,
                'character' => 'Mrs Prendergast',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            315 => 
            array (
                'cast_id' => 2427,
                'movie_id' => 273,
                'person_id' => 144,
                'character' => 'Reed Richards',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            316 => 
            array (
                'cast_id' => 2428,
                'movie_id' => 273,
                'person_id' => 122,
                'character' => 'Johnny Storm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            317 => 
            array (
                'cast_id' => 2429,
                'movie_id' => 273,
                'person_id' => 341,
                'character' => 'Alicia Masters',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            318 => 
            array (
                'cast_id' => 2430,
                'movie_id' => 273,
                'person_id' => 459,
                'character' => 'Willie Lumpkin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            319 => 
            array (
                'cast_id' => 2431,
                'movie_id' => 273,
                'person_id' => 1156,
                'character' => 'Sue Storm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            320 => 
            array (
                'cast_id' => 2432,
                'movie_id' => 273,
                'person_id' => 1157,
                'character' => 'Ben Grimm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            321 => 
            array (
                'cast_id' => 2433,
                'movie_id' => 273,
                'person_id' => 1158,
                'character' => 'Victor Von Doom',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            322 => 
            array (
                'cast_id' => 2434,
                'movie_id' => 274,
                'person_id' => 144,
                'character' => 'Reed Richards',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            323 => 
            array (
                'cast_id' => 2435,
                'movie_id' => 274,
                'person_id' => 1156,
                'character' => 'Susan Storm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            324 => 
            array (
                'cast_id' => 2436,
                'movie_id' => 274,
                'person_id' => 122,
                'character' => 'Johnny Storm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            325 => 
            array (
                'cast_id' => 2437,
                'movie_id' => 274,
                'person_id' => 1157,
                'character' => 'Ben Grimm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            326 => 
            array (
                'cast_id' => 2438,
                'movie_id' => 274,
                'person_id' => 1158,
                'character' => 'Victor Von Doom',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            327 => 
            array (
                'cast_id' => 2439,
                'movie_id' => 274,
                'person_id' => 341,
                'character' => 'Alicia Masters',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            328 => 
            array (
                'cast_id' => 2440,
                'movie_id' => 274,
                'person_id' => 71,
            'character' => 'The Silver Surfer (voice)',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            329 => 
            array (
                'cast_id' => 2441,
                'movie_id' => 274,
                'person_id' => 511,
                'character' => 'The Silver Surfer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            330 => 
            array (
                'cast_id' => 2442,
                'movie_id' => 274,
                'person_id' => 633,
                'character' => 'Captain Raye',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            331 => 
            array (
                'cast_id' => 2443,
                'movie_id' => 274,
                'person_id' => 459,
                'character' => 'Rejected Wedding Guest',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            332 => 
            array (
                'cast_id' => 2444,
                'movie_id' => 275,
                'person_id' => 107,
                'character' => 'Jerry Lundegaard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            333 => 
            array (
                'cast_id' => 2445,
                'movie_id' => 275,
                'person_id' => 799,
                'character' => 'Carl Showalter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            334 => 
            array (
                'cast_id' => 2446,
                'movie_id' => 275,
                'person_id' => 103,
                'character' => 'Gaear Grimsrud',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            335 => 
            array (
                'cast_id' => 2447,
                'movie_id' => 275,
                'person_id' => 623,
                'character' => 'Marge Gunderson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            336 => 
            array (
                'cast_id' => 2448,
                'movie_id' => 275,
                'person_id' => 519,
                'character' => 'Norm Gunderson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            337 => 
            array (
                'cast_id' => 2449,
                'movie_id' => 275,
                'person_id' => 755,
                'character' => 'Soap Opera Actor on TV',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            338 => 
            array (
                'cast_id' => 2451,
                'movie_id' => 37,
                'person_id' => 1122,
                'character' => 'President Lindberg',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            339 => 
            array (
                'cast_id' => 2452,
                'movie_id' => 276,
                'person_id' => 12,
                'character' => 'Jerry Plunkett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            340 => 
            array (
                'cast_id' => 2453,
                'movie_id' => 276,
                'person_id' => 61,
                'character' => 'Father Duffy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            341 => 
            array (
                'cast_id' => 2454,
                'movie_id' => 277,
                'person_id' => 996,
                'character' => 'Billy Hitchcock',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            342 => 
            array (
                'cast_id' => 2455,
                'movie_id' => 277,
                'person_id' => 254,
                'character' => 'Bludworth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            343 => 
            array (
                'cast_id' => 2456,
                'movie_id' => 277,
                'person_id' => 1159,
                'character' => 'Alex Browning',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            344 => 
            array (
                'cast_id' => 2457,
                'movie_id' => 277,
                'person_id' => 1160,
                'character' => 'Clear Rivers',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            345 => 
            array (
                'cast_id' => 2458,
                'movie_id' => 277,
                'person_id' => 1161,
                'character' => 'Carter Horton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            346 => 
            array (
                'cast_id' => 2459,
                'movie_id' => 278,
                'person_id' => 11,
                'character' => 'Sir James Matthew Barrie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            347 => 
            array (
                'cast_id' => 2460,
                'movie_id' => 278,
                'person_id' => 135,
                'character' => 'Sylvia Llewelyn Davies',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            348 => 
            array (
                'cast_id' => 2461,
                'movie_id' => 278,
                'person_id' => 945,
                'character' => 'Mrs. Emma du Maurier',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            349 => 
            array (
                'cast_id' => 2462,
                'movie_id' => 278,
                'person_id' => 999,
                'character' => 'Charles Frohman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            350 => 
            array (
                'cast_id' => 2463,
                'movie_id' => 278,
                'person_id' => 859,
                'character' => 'Peter Llewelyn Davies',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            351 => 
            array (
                'cast_id' => 2464,
                'movie_id' => 278,
                'person_id' => 729,
                'character' => '\'Peter Pan\'',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            352 => 
            array (
                'cast_id' => 2465,
                'movie_id' => 278,
                'person_id' => 591,
                'character' => 'Mr. Jaspers - Usher',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            353 => 
            array (
                'cast_id' => 2466,
                'movie_id' => 278,
                'person_id' => 375,
                'character' => '\'Smee\'',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            354 => 
            array (
                'cast_id' => 2467,
                'movie_id' => 279,
                'person_id' => 450,
                'character' => 'Archie Leach',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            355 => 
            array (
                'cast_id' => 2468,
                'movie_id' => 279,
                'person_id' => 22,
                'character' => 'Hutchison',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            356 => 
            array (
                'cast_id' => 2469,
                'movie_id' => 279,
                'person_id' => 1162,
                'character' => 'Wanda Gershwitz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            357 => 
            array (
                'cast_id' => 2470,
                'movie_id' => 279,
                'person_id' => 1163,
                'character' => 'Otto',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            358 => 
            array (
                'cast_id' => 2471,
                'movie_id' => 279,
                'person_id' => 1164,
                'character' => 'Ken Pile',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            359 => 
            array (
                'cast_id' => 2472,
                'movie_id' => 280,
                'person_id' => 862,
                'character' => 'Robert Eroica Dupea',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            360 => 
            array (
                'cast_id' => 2473,
                'movie_id' => 281,
                'person_id' => 533,
                'character' => 'Forrest Gump',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            361 => 
            array (
                'cast_id' => 2474,
                'movie_id' => 281,
                'person_id' => 59,
                'character' => 'Mrs. Gump',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            362 => 
            array (
                'cast_id' => 2475,
                'movie_id' => 281,
                'person_id' => 495,
                'character' => 'School Bus Driver',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            363 => 
            array (
                'cast_id' => 2476,
                'movie_id' => 281,
                'person_id' => 1120,
                'character' => 'Jenny Curran',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            364 => 
            array (
                'cast_id' => 2477,
                'movie_id' => 281,
                'person_id' => 888,
                'character' => 'Wesley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            365 => 
            array (
                'cast_id' => 2478,
                'movie_id' => 281,
                'person_id' => 1039,
                'character' => 'Forrest Junior',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            366 => 
            array (
                'cast_id' => 2479,
                'movie_id' => 281,
                'person_id' => 335,
                'character' => 'Elvis Presley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            367 => 
            array (
                'cast_id' => 2480,
                'movie_id' => 281,
                'person_id' => 1165,
                'character' => 'Lieutenant Dan Taylor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            368 => 
            array (
                'cast_id' => 2481,
                'movie_id' => 282,
                'person_id' => 827,
                'character' => 'Craig Jones',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            369 => 
            array (
                'cast_id' => 2482,
                'movie_id' => 282,
                'person_id' => 234,
                'character' => 'Smokey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            370 => 
            array (
                'cast_id' => 2483,
                'movie_id' => 282,
                'person_id' => 830,
                'character' => 'Debbie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            371 => 
            array (
                'cast_id' => 2484,
                'movie_id' => 282,
                'person_id' => 1122,
                'character' => 'Deebo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            372 => 
            array (
                'cast_id' => 2485,
                'movie_id' => 282,
                'person_id' => 829,
                'character' => 'Dana Jones',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            373 => 
            array (
                'cast_id' => 2486,
                'movie_id' => 282,
                'person_id' => 618,
                'character' => 'Pastor Clever',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            374 => 
            array (
                'cast_id' => 2487,
                'movie_id' => 282,
                'person_id' => 1002,
                'character' => 'Craps Player',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            375 => 
            array (
                'cast_id' => 2488,
                'movie_id' => 282,
                'person_id' => 1166,
                'character' => 'Red',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            376 => 
            array (
                'cast_id' => 2489,
                'movie_id' => 282,
                'person_id' => 1167,
                'character' => 'Store Worker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            377 => 
            array (
                'cast_id' => 2490,
                'movie_id' => 283,
                'person_id' => 1114,
                'character' => 'Seth Gecko',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            378 => 
            array (
                'cast_id' => 2491,
                'movie_id' => 283,
                'person_id' => 898,
                'character' => 'Jacob Fuller',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            379 => 
            array (
                'cast_id' => 2492,
                'movie_id' => 283,
                'person_id' => 704,
                'character' => 'Carlos',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            380 => 
            array (
                'cast_id' => 2493,
                'movie_id' => 283,
                'person_id' => 1168,
                'character' => 'Richard Gecko',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            381 => 
            array (
                'cast_id' => 2494,
                'movie_id' => 283,
                'person_id' => 1169,
                'character' => 'Kate Fuller',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            382 => 
            array (
                'cast_id' => 2495,
                'movie_id' => 283,
                'person_id' => 1170,
                'character' => 'Santanico Pandemonium',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            383 => 
            array (
                'cast_id' => 2496,
                'movie_id' => 283,
                'person_id' => 1171,
                'character' => 'Razor Charlie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            384 => 
            array (
                'cast_id' => 2497,
                'movie_id' => 283,
                'person_id' => 1172,
                'character' => 'Sex Machine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            385 => 
            array (
                'cast_id' => 2498,
                'movie_id' => 283,
                'person_id' => 1173,
                'character' => 'Frost',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            386 => 
            array (
                'cast_id' => 2499,
                'movie_id' => 283,
                'person_id' => 1174,
                'character' => 'Newscaster Kelly Houge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            387 => 
            array (
                'cast_id' => 2500,
                'movie_id' => 284,
                'person_id' => 1045,
                'character' => 'Nicholas Van Orton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            388 => 
            array (
                'cast_id' => 2501,
                'movie_id' => 284,
                'person_id' => 262,
                'character' => 'Conrad Van Orton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            389 => 
            array (
                'cast_id' => 2502,
                'movie_id' => 284,
                'person_id' => 266,
                'character' => 'Jim Feingold',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            390 => 
            array (
                'cast_id' => 2503,
                'movie_id' => 284,
                'person_id' => 918,
                'character' => 'Anson Baer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            391 => 
            array (
                'cast_id' => 2504,
                'movie_id' => 284,
                'person_id' => 1175,
                'character' => 'Christine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            392 => 
            array (
                'cast_id' => 2505,
                'movie_id' => 285,
                'person_id' => 725,
                'character' => 'Chili Palmer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            393 => 
            array (
                'cast_id' => 2506,
                'movie_id' => 285,
                'person_id' => 912,
                'character' => 'Harry Zimm',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            394 => 
            array (
                'cast_id' => 2507,
                'movie_id' => 285,
                'person_id' => 1109,
                'character' => 'Martin Weir',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            395 => 
            array (
                'cast_id' => 2508,
                'movie_id' => 285,
                'person_id' => 541,
                'character' => 'Ray \'Bones\' Barboni',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            396 => 
            array (
                'cast_id' => 2509,
                'movie_id' => 285,
                'person_id' => 913,
                'character' => 'Bear',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            397 => 
            array (
                'cast_id' => 2510,
                'movie_id' => 285,
                'person_id' => 708,
                'character' => 'Tommy Carlo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            398 => 
            array (
                'cast_id' => 2511,
                'movie_id' => 285,
                'person_id' => 709,
                'character' => 'Mr. Escobar',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            399 => 
            array (
                'cast_id' => 2512,
                'movie_id' => 285,
                'person_id' => 898,
                'character' => 'Himself',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            400 => 
            array (
                'cast_id' => 2513,
                'movie_id' => 285,
                'person_id' => 1176,
                'character' => 'Karen Flores',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            401 => 
            array (
                'cast_id' => 2514,
                'movie_id' => 285,
                'person_id' => 1177,
                'character' => 'Bo Catlett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            402 => 
            array (
                'cast_id' => 2515,
                'movie_id' => 285,
                'person_id' => 1178,
                'character' => 'Doris Saphron',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            403 => 
            array (
                'cast_id' => 2516,
                'movie_id' => 286,
                'person_id' => 942,
                'character' => 'Sam Wheat',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            404 => 
            array (
                'cast_id' => 2517,
                'movie_id' => 286,
                'person_id' => 707,
                'character' => 'Oda Mae Brown',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            405 => 
            array (
                'cast_id' => 2518,
                'movie_id' => 286,
                'person_id' => 1179,
                'character' => 'Molly Jensen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            406 => 
            array (
                'cast_id' => 2519,
                'movie_id' => 286,
                'person_id' => 1180,
                'character' => 'Subway Ghost',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            407 => 
            array (
                'cast_id' => 2520,
                'movie_id' => 286,
                'person_id' => 1181,
                'character' => 'Carl Bruner',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            408 => 
            array (
                'cast_id' => 2521,
                'movie_id' => 287,
                'person_id' => 348,
                'character' => 'Dr. Peter Venkman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            409 => 
            array (
                'cast_id' => 2522,
                'movie_id' => 287,
                'person_id' => 14,
                'character' => 'Dr. Raymond Stantz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            410 => 
            array (
                'cast_id' => 2523,
                'movie_id' => 287,
                'person_id' => 10,
                'character' => 'Dana Barrett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            411 => 
            array (
                'cast_id' => 2524,
                'movie_id' => 287,
                'person_id' => 351,
                'character' => 'Dr. Egon Spengler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            412 => 
            array (
                'cast_id' => 2525,
                'movie_id' => 287,
                'person_id' => 352,
                'character' => 'Louis Tully',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            413 => 
            array (
                'cast_id' => 2526,
                'movie_id' => 287,
                'person_id' => 297,
                'character' => 'Winston Zeddemore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            414 => 
            array (
                'cast_id' => 2527,
                'movie_id' => 287,
                'person_id' => 353,
                'character' => 'Janine Melnitz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            415 => 
            array (
                'cast_id' => 2528,
                'movie_id' => 287,
                'person_id' => 704,
                'character' => 'Dock Supervisor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            416 => 
            array (
                'cast_id' => 2529,
                'movie_id' => 287,
                'person_id' => 616,
                'character' => 'Milton Angland',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            417 => 
            array (
                'cast_id' => 2530,
                'movie_id' => 287,
                'person_id' => 1182,
                'character' => 'Dr Janosz Poha',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            418 => 
            array (
                'cast_id' => 2531,
                'movie_id' => 287,
                'person_id' => 1183,
                'character' => 'The Judge',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            419 => 
            array (
                'cast_id' => 2532,
                'movie_id' => 288,
                'person_id' => 890,
                'character' => 'Connor Mead',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            420 => 
            array (
                'cast_id' => 2533,
                'movie_id' => 288,
                'person_id' => 1045,
                'character' => 'Uncle Wayne',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            421 => 
            array (
                'cast_id' => 2534,
                'movie_id' => 288,
                'person_id' => 55,
                'character' => 'Allison Vandermeersh',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            422 => 
            array (
                'cast_id' => 2535,
                'movie_id' => 288,
                'person_id' => 1184,
                'character' => 'Jenny Perotti',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            423 => 
            array (
                'cast_id' => 2536,
                'movie_id' => 288,
                'person_id' => 1185,
                'character' => 'Paul',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            424 => 
            array (
                'cast_id' => 2537,
                'movie_id' => 288,
                'person_id' => 1186,
                'character' => 'Sandra',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            425 => 
            array (
                'cast_id' => 2538,
                'movie_id' => 288,
                'person_id' => 1187,
                'character' => 'Sergeant Volkom',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            426 => 
            array (
                'cast_id' => 2539,
                'movie_id' => 288,
                'person_id' => 1188,
                'character' => 'Vonda Volkom',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            427 => 
            array (
                'cast_id' => 2540,
                'movie_id' => 289,
                'person_id' => 488,
                'character' => 'Maximus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            428 => 
            array (
                'cast_id' => 2541,
                'movie_id' => 289,
                'person_id' => 364,
                'character' => 'Marcus Aurelius',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            429 => 
            array (
                'cast_id' => 2542,
                'movie_id' => 289,
                'person_id' => 360,
                'character' => 'Juba',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            430 => 
            array (
                'cast_id' => 2543,
                'movie_id' => 289,
                'person_id' => 1189,
                'character' => 'Commodus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            431 => 
            array (
                'cast_id' => 2544,
                'movie_id' => 289,
                'person_id' => 1190,
                'character' => 'Lucilla',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            432 => 
            array (
                'cast_id' => 2545,
                'movie_id' => 289,
                'person_id' => 1191,
                'character' => 'Proximo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            433 => 
            array (
                'cast_id' => 2546,
                'movie_id' => 289,
                'person_id' => 1192,
                'character' => 'Slave Trader',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            434 => 
            array (
                'cast_id' => 2547,
                'movie_id' => 290,
                'person_id' => 199,
                'character' => 'Claire Montgomery',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            435 => 
            array (
                'cast_id' => 2548,
                'movie_id' => 290,
                'person_id' => 889,
                'character' => 'Burke',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            436 => 
            array (
                'cast_id' => 2549,
                'movie_id' => 290,
                'person_id' => 1185,
                'character' => 'Tiny',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            437 => 
            array (
                'cast_id' => 2550,
                'movie_id' => 290,
                'person_id' => 1193,
                'character' => 'Ronna Martin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            438 => 
            array (
                'cast_id' => 2551,
                'movie_id' => 290,
                'person_id' => 1194,
                'character' => 'Adam',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            439 => 
            array (
                'cast_id' => 2552,
                'movie_id' => 290,
                'person_id' => 1195,
                'character' => 'Todd Gaines',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            440 => 
            array (
                'cast_id' => 2553,
                'movie_id' => 290,
                'person_id' => 1196,
                'character' => 'Sandra',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            441 => 
            array (
                'cast_id' => 2554,
                'movie_id' => 291,
                'person_id' => 396,
                'character' => 'Chandler Jarrell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            442 => 
            array (
                'cast_id' => 2555,
                'movie_id' => 291,
                'person_id' => 42,
                'character' => 'Sardo Numspa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            443 => 
            array (
                'cast_id' => 2556,
                'movie_id' => 291,
                'person_id' => 806,
                'character' => 'The Old Man',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            444 => 
            array (
                'cast_id' => 2557,
                'movie_id' => 291,
                'person_id' => 805,
                'character' => 'Doctor Hong',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            445 => 
            array (
                'cast_id' => 2559,
                'movie_id' => 291,
                'person_id' => 1197,
                'character' => 'Kee Nang',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            446 => 
            array (
                'cast_id' => 2560,
                'movie_id' => 292,
                'person_id' => 177,
                'character' => 'Will Hunting',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            447 => 
            array (
                'cast_id' => 2561,
                'movie_id' => 292,
                'person_id' => 145,
                'character' => 'Chuckie Sullivan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            448 => 
            array (
                'cast_id' => 2562,
                'movie_id' => 292,
                'person_id' => 130,
                'character' => 'Prof. Gerald Lambeau',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            449 => 
            array (
                'cast_id' => 2563,
                'movie_id' => 292,
                'person_id' => 1198,
                'character' => 'Sean Maguire',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            450 => 
            array (
                'cast_id' => 2564,
                'movie_id' => 292,
                'person_id' => 1199,
                'character' => 'Skylar',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            451 => 
            array (
                'cast_id' => 2565,
                'movie_id' => 292,
                'person_id' => 1200,
                'character' => 'Morgan OMally',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            452 => 
            array (
                'cast_id' => 2566,
                'movie_id' => 292,
                'person_id' => 1201,
                'character' => 'Billy McBride',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            453 => 
            array (
                'cast_id' => 2567,
                'movie_id' => 293,
                'person_id' => 1200,
                'character' => 'Patrick Kenzie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            454 => 
            array (
                'cast_id' => 2568,
                'movie_id' => 293,
                'person_id' => 552,
                'character' => 'Angie Gennaro',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            455 => 
            array (
                'cast_id' => 2569,
                'movie_id' => 293,
                'person_id' => 203,
                'character' => 'Jack Doyle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            456 => 
            array (
                'cast_id' => 2570,
                'movie_id' => 293,
                'person_id' => 781,
                'character' => 'Nick Poole',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            457 => 
            array (
                'cast_id' => 2571,
                'movie_id' => 293,
                'person_id' => 1202,
                'character' => 'Remy Bressant',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            458 => 
            array (
                'cast_id' => 2572,
                'movie_id' => 293,
                'person_id' => 1203,
                'character' => 'Helene McCready',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            459 => 
            array (
                'cast_id' => 2573,
                'movie_id' => 294,
                'person_id' => 13,
                'character' => 'Mikey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            460 => 
            array (
                'cast_id' => 2574,
                'movie_id' => 294,
                'person_id' => 500,
                'character' => 'Brand',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            461 => 
            array (
                'cast_id' => 2575,
                'movie_id' => 294,
                'person_id' => 69,
                'character' => 'Jake',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            462 => 
            array (
                'cast_id' => 2576,
                'movie_id' => 294,
                'person_id' => 73,
                'character' => 'Francis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            463 => 
            array (
                'cast_id' => 2577,
                'movie_id' => 294,
                'person_id' => 1204,
                'character' => 'Chunk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            464 => 
            array (
                'cast_id' => 2578,
                'movie_id' => 294,
                'person_id' => 1205,
                'character' => 'Mouth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            465 => 
            array (
                'cast_id' => 2579,
                'movie_id' => 294,
                'person_id' => 1206,
                'character' => 'Data',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            466 => 
            array (
                'cast_id' => 2580,
                'movie_id' => 294,
                'person_id' => 1207,
                'character' => 'Mama Fratelli',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            467 => 
            array (
                'cast_id' => 2581,
                'movie_id' => 295,
                'person_id' => 725,
                'character' => 'Danny',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            468 => 
            array (
                'cast_id' => 2583,
                'movie_id' => 295,
                'person_id' => 1208,
                'character' => 'Sandy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            469 => 
            array (
                'cast_id' => 2584,
                'movie_id' => 296,
                'person_id' => 642,
                'character' => 'Hal Jordan / Green Lantern',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            470 => 
            array (
                'cast_id' => 2585,
                'movie_id' => 296,
                'person_id' => 607,
                'character' => 'Carol Ferris',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            471 => 
            array (
                'cast_id' => 2586,
                'movie_id' => 296,
                'person_id' => 467,
                'character' => 'Sinestro',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            472 => 
            array (
                'cast_id' => 2587,
                'movie_id' => 296,
                'person_id' => 931,
                'character' => 'Carl Ferris',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            473 => 
            array (
                'cast_id' => 2588,
                'movie_id' => 296,
                'person_id' => 826,
                'character' => 'Doctor Waller',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            474 => 
            array (
                'cast_id' => 2589,
                'movie_id' => 296,
                'person_id' => 792,
                'character' => 'Martin Jordan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            475 => 
            array (
                'cast_id' => 2590,
                'movie_id' => 296,
                'person_id' => 587,
                'character' => 'Abin Sur',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            476 => 
            array (
                'cast_id' => 2591,
                'movie_id' => 296,
                'person_id' => 761,
                'character' => 'Tomar-Re',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            477 => 
            array (
                'cast_id' => 2592,
                'movie_id' => 296,
                'person_id' => 1002,
                'character' => 'Kilowog',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            478 => 
            array (
                'cast_id' => 2593,
                'movie_id' => 296,
                'person_id' => 1209,
                'character' => 'Hector Hammond',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            479 => 
            array (
                'cast_id' => 2594,
                'movie_id' => 296,
                'person_id' => 1210,
                'character' => 'Hammond',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            480 => 
            array (
                'cast_id' => 2595,
                'movie_id' => 296,
                'person_id' => 1211,
                'character' => 'Parallax',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            481 => 
            array (
                'cast_id' => 2596,
                'movie_id' => 297,
                'person_id' => 348,
                'character' => 'Phil',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            482 => 
            array (
                'cast_id' => 2597,
                'movie_id' => 297,
                'person_id' => 816,
                'character' => 'Ned',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            483 => 
            array (
                'cast_id' => 2598,
                'movie_id' => 297,
                'person_id' => 351,
                'character' => 'Neurologist',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            484 => 
            array (
                'cast_id' => 2599,
                'movie_id' => 297,
                'person_id' => 231,
                'character' => 'Fred',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            485 => 
            array (
                'cast_id' => 2600,
                'movie_id' => 297,
                'person_id' => 1212,
                'character' => 'Rita',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            486 => 
            array (
                'cast_id' => 2601,
                'movie_id' => 297,
                'person_id' => 1213,
                'character' => 'Larry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            487 => 
            array (
                'cast_id' => 2602,
                'movie_id' => 297,
                'person_id' => 1214,
                'character' => 'Buster',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            488 => 
            array (
                'cast_id' => 2603,
                'movie_id' => 298,
                'person_id' => 9,
                'character' => 'Happy Gilmore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            489 => 
            array (
                'cast_id' => 2604,
                'movie_id' => 298,
                'person_id' => 697,
                'character' => 'Otto',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            490 => 
            array (
                'cast_id' => 2605,
                'movie_id' => 298,
                'person_id' => 960,
                'character' => 'Mr. Larson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            491 => 
            array (
                'cast_id' => 2606,
                'movie_id' => 298,
                'person_id' => 1215,
                'character' => 'Shooter McGavin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            492 => 
            array (
                'cast_id' => 2607,
                'movie_id' => 298,
                'person_id' => 1216,
                'character' => 'Virginia Venit',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            493 => 
            array (
                'cast_id' => 2608,
                'movie_id' => 298,
                'person_id' => 1217,
                'character' => 'Grandma',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            494 => 
            array (
                'cast_id' => 2609,
                'movie_id' => 298,
                'person_id' => 1218,
                'character' => 'Chubbs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            495 => 
            array (
                'cast_id' => 2610,
                'movie_id' => 298,
                'person_id' => 1219,
                'character' => 'Orderly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            496 => 
            array (
                'cast_id' => 2611,
                'movie_id' => 299,
                'person_id' => 261,
                'character' => 'Lt. Vincent Hanna',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            497 => 
            array (
                'cast_id' => 2612,
                'movie_id' => 299,
                'person_id' => 846,
                'character' => 'Neil McCauley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            498 => 
            array (
                'cast_id' => 2613,
                'movie_id' => 299,
                'person_id' => 228,
                'character' => 'Chris Shiherlis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            499 => 
            array (
                'cast_id' => 2614,
                'movie_id' => 299,
                'person_id' => 614,
                'character' => 'Nate',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        \DB::table('cast')->insert(array (
            0 => 
            array (
                'cast_id' => 2615,
                'movie_id' => 299,
                'person_id' => 534,
                'character' => 'Michael Cheritto',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'cast_id' => 2616,
                'movie_id' => 299,
                'person_id' => 933,
                'character' => 'Eady',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'cast_id' => 2617,
                'movie_id' => 299,
                'person_id' => 1003,
                'character' => 'Donald Breedan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'cast_id' => 2618,
                'movie_id' => 299,
                'person_id' => 889,
                'character' => 'Roger Van Zant',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'cast_id' => 2619,
                'movie_id' => 299,
                'person_id' => 221,
                'character' => 'Lauren Gustafson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'cast_id' => 2620,
                'movie_id' => 299,
                'person_id' => 558,
                'character' => 'Alan Marciano',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'cast_id' => 2621,
                'movie_id' => 299,
                'person_id' => 1171,
                'character' => 'Trejo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'cast_id' => 2622,
                'movie_id' => 299,
                'person_id' => 1105,
                'character' => 'Hugh Benny',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'cast_id' => 2623,
                'movie_id' => 299,
                'person_id' => 708,
                'character' => 'Construction Clerk',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'cast_id' => 2624,
                'movie_id' => 299,
                'person_id' => 751,
                'character' => 'Dr. Bob',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'cast_id' => 2625,
                'movie_id' => 299,
                'person_id' => 255,
                'character' => 'Ralph',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'cast_id' => 2626,
                'movie_id' => 299,
                'person_id' => 1220,
                'character' => 'Charlene Shiherlis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'cast_id' => 2627,
                'movie_id' => 300,
                'person_id' => 1083,
                'character' => 'Don Vito Corleone',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'cast_id' => 2628,
                'movie_id' => 300,
                'person_id' => 261,
                'character' => 'Michael Corleone',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'cast_id' => 2629,
                'movie_id' => 300,
                'person_id' => 349,
                'character' => 'Sonny Corleone',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'cast_id' => 2630,
                'movie_id' => 300,
                'person_id' => 1084,
                'character' => 'Tom Hagen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'cast_id' => 2631,
                'movie_id' => 300,
                'person_id' => 1098,
                'character' => 'Kay Adams',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'cast_id' => 2632,
                'movie_id' => 300,
                'person_id' => 1221,
                'character' => 'Clemenza',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'cast_id' => 2633,
                'movie_id' => 300,
                'person_id' => 1222,
                'character' => 'Tessio',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'cast_id' => 2634,
                'movie_id' => 300,
                'person_id' => 1223,
                'character' => 'Connie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'cast_id' => 2635,
                'movie_id' => 301,
                'person_id' => 261,
                'character' => 'Michael',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'cast_id' => 2636,
                'movie_id' => 301,
                'person_id' => 1084,
                'character' => 'Tom Hagen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'cast_id' => 2637,
                'movie_id' => 301,
                'person_id' => 1098,
                'character' => 'Kay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'cast_id' => 2638,
                'movie_id' => 301,
                'person_id' => 846,
                'character' => 'Vito Corleone',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'cast_id' => 2639,
                'movie_id' => 301,
                'person_id' => 1223,
                'character' => 'Connie Corleone',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'cast_id' => 2640,
                'movie_id' => 301,
                'person_id' => 1056,
                'character' => 'Young Clemenza',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'cast_id' => 2641,
                'movie_id' => 301,
                'person_id' => 349,
                'character' => 'Sonny Corleone',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'cast_id' => 2642,
                'movie_id' => 301,
                'person_id' => 1222,
                'character' => 'Tessio',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'cast_id' => 2643,
                'movie_id' => 301,
                'person_id' => 26,
                'character' => 'F.B.I. Man #1',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'cast_id' => 2644,
                'movie_id' => 301,
                'person_id' => 1224,
                'character' => 'Hyman Roth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'cast_id' => 2645,
                'movie_id' => 302,
                'person_id' => 261,
                'character' => 'Don Michael Corleone',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'cast_id' => 2646,
                'movie_id' => 302,
                'person_id' => 1098,
                'character' => 'Kay Adams Michelson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'cast_id' => 2647,
                'movie_id' => 302,
                'person_id' => 1223,
                'character' => 'Connie Corleone Rizzi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'cast_id' => 2648,
                'movie_id' => 302,
                'person_id' => 754,
                'character' => 'Joey Zasa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'cast_id' => 2649,
                'movie_id' => 302,
                'person_id' => 1225,
                'character' => 'Vincent Mancini',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'cast_id' => 2650,
                'movie_id' => 302,
                'person_id' => 1226,
                'character' => 'Grace Hamilton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'cast_id' => 2651,
                'movie_id' => 303,
                'person_id' => 1227,
                'character' => 'Harry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'cast_id' => 2652,
                'movie_id' => 303,
                'person_id' => 1228,
                'character' => 'Killer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'cast_id' => 2653,
                'movie_id' => 304,
                'person_id' => 1227,
                'character' => 'Harry Calahan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'cast_id' => 2654,
                'movie_id' => 304,
                'person_id' => 1218,
                'character' => 'Demonstrator',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'cast_id' => 2655,
                'movie_id' => 304,
                'person_id' => 1229,
                'character' => 'Davis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'cast_id' => 2656,
                'movie_id' => 305,
                'person_id' => 1227,
                'character' => 'Harry Callahan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'cast_id' => 2657,
                'movie_id' => 306,
                'person_id' => 1227,
                'character' => 'Harry Callahan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'cast_id' => 2658,
                'movie_id' => 307,
                'person_id' => 1227,
                'character' => 'Harry Callahan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'cast_id' => 2659,
                'movie_id' => 307,
                'person_id' => 198,
                'character' => 'Peter Swan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'cast_id' => 2660,
                'movie_id' => 307,
                'person_id' => 431,
                'character' => 'Johnny Squares',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'cast_id' => 2661,
                'movie_id' => 307,
                'person_id' => 1230,
                'character' => 'Embarcadero Bodyguard 2',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            47 => 
            array (
                'cast_id' => 2662,
                'movie_id' => 308,
                'person_id' => 220,
                'character' => 'Pvt. J.T. \'Joker\' Davis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            48 => 
            array (
                'cast_id' => 2663,
                'movie_id' => 308,
                'person_id' => 545,
                'character' => 'Animal Mother',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            49 => 
            array (
                'cast_id' => 2664,
                'movie_id' => 308,
                'person_id' => 115,
                'character' => 'Pvt. Leonard \'Gomer Pyle\' Lawrence',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            50 => 
            array (
                'cast_id' => 2665,
                'movie_id' => 308,
                'person_id' => 674,
                'character' => 'Gny. Sgt. Hartman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            51 => 
            array (
                'cast_id' => 2666,
                'movie_id' => 309,
                'person_id' => 741,
                'character' => 'Sharpay Evans',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            52 => 
            array (
                'cast_id' => 2667,
                'movie_id' => 309,
                'person_id' => 1059,
                'character' => 'Chad Danforth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            53 => 
            array (
                'cast_id' => 2668,
                'movie_id' => 309,
                'person_id' => 1231,
                'character' => 'Troy Bolton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            54 => 
            array (
                'cast_id' => 2669,
                'movie_id' => 309,
                'person_id' => 1232,
                'character' => 'Gabriella Montez',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            55 => 
            array (
                'cast_id' => 2670,
                'movie_id' => 310,
                'person_id' => 1231,
                'character' => 'Troy Bolton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            56 => 
            array (
                'cast_id' => 2671,
                'movie_id' => 310,
                'person_id' => 1232,
                'character' => 'Gabriella Montez',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            57 => 
            array (
                'cast_id' => 2672,
                'movie_id' => 310,
                'person_id' => 741,
                'character' => 'Sharpay Evans',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            58 => 
            array (
                'cast_id' => 2673,
                'movie_id' => 310,
                'person_id' => 1059,
                'character' => 'Chad Danforth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            59 => 
            array (
                'cast_id' => 2675,
                'movie_id' => 311,
                'person_id' => 1231,
                'character' => 'Troy Bolton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            60 => 
            array (
                'cast_id' => 2676,
                'movie_id' => 311,
                'person_id' => 1232,
                'character' => 'Gabriella Montez',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            61 => 
            array (
                'cast_id' => 2677,
                'movie_id' => 311,
                'person_id' => 741,
                'character' => 'Sharpay Evans',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            62 => 
            array (
                'cast_id' => 2678,
                'movie_id' => 311,
                'person_id' => 1059,
                'character' => 'Chad Danforth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            63 => 
            array (
                'cast_id' => 2679,
                'movie_id' => 312,
                'person_id' => 426,
                'character' => 'Hitch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            64 => 
            array (
                'cast_id' => 2680,
                'movie_id' => 312,
                'person_id' => 227,
                'character' => 'Sara',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            65 => 
            array (
                'cast_id' => 2681,
                'movie_id' => 312,
                'person_id' => 695,
                'character' => 'Albert',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            66 => 
            array (
                'cast_id' => 2682,
                'movie_id' => 312,
                'person_id' => 900,
                'character' => 'Ben',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            67 => 
            array (
                'cast_id' => 2683,
                'movie_id' => 312,
                'person_id' => 1233,
                'character' => 'Allegra',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            68 => 
            array (
                'cast_id' => 2684,
                'movie_id' => 313,
                'person_id' => 848,
                'character' => 'Harry Lime',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            69 => 
            array (
                'cast_id' => 2685,
                'movie_id' => 313,
                'person_id' => 797,
                'character' => 'Peter McCallister',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            70 => 
            array (
                'cast_id' => 2686,
                'movie_id' => 313,
                'person_id' => 824,
                'character' => 'Gus Polinski',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            71 => 
            array (
                'cast_id' => 2687,
                'movie_id' => 313,
                'person_id' => 1147,
                'character' => 'Fuller McCallister',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            72 => 
            array (
                'cast_id' => 2688,
                'movie_id' => 313,
                'person_id' => 1234,
                'character' => 'Kevin McCallister',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            73 => 
            array (
                'cast_id' => 2689,
                'movie_id' => 313,
                'person_id' => 1235,
                'character' => 'Marv Merchants',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            74 => 
            array (
                'cast_id' => 2690,
                'movie_id' => 314,
                'person_id' => 1211,
                'character' => 'The Kurgan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            75 => 
            array (
                'cast_id' => 2691,
                'movie_id' => 314,
                'person_id' => 581,
                'character' => 'Sunda Kastagir',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            76 => 
            array (
                'cast_id' => 2692,
                'movie_id' => 314,
                'person_id' => 832,
                'character' => 'Angus MacLeod',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            77 => 
            array (
                'cast_id' => 2693,
                'movie_id' => 314,
                'person_id' => 1236,
                'character' => 'Connor MacLeod',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            78 => 
            array (
                'cast_id' => 2694,
                'movie_id' => 314,
                'person_id' => 1237,
                'character' => 'Juan Sanchez VillaLobos Ramirez',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            79 => 
            array (
                'cast_id' => 2695,
                'movie_id' => 315,
                'person_id' => 512,
                'character' => 'Nicholas Angel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            80 => 
            array (
                'cast_id' => 2696,
                'movie_id' => 315,
                'person_id' => 393,
                'character' => 'Met Chief Inspector',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            81 => 
            array (
                'cast_id' => 2697,
                'movie_id' => 315,
                'person_id' => 513,
                'character' => 'PC Danny Butterman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            82 => 
            array (
                'cast_id' => 2698,
                'movie_id' => 315,
                'person_id' => 971,
                'character' => 'Simon Skinner',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            83 => 
            array (
                'cast_id' => 2699,
                'movie_id' => 315,
                'person_id' => 392,
                'character' => 'Inspector Frank Butterman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            84 => 
            array (
                'cast_id' => 2700,
                'movie_id' => 315,
                'person_id' => 193,
                'character' => 'DS Andy Wainwright',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            85 => 
            array (
                'cast_id' => 2701,
                'movie_id' => 315,
                'person_id' => 451,
                'character' => 'Arthur Webley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            86 => 
            array (
                'cast_id' => 2702,
                'movie_id' => 315,
                'person_id' => 475,
                'character' => 'Janine',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            87 => 
            array (
                'cast_id' => 2703,
                'movie_id' => 315,
                'person_id' => 483,
                'character' => 'Thief Dressed as Santa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            88 => 
            array (
                'cast_id' => 2704,
                'movie_id' => 315,
                'person_id' => 1238,
                'character' => 'Met Sergeant',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            89 => 
            array (
                'cast_id' => 2705,
                'movie_id' => 316,
                'person_id' => 512,
                'character' => 'Sidney Young',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            90 => 
            array (
                'cast_id' => 2706,
                'movie_id' => 316,
                'person_id' => 610,
                'character' => 'Sophie Maes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            91 => 
            array (
                'cast_id' => 2708,
                'movie_id' => 316,
                'person_id' => 443,
                'character' => 'Clayton Harding',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            92 => 
            array (
                'cast_id' => 2709,
                'movie_id' => 316,
                'person_id' => 1141,
                'character' => 'Alison Olsen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            93 => 
            array (
                'cast_id' => 2710,
                'movie_id' => 316,
                'person_id' => 639,
                'character' => 'Lawrence Maddox',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            94 => 
            array (
                'cast_id' => 2713,
                'movie_id' => 316,
                'person_id' => 1239,
                'character' => 'Eleanor Johnson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            95 => 
            array (
                'cast_id' => 2714,
                'movie_id' => 317,
                'person_id' => 1016,
                'character' => 'Felix',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            96 => 
            array (
                'cast_id' => 2716,
                'movie_id' => 317,
                'person_id' => 1240,
                'character' => 'Jip',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            97 => 
            array (
                'cast_id' => 2717,
                'movie_id' => 317,
                'person_id' => 1241,
                'character' => 'Koop',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            98 => 
            array (
                'cast_id' => 2718,
                'movie_id' => 317,
                'person_id' => 1242,
                'character' => 'Moff',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            99 => 
            array (
                'cast_id' => 2719,
                'movie_id' => 318,
                'person_id' => 1044,
                'character' => 'Peter Klaven',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            100 => 
            array (
                'cast_id' => 2720,
                'movie_id' => 318,
                'person_id' => 445,
                'character' => 'Barry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            101 => 
            array (
                'cast_id' => 2721,
                'movie_id' => 318,
                'person_id' => 609,
                'character' => 'Oswald Klaven',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            102 => 
            array (
                'cast_id' => 2722,
                'movie_id' => 318,
                'person_id' => 981,
                'character' => 'Robbie Klaven',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            103 => 
            array (
                'cast_id' => 2723,
                'movie_id' => 318,
                'person_id' => 508,
                'character' => 'Sydney Fife',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            104 => 
            array (
                'cast_id' => 2724,
                'movie_id' => 318,
                'person_id' => 1243,
                'character' => 'Zooey Rice',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            105 => 
            array (
                'cast_id' => 2725,
                'movie_id' => 318,
                'person_id' => 1244,
                'character' => 'Denise',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            106 => 
            array (
                'cast_id' => 2726,
                'movie_id' => 319,
                'person_id' => 426,
                'character' => 'Robert Neville',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            107 => 
            array (
                'cast_id' => 2727,
                'movie_id' => 319,
                'person_id' => 872,
                'character' => 'Anna',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            108 => 
            array (
                'cast_id' => 2728,
                'movie_id' => 319,
                'person_id' => 930,
                'character' => 'Alpha Male',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            109 => 
            array (
                'cast_id' => 2729,
                'movie_id' => 319,
                'person_id' => 453,
                'character' => 'Dr. Alice Krippin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            110 => 
            array (
                'cast_id' => 2730,
                'movie_id' => 320,
                'person_id' => 426,
                'character' => 'Captain Steven Hiller',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            111 => 
            array (
                'cast_id' => 2731,
                'movie_id' => 320,
                'person_id' => 95,
                'character' => 'David Levinson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            112 => 
            array (
                'cast_id' => 2732,
                'movie_id' => 320,
                'person_id' => 796,
                'character' => 'General William Grey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            113 => 
            array (
                'cast_id' => 2733,
                'movie_id' => 320,
                'person_id' => 1117,
                'character' => 'Jasmine Dubrow',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            114 => 
            array (
                'cast_id' => 2734,
                'movie_id' => 320,
                'person_id' => 266,
                'character' => 'Albert Nimziki',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            115 => 
            array (
                'cast_id' => 2735,
                'movie_id' => 320,
                'person_id' => 545,
                'character' => 'Major Mitchell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            116 => 
            array (
                'cast_id' => 2737,
                'movie_id' => 320,
                'person_id' => 1245,
                'character' => 'President Thomas J Whitmore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            117 => 
            array (
                'cast_id' => 2738,
                'movie_id' => 320,
                'person_id' => 1246,
                'character' => 'First Lady Marilyn Whitmore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            118 => 
            array (
                'cast_id' => 2739,
                'movie_id' => 320,
                'person_id' => 1247,
                'character' => 'Russell Casse',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            119 => 
            array (
                'cast_id' => 2740,
                'movie_id' => 320,
                'person_id' => 1248,
                'character' => 'Dr Brakish Okun',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            120 => 
            array (
                'cast_id' => 2741,
                'movie_id' => 320,
                'person_id' => 1249,
                'character' => 'Captain Jimmy Wilder',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            121 => 
            array (
                'cast_id' => 2742,
                'movie_id' => 321,
                'person_id' => 79,
                'character' => 'Indy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            122 => 
            array (
                'cast_id' => 2743,
                'movie_id' => 321,
                'person_id' => 481,
                'character' => 'Sallah',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            123 => 
            array (
                'cast_id' => 2744,
                'movie_id' => 321,
                'person_id' => 865,
                'character' => 'Satipo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            124 => 
            array (
                'cast_id' => 2746,
                'movie_id' => 321,
                'person_id' => 1250,
                'character' => 'Marion Ravenwood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            125 => 
            array (
                'cast_id' => 2747,
                'movie_id' => 321,
                'person_id' => 1251,
                'character' => 'Dr Marcus Brody',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            126 => 
            array (
                'cast_id' => 2748,
                'movie_id' => 322,
                'person_id' => 79,
                'character' => 'Indiana Jones',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            127 => 
            array (
                'cast_id' => 2749,
                'movie_id' => 322,
                'person_id' => 1206,
                'character' => 'Short Round',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            128 => 
            array (
                'cast_id' => 2750,
                'movie_id' => 322,
                'person_id' => 14,
                'character' => 'Weber',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            129 => 
            array (
                'cast_id' => 2752,
                'movie_id' => 322,
                'person_id' => 105,
                'character' => 'Tourist at Airport',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            130 => 
            array (
                'cast_id' => 2753,
                'movie_id' => 323,
                'person_id' => 79,
                'character' => 'Indiana Jones',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            131 => 
            array (
                'cast_id' => 2754,
                'movie_id' => 323,
                'person_id' => 1237,
                'character' => 'Professor Henry Jones',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            132 => 
            array (
                'cast_id' => 2755,
                'movie_id' => 323,
                'person_id' => 1251,
                'character' => 'Marcus Brody',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            133 => 
            array (
                'cast_id' => 2756,
                'movie_id' => 323,
                'person_id' => 481,
                'character' => 'Sallah',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            134 => 
            array (
                'cast_id' => 2757,
                'movie_id' => 323,
                'person_id' => 1252,
                'character' => 'Elsa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            135 => 
            array (
                'cast_id' => 2758,
                'movie_id' => 323,
                'person_id' => 1253,
                'character' => 'Young Indy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            136 => 
            array (
                'cast_id' => 2759,
                'movie_id' => 324,
                'person_id' => 928,
                'character' => 'Lt. Tuck Pendleton',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            137 => 
            array (
                'cast_id' => 2760,
                'movie_id' => 324,
                'person_id' => 1148,
                'character' => 'Jack Putter',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            138 => 
            array (
                'cast_id' => 2761,
                'movie_id' => 324,
                'person_id' => 315,
                'character' => 'Lydia Maxwell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            139 => 
            array (
                'cast_id' => 2762,
                'movie_id' => 324,
                'person_id' => 886,
                'character' => 'Mr. Igoe',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            140 => 
            array (
                'cast_id' => 2763,
                'movie_id' => 324,
                'person_id' => 1254,
                'character' => 'The Cowboy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            141 => 
            array (
                'cast_id' => 2764,
                'movie_id' => 325,
                'person_id' => 1114,
                'character' => 'Miles',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            142 => 
            array (
                'cast_id' => 2765,
                'movie_id' => 325,
                'person_id' => 761,
                'character' => 'Donovan Donaly',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            143 => 
            array (
                'cast_id' => 2766,
                'movie_id' => 325,
                'person_id' => 250,
                'character' => 'Freddy Bender',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            144 => 
            array (
                'cast_id' => 2767,
                'movie_id' => 325,
                'person_id' => 1042,
                'character' => 'Howard D. Doyle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            145 => 
            array (
                'cast_id' => 2768,
                'movie_id' => 325,
                'person_id' => 693,
                'character' => 'Convention Secretary',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            146 => 
            array (
                'cast_id' => 2769,
                'movie_id' => 325,
                'person_id' => 755,
                'character' => 'Soap Opera Actor on TV',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            147 => 
            array (
                'cast_id' => 2770,
                'movie_id' => 325,
                'person_id' => 1255,
                'character' => 'Marylin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            148 => 
            array (
                'cast_id' => 2771,
                'movie_id' => 326,
                'person_id' => 226,
                'character' => 'Charlie Lang',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            149 => 
            array (
                'cast_id' => 2772,
                'movie_id' => 326,
                'person_id' => 1226,
                'character' => 'Yvonne Biasi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            150 => 
            array (
                'cast_id' => 2773,
                'movie_id' => 326,
                'person_id' => 339,
                'character' => 'Angel Dupree',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            151 => 
            array (
                'cast_id' => 2774,
                'movie_id' => 326,
                'person_id' => 420,
                'character' => 'Eddie Biasi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            152 => 
            array (
                'cast_id' => 2775,
                'movie_id' => 326,
                'person_id' => 250,
                'character' => 'C. Vernon Hale',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            153 => 
            array (
                'cast_id' => 2776,
                'movie_id' => 326,
                'person_id' => 1256,
                'character' => 'Muriel Lang',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            154 => 
            array (
                'cast_id' => 2777,
                'movie_id' => 326,
                'person_id' => 1257,
                'character' => 'Bo Williams',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            155 => 
            array (
                'cast_id' => 2778,
                'movie_id' => 327,
                'person_id' => 197,
                'character' => 'Charlie Croker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            156 => 
            array (
                'cast_id' => 2779,
                'movie_id' => 327,
                'person_id' => 860,
                'character' => 'Vicar',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            157 => 
            array (
                'cast_id' => 2780,
                'movie_id' => 327,
                'person_id' => 963,
                'character' => 'Standin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            158 => 
            array (
                'cast_id' => 2781,
                'movie_id' => 327,
                'person_id' => 1258,
                'character' => 'Mr Bridger',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            159 => 
            array (
                'cast_id' => 2782,
                'movie_id' => 328,
                'person_id' => 6,
                'character' => 'Louis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            160 => 
            array (
                'cast_id' => 2783,
                'movie_id' => 328,
                'person_id' => 280,
                'character' => 'Lestat',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            161 => 
            array (
                'cast_id' => 2784,
                'movie_id' => 328,
                'person_id' => 907,
                'character' => 'Yvette',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            162 => 
            array (
                'cast_id' => 2785,
                'movie_id' => 328,
                'person_id' => 1141,
                'character' => 'Claudia',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            163 => 
            array (
                'cast_id' => 2786,
                'movie_id' => 328,
                'person_id' => 1259,
                'character' => 'Malloy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            164 => 
            array (
                'cast_id' => 2787,
                'movie_id' => 328,
                'person_id' => 1260,
                'character' => 'Santiago',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            165 => 
            array (
                'cast_id' => 2788,
                'movie_id' => 328,
                'person_id' => 1261,
                'character' => 'Armand',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            166 => 
            array (
                'cast_id' => 2789,
                'movie_id' => 329,
                'person_id' => 121,
                'character' => 'Tony Stark / Iron Man',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            167 => 
            array (
                'cast_id' => 2790,
                'movie_id' => 329,
                'person_id' => 442,
                'character' => 'Rhodey',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            168 => 
            array (
                'cast_id' => 2791,
                'movie_id' => 329,
                'person_id' => 443,
                'character' => 'Obadiah Stane',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            169 => 
            array (
                'cast_id' => 2792,
                'movie_id' => 329,
                'person_id' => 131,
                'character' => 'Pepper Potts',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            170 => 
            array (
                'cast_id' => 2793,
                'movie_id' => 329,
                'person_id' => 444,
                'character' => 'Christine Everhart',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            171 => 
            array (
                'cast_id' => 2794,
                'movie_id' => 329,
                'person_id' => 128,
                'character' => 'Agent Coulson',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            172 => 
            array (
                'cast_id' => 2795,
                'movie_id' => 329,
                'person_id' => 132,
                'character' => 'Jarvis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            173 => 
            array (
                'cast_id' => 2796,
                'movie_id' => 329,
                'person_id' => 445,
                'character' => 'Hogan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            174 => 
            array (
                'cast_id' => 2797,
                'movie_id' => 329,
                'person_id' => 459,
                'character' => 'Stan Lee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            175 => 
            array (
                'cast_id' => 2798,
                'movie_id' => 329,
                'person_id' => 97,
                'character' => 'Nick Fury',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            176 => 
            array (
                'cast_id' => 2800,
                'movie_id' => 330,
                'person_id' => 1262,
                'character' => 'Brody',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            177 => 
            array (
                'cast_id' => 2801,
                'movie_id' => 330,
                'person_id' => 1263,
                'character' => 'Quint',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            178 => 
            array (
                'cast_id' => 2802,
                'movie_id' => 330,
                'person_id' => 1264,
                'character' => 'Hooper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            179 => 
            array (
                'cast_id' => 2803,
                'movie_id' => 331,
                'person_id' => 167,
                'character' => 'Ali',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            180 => 
            array (
                'cast_id' => 2805,
                'movie_id' => 331,
                'person_id' => 1265,
                'character' => 'Daniel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            181 => 
            array (
                'cast_id' => 2806,
                'movie_id' => 331,
                'person_id' => 1266,
                'character' => 'Miyagi',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            182 => 
            array (
                'cast_id' => 2807,
                'movie_id' => 332,
                'person_id' => 327,
                'character' => 'Mr. Han',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            183 => 
            array (
                'cast_id' => 2808,
                'movie_id' => 332,
                'person_id' => 1267,
                'character' => 'Dre Parker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            184 => 
            array (
                'cast_id' => 2809,
                'movie_id' => 333,
                'person_id' => 1111,
                'character' => 'Frank White',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            185 => 
            array (
                'cast_id' => 2810,
                'movie_id' => 333,
                'person_id' => 71,
                'character' => 'Jimmy Jump',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            186 => 
            array (
                'cast_id' => 2811,
                'movie_id' => 333,
                'person_id' => 799,
                'character' => 'Test Tube',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            187 => 
            array (
                'cast_id' => 2812,
                'movie_id' => 333,
                'person_id' => 795,
                'character' => 'Raye',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            188 => 
            array (
                'cast_id' => 2813,
                'movie_id' => 333,
                'person_id' => 1268,
                'character' => 'Dennis Gilley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            189 => 
            array (
                'cast_id' => 2814,
                'movie_id' => 333,
                'person_id' => 1269,
                'character' => 'Thomas Flanigan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            190 => 
            array (
                'cast_id' => 2815,
                'movie_id' => 333,
                'person_id' => 1270,
                'character' => 'Lance',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            191 => 
            array (
                'cast_id' => 2816,
                'movie_id' => 334,
                'person_id' => 298,
                'character' => 'Ah Jong',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            192 => 
            array (
                'cast_id' => 2817,
                'movie_id' => 335,
                'person_id' => 735,
                'character' => 'Jack Vincennes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            193 => 
            array (
                'cast_id' => 2818,
                'movie_id' => 335,
                'person_id' => 488,
                'character' => 'Bud White',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            194 => 
            array (
                'cast_id' => 2819,
                'movie_id' => 335,
                'person_id' => 461,
                'character' => 'Ed Exley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            195 => 
            array (
                'cast_id' => 2820,
                'movie_id' => 335,
                'person_id' => 429,
                'character' => 'Dudley Smith',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            196 => 
            array (
                'cast_id' => 2821,
                'movie_id' => 335,
                'person_id' => 1106,
                'character' => 'Lynn Bracken',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            197 => 
            array (
                'cast_id' => 2822,
                'movie_id' => 335,
                'person_id' => 1109,
                'character' => 'Sid Hudgens',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            198 => 
            array (
                'cast_id' => 2823,
                'movie_id' => 335,
                'person_id' => 191,
                'character' => 'Pierce Patchett',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            199 => 
            array (
                'cast_id' => 2824,
                'movie_id' => 335,
                'person_id' => 302,
                'character' => 'Mickey Cohen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            200 => 
            array (
                'cast_id' => 2825,
                'movie_id' => 336,
                'person_id' => 223,
                'character' => 'Vinz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            201 => 
            array (
                'cast_id' => 2827,
                'movie_id' => 336,
                'person_id' => 1271,
                'character' => 'Said',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            202 => 
            array (
                'cast_id' => 2828,
                'movie_id' => 337,
                'person_id' => 925,
                'character' => 'Sarah',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            203 => 
            array (
                'cast_id' => 2829,
                'movie_id' => 337,
                'person_id' => 305,
                'character' => 'The Wiseman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            204 => 
            array (
                'cast_id' => 2830,
                'movie_id' => 337,
                'person_id' => 84,
                'character' => 'Goblin Corps',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            205 => 
            array (
                'cast_id' => 2831,
                'movie_id' => 337,
                'person_id' => 369,
                'character' => 'Goblin Corps',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            206 => 
            array (
                'cast_id' => 2832,
                'movie_id' => 337,
                'person_id' => 1272,
                'character' => 'Jareth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            207 => 
            array (
                'cast_id' => 2833,
                'movie_id' => 338,
                'person_id' => 916,
                'character' => 'Léon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            208 => 
            array (
                'cast_id' => 2834,
                'movie_id' => 338,
                'person_id' => 200,
                'character' => 'Stansfield',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            209 => 
            array (
                'cast_id' => 2835,
                'movie_id' => 338,
                'person_id' => 221,
                'character' => 'Mathilda',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            210 => 
            array (
                'cast_id' => 2836,
                'movie_id' => 338,
                'person_id' => 1273,
                'character' => 'Tony',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            211 => 
            array (
                'cast_id' => 2837,
                'movie_id' => 338,
                'person_id' => 1274,
                'character' => 'Mathildas Father',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            212 => 
            array (
                'cast_id' => 2838,
                'movie_id' => 339,
                'person_id' => 813,
                'character' => 'Martin Riggs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            213 => 
            array (
                'cast_id' => 2839,
                'movie_id' => 339,
                'person_id' => 1150,
                'character' => 'Joshua',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            214 => 
            array (
                'cast_id' => 2840,
                'movie_id' => 339,
                'person_id' => 1275,
                'character' => 'Roger Murtaugh',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            215 => 
            array (
                'cast_id' => 2841,
                'movie_id' => 340,
                'person_id' => 813,
                'character' => 'Martin Riggs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            216 => 
            array (
                'cast_id' => 2842,
                'movie_id' => 340,
                'person_id' => 1275,
                'character' => 'Roger Murtaugh',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            217 => 
            array (
                'cast_id' => 2843,
                'movie_id' => 340,
                'person_id' => 848,
                'character' => 'Leo Getz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            218 => 
            array (
                'cast_id' => 2844,
                'movie_id' => 340,
                'person_id' => 809,
                'character' => 'Arjen Rudd',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            219 => 
            array (
                'cast_id' => 2845,
                'movie_id' => 340,
                'person_id' => 38,
                'character' => 'Hans',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            220 => 
            array (
                'cast_id' => 2846,
                'movie_id' => 340,
                'person_id' => 37,
                'character' => 'Meagan Shapiro',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            221 => 
            array (
                'cast_id' => 2847,
                'movie_id' => 340,
                'person_id' => 599,
                'character' => 'Tim Cavanaugh',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            222 => 
            array (
                'cast_id' => 2848,
                'movie_id' => 340,
                'person_id' => 1276,
                'character' => 'Rika Van Den Haas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            223 => 
            array (
                'cast_id' => 2849,
                'movie_id' => 341,
                'person_id' => 813,
                'character' => 'Martin Riggs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            224 => 
            array (
                'cast_id' => 2850,
                'movie_id' => 341,
                'person_id' => 1275,
                'character' => 'Roger Murtaugh',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            225 => 
            array (
                'cast_id' => 2851,
                'movie_id' => 341,
                'person_id' => 848,
                'character' => 'Leo Getz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            226 => 
            array (
                'cast_id' => 2852,
                'movie_id' => 341,
                'person_id' => 1176,
                'character' => 'Lorna Cole',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            227 => 
            array (
                'cast_id' => 2853,
                'movie_id' => 341,
                'person_id' => 802,
                'character' => 'Billy Phelps',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            228 => 
            array (
                'cast_id' => 2854,
                'movie_id' => 342,
                'person_id' => 813,
                'character' => 'Martin Riggs',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            229 => 
            array (
                'cast_id' => 2855,
                'movie_id' => 342,
                'person_id' => 1275,
                'character' => 'Roger Murtaugh',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            230 => 
            array (
                'cast_id' => 2856,
                'movie_id' => 342,
                'person_id' => 848,
                'character' => 'Leo Getz',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            231 => 
            array (
                'cast_id' => 2857,
                'movie_id' => 342,
                'person_id' => 1176,
                'character' => 'Lorna Cole',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            232 => 
            array (
                'cast_id' => 2858,
                'movie_id' => 342,
                'person_id' => 791,
                'character' => 'Detective Lee Butters',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            233 => 
            array (
                'cast_id' => 2859,
                'movie_id' => 342,
                'person_id' => 242,
                'character' => 'Benny \'Uncle Benny\' Chan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            234 => 
            array (
                'cast_id' => 2860,
                'movie_id' => 342,
                'person_id' => 1277,
                'character' => 'Wah Sing Ku',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            235 => 
            array (
                'cast_id' => 2861,
                'movie_id' => 343,
                'person_id' => 450,
                'character' => 'Reg',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            236 => 
            array (
                'cast_id' => 2862,
                'movie_id' => 343,
                'person_id' => 1164,
                'character' => 'Nisus Wettus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            237 => 
            array (
                'cast_id' => 2863,
                'movie_id' => 343,
                'person_id' => 1278,
                'character' => 'Biggus Dickus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            238 => 
            array (
                'cast_id' => 2864,
                'movie_id' => 343,
                'person_id' => 1279,
                'character' => 'Crucifee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            239 => 
            array (
                'cast_id' => 2865,
                'movie_id' => 343,
                'person_id' => 1280,
                'character' => 'Harry the Haggler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            240 => 
            array (
                'cast_id' => 2866,
                'movie_id' => 343,
                'person_id' => 1281,
                'character' => 'Mandy Cohen',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            241 => 
            array (
                'cast_id' => 2867,
                'movie_id' => 344,
                'person_id' => 469,
                'character' => 'Tom',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            242 => 
            array (
                'cast_id' => 2868,
                'movie_id' => 344,
                'person_id' => 468,
                'character' => 'Soap',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            243 => 
            array (
                'cast_id' => 2869,
                'movie_id' => 344,
                'person_id' => 671,
                'character' => 'Big Chris',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            244 => 
            array (
                'cast_id' => 2870,
                'movie_id' => 344,
                'person_id' => 1282,
                'character' => 'Eddy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            245 => 
            array (
                'cast_id' => 2871,
                'movie_id' => 344,
                'person_id' => 1283,
                'character' => 'Bacon',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            246 => 
            array (
                'cast_id' => 2872,
                'movie_id' => 344,
                'person_id' => 1284,
                'character' => 'JD',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            247 => 
            array (
                'cast_id' => 2873,
                'movie_id' => 344,
                'person_id' => 1285,
                'character' => 'Traffic Warden',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            248 => 
            array (
                'cast_id' => 2874,
                'movie_id' => 344,
                'person_id' => 1286,
                'character' => 'Barfly Jack',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            249 => 
            array (
                'cast_id' => 2875,
                'movie_id' => 345,
                'person_id' => 1131,
                'character' => 'Lucy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            250 => 
            array (
                'cast_id' => 2876,
                'movie_id' => 345,
                'person_id' => 628,
                'character' => 'Grandpa',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            251 => 
            array (
                'cast_id' => 2877,
                'movie_id' => 345,
                'person_id' => 677,
                'character' => 'David',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            252 => 
            array (
                'cast_id' => 2878,
                'movie_id' => 345,
                'person_id' => 1205,
                'character' => 'Edgar Frog',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            253 => 
            array (
                'cast_id' => 2879,
                'movie_id' => 345,
                'person_id' => 808,
                'character' => 'Marko',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            254 => 
            array (
                'cast_id' => 2880,
                'movie_id' => 345,
                'person_id' => 1287,
                'character' => 'Michael',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            255 => 
            array (
                'cast_id' => 2881,
                'movie_id' => 345,
                'person_id' => 1288,
                'character' => 'Sam',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            256 => 
            array (
                'cast_id' => 2882,
                'movie_id' => 345,
                'person_id' => 1289,
                'character' => 'Max',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            257 => 
            array (
                'cast_id' => 2883,
                'movie_id' => 345,
                'person_id' => 1290,
                'character' => 'Star',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            258 => 
            array (
                'cast_id' => 2884,
                'movie_id' => 325,
                'person_id' => 1289,
                'character' => 'Rex Rexroth',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            259 => 
            array (
                'cast_id' => 2885,
                'movie_id' => 346,
                'person_id' => 1000,
                'character' => 'Maleficent',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            260 => 
            array (
                'cast_id' => 2886,
                'movie_id' => 346,
                'person_id' => 342,
                'character' => 'Stefan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            261 => 
            array (
                'cast_id' => 2887,
                'movie_id' => 346,
                'person_id' => 1291,
                'character' => 'Aurora',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            262 => 
            array (
                'cast_id' => 2888,
                'movie_id' => 346,
                'person_id' => 1292,
                'character' => 'Knotgrass',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            263 => 
            array (
                'cast_id' => 2889,
                'movie_id' => 347,
                'person_id' => 804,
                'character' => 'Emmy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            264 => 
            array (
                'cast_id' => 2890,
                'movie_id' => 347,
                'person_id' => 1099,
                'character' => 'Richards',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            265 => 
            array (
                'cast_id' => 2891,
                'movie_id' => 347,
                'person_id' => 1293,
                'character' => 'Jonathan Switcher',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            266 => 
            array (
                'cast_id' => 2892,
                'movie_id' => 347,
                'person_id' => 1294,
                'character' => 'Claire Timkin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            267 => 
            array (
                'cast_id' => 2893,
                'movie_id' => 347,
                'person_id' => 1295,
                'character' => 'Felix',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            268 => 
            array (
                'cast_id' => 2894,
                'movie_id' => 347,
                'person_id' => 1296,
                'character' => 'BJ Wert',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            269 => 
            array (
                'cast_id' => 2895,
                'movie_id' => 347,
                'person_id' => 1297,
                'character' => 'Hollywood',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            270 => 
            array (
                'cast_id' => 2896,
                'movie_id' => 348,
                'person_id' => 334,
                'character' => 'Mary Poppins',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            271 => 
            array (
                'cast_id' => 2897,
                'movie_id' => 348,
                'person_id' => 1298,
                'character' => 'Bert  Mr Dawes Senior',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            272 => 
            array (
                'cast_id' => 2898,
                'movie_id' => 348,
                'person_id' => 1299,
                'character' => 'Mr Banks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            273 => 
            array (
                'cast_id' => 2899,
                'movie_id' => 349,
                'person_id' => 1121,
                'character' => 'Don Diego de la Vega / Zorro',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            274 => 
            array (
                'cast_id' => 2900,
                'movie_id' => 349,
                'person_id' => 1261,
                'character' => 'Alejandro Murrieta / Zorro',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            275 => 
            array (
                'cast_id' => 2901,
                'movie_id' => 349,
                'person_id' => 1255,
                'character' => 'Elena',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            276 => 
            array (
                'cast_id' => 2902,
                'movie_id' => 349,
                'person_id' => 1300,
                'character' => 'Don Rafael Montero',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            277 => 
            array (
                'cast_id' => 2903,
                'movie_id' => 349,
                'person_id' => 1301,
                'character' => 'ThreeFingered Jack',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            278 => 
            array (
                'cast_id' => 2904,
                'movie_id' => 349,
                'person_id' => 1302,
                'character' => 'Capt Harrison Love',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            279 => 
            array (
                'cast_id' => 2905,
                'movie_id' => 341,
                'person_id' => 1300,
                'character' => 'Jack Travis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            280 => 
            array (
                'cast_id' => 2906,
                'movie_id' => 315,
                'person_id' => 1300,
                'character' => 'Dr. Robin Hatcher',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            281 => 
            array (
                'cast_id' => 2907,
                'movie_id' => 350,
                'person_id' => 1261,
                'character' => 'Don Alejandro de la Vega',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            282 => 
            array (
                'cast_id' => 2908,
                'movie_id' => 350,
                'person_id' => 1255,
                'character' => 'Elena de la Vega',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            283 => 
            array (
                'cast_id' => 2909,
                'movie_id' => 350,
                'person_id' => 923,
                'character' => 'Armand',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            284 => 
            array (
                'cast_id' => 2910,
                'movie_id' => 351,
                'person_id' => 862,
                'character' => 'President James Dale',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            285 => 
            array (
                'cast_id' => 2911,
                'movie_id' => 351,
                'person_id' => 300,
                'character' => 'First Lady Marsha Dale',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            286 => 
            array (
                'cast_id' => 2912,
                'movie_id' => 351,
                'person_id' => 1066,
                'character' => 'Barbara Land',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            287 => 
            array (
                'cast_id' => 2913,
                'movie_id' => 351,
                'person_id' => 921,
                'character' => 'Professor Donald Kessler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            288 => 
            array (
                'cast_id' => 2914,
                'movie_id' => 351,
                'person_id' => 1109,
                'character' => 'Rude Gambler',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            289 => 
            array (
                'cast_id' => 2915,
                'movie_id' => 351,
                'person_id' => 1148,
                'character' => 'Press Secretary Jerry Ross',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            290 => 
            array (
                'cast_id' => 2916,
                'movie_id' => 351,
                'person_id' => 1127,
                'character' => 'Nathalie Lake',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            291 => 
            array (
                'cast_id' => 2917,
                'movie_id' => 351,
                'person_id' => 158,
                'character' => 'Jason Stone',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            292 => 
            array (
                'cast_id' => 2918,
                'movie_id' => 351,
                'person_id' => 946,
                'character' => 'General Decker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            293 => 
            array (
                'cast_id' => 2919,
                'movie_id' => 351,
                'person_id' => 441,
                'character' => 'Richie Norris',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            294 => 
            array (
                'cast_id' => 2920,
                'movie_id' => 351,
                'person_id' => 221,
                'character' => 'Taffy Dale',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            295 => 
            array (
                'cast_id' => 2921,
                'movie_id' => 351,
                'person_id' => 1130,
                'character' => 'Martian Girl',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            296 => 
            array (
                'cast_id' => 2922,
                'movie_id' => 351,
                'person_id' => 810,
                'character' => 'Louise Williams',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            297 => 
            array (
                'cast_id' => 2923,
                'movie_id' => 351,
                'person_id' => 995,
                'character' => 'Billy Glenn Norris',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            298 => 
            array (
                'cast_id' => 2925,
                'movie_id' => 351,
                'person_id' => 1303,
                'character' => 'Tom Jones',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            299 => 
            array (
                'cast_id' => 2926,
                'movie_id' => 351,
                'person_id' => 1304,
                'character' => 'Byron Williams',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            300 => 
            array (
                'cast_id' => 2927,
                'movie_id' => 351,
                'person_id' => 1305,
                'character' => 'Richies Dad',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            301 => 
            array (
                'cast_id' => 2928,
                'movie_id' => 351,
                'person_id' => 1306,
                'character' => 'Sharona',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            302 => 
            array (
                'cast_id' => 2929,
                'movie_id' => 352,
                'person_id' => 813,
                'character' => 'Bret Maverick',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            303 => 
            array (
                'cast_id' => 2930,
                'movie_id' => 352,
                'person_id' => 887,
                'character' => 'Annabelle Bransford',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            304 => 
            array (
                'cast_id' => 2931,
                'movie_id' => 352,
                'person_id' => 940,
                'character' => 'Joseph',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            305 => 
            array (
                'cast_id' => 2932,
                'movie_id' => 352,
                'person_id' => 865,
                'character' => 'Angel',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            306 => 
            array (
                'cast_id' => 2933,
                'movie_id' => 352,
                'person_id' => 853,
                'character' => 'Commodore Duvall',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            307 => 
            array (
                'cast_id' => 2934,
                'movie_id' => 352,
                'person_id' => 49,
                'character' => 'Twitchy, Riverboat Poker Player',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            308 => 
            array (
                'cast_id' => 2935,
                'movie_id' => 352,
                'person_id' => 1205,
                'character' => 'Bank Robber',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            309 => 
            array (
                'cast_id' => 2936,
                'movie_id' => 352,
                'person_id' => 1275,
                'character' => 'Bank Robber',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            310 => 
            array (
                'cast_id' => 2937,
                'movie_id' => 352,
                'person_id' => 1307,
                'character' => 'Marshal Zane Cooper',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            311 => 
            array (
                'cast_id' => 2938,
                'movie_id' => 352,
                'person_id' => 1308,
                'character' => 'Margret Mary',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            312 => 
            array (
                'cast_id' => 2939,
                'movie_id' => 353,
                'person_id' => 846,
                'character' => 'Jack Byrnes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            313 => 
            array (
                'cast_id' => 2940,
                'movie_id' => 353,
                'person_id' => 1219,
                'character' => 'Greg Focker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            314 => 
            array (
                'cast_id' => 2941,
                'movie_id' => 353,
                'person_id' => 744,
                'character' => 'Kevin Rawley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            315 => 
            array (
                'cast_id' => 2942,
                'movie_id' => 353,
                'person_id' => 266,
                'character' => 'Dr. Larry Banks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            316 => 
            array (
                'cast_id' => 2943,
                'movie_id' => 353,
                'person_id' => 1309,
                'character' => 'Pam Byrnes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            317 => 
            array (
                'cast_id' => 2944,
                'movie_id' => 354,
                'person_id' => 846,
                'character' => 'Jack Byrnes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            318 => 
            array (
                'cast_id' => 2945,
                'movie_id' => 354,
                'person_id' => 1219,
                'character' => 'Greg Focker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            319 => 
            array (
                'cast_id' => 2946,
                'movie_id' => 354,
                'person_id' => 999,
                'character' => 'Bernie Focker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            320 => 
            array (
                'cast_id' => 2947,
                'movie_id' => 354,
                'person_id' => 1309,
                'character' => 'Pam Byrnes',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            321 => 
            array (
                'cast_id' => 2948,
                'movie_id' => 354,
                'person_id' => 744,
                'character' => 'Kevin Rawley',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            322 => 
            array (
                'cast_id' => 2949,
                'movie_id' => 354,
                'person_id' => 1310,
                'character' => 'Rozalin Focker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            323 => 
            array (
                'cast_id' => 2950,
                'movie_id' => 354,
                'person_id' => 1311,
                'character' => 'Officer LeFlore',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            324 => 
            array (
                'cast_id' => 2951,
                'movie_id' => 355,
                'person_id' => 72,
                'character' => 'Trinity',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            325 => 
            array (
                'cast_id' => 2952,
                'movie_id' => 355,
                'person_id' => 1,
                'character' => 'Neo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            326 => 
            array (
                'cast_id' => 2953,
                'movie_id' => 356,
                'person_id' => 71,
                'character' => 'Morpheus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            327 => 
            array (
                'cast_id' => 2954,
                'movie_id' => 356,
                'person_id' => 295,
                'character' => 'The Oracle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            328 => 
            array (
                'cast_id' => 2955,
                'movie_id' => 356,
                'person_id' => 1001,
                'character' => 'The Keymaker',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            329 => 
            array (
                'cast_id' => 2956,
                'movie_id' => 356,
                'person_id' => 72,
                'character' => 'Trinity',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            330 => 
            array (
                'cast_id' => 2957,
                'movie_id' => 356,
                'person_id' => 282,
                'character' => 'Niobe',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            331 => 
            array (
                'cast_id' => 2958,
                'movie_id' => 356,
                'person_id' => 1,
                'character' => 'Neo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            332 => 
            array (
                'cast_id' => 2959,
                'movie_id' => 356,
                'person_id' => 543,
                'character' => 'Cas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            333 => 
            array (
                'cast_id' => 2960,
                'movie_id' => 356,
                'person_id' => 74,
                'character' => 'Agent Smith',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            334 => 
            array (
                'cast_id' => 2961,
                'movie_id' => 356,
                'person_id' => 1312,
                'character' => 'The Architect',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            335 => 
            array (
                'cast_id' => 2962,
                'movie_id' => 356,
                'person_id' => 1313,
                'character' => 'Persephone',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            336 => 
            array (
                'cast_id' => 2963,
                'movie_id' => 356,
                'person_id' => 1314,
                'character' => 'Seraph',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            337 => 
            array (
                'cast_id' => 2964,
                'movie_id' => 356,
                'person_id' => 1315,
                'character' => 'Zee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            338 => 
            array (
                'cast_id' => 2965,
                'movie_id' => 356,
                'person_id' => 1316,
                'character' => 'Link',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            339 => 
            array (
                'cast_id' => 2966,
                'movie_id' => 357,
                'person_id' => 1312,
                'character' => 'The Architect',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            340 => 
            array (
                'cast_id' => 2967,
                'movie_id' => 357,
                'person_id' => 1313,
                'character' => 'Persephone',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            341 => 
            array (
                'cast_id' => 2968,
                'movie_id' => 357,
                'person_id' => 1314,
                'character' => 'Seraph',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            342 => 
            array (
                'cast_id' => 2969,
                'movie_id' => 357,
                'person_id' => 71,
                'character' => 'Morpheus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            343 => 
            array (
                'cast_id' => 2970,
                'movie_id' => 357,
                'person_id' => 1315,
                'character' => 'Zee',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            344 => 
            array (
                'cast_id' => 2971,
                'movie_id' => 357,
                'person_id' => 72,
                'character' => 'Trinity',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            345 => 
            array (
                'cast_id' => 2972,
                'movie_id' => 357,
                'person_id' => 1316,
                'character' => 'Link',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            346 => 
            array (
                'cast_id' => 2973,
                'movie_id' => 357,
                'person_id' => 282,
                'character' => 'Niobe',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            347 => 
            array (
                'cast_id' => 2974,
                'movie_id' => 357,
                'person_id' => 1,
                'character' => 'Neo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            348 => 
            array (
                'cast_id' => 2975,
                'movie_id' => 357,
                'person_id' => 764,
                'character' => 'Trainman',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            349 => 
            array (
                'cast_id' => 2976,
                'movie_id' => 357,
                'person_id' => 543,
                'character' => 'Cas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            350 => 
            array (
                'cast_id' => 2977,
                'movie_id' => 357,
                'person_id' => 74,
                'character' => 'Agent Smith',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            351 => 
            array (
                'cast_id' => 2978,
                'movie_id' => 358,
                'person_id' => 461,
                'character' => 'Leonard',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            352 => 
            array (
                'cast_id' => 2979,
                'movie_id' => 358,
                'person_id' => 72,
                'character' => 'Natalie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            353 => 
            array (
                'cast_id' => 2980,
                'movie_id' => 358,
                'person_id' => 73,
                'character' => 'Teddy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            354 => 
            array (
                'cast_id' => 2981,
                'movie_id' => 358,
                'person_id' => 816,
                'character' => 'Sammy Jankis',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            355 => 
            array (
                'cast_id' => 2982,
                'movie_id' => 359,
                'person_id' => 999,
                'character' => 'Ratso',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            356 => 
            array (
                'cast_id' => 2983,
                'movie_id' => 359,
                'person_id' => 614,
                'character' => 'Joe Buck',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            357 => 
            array (
                'cast_id' => 2984,
                'movie_id' => 359,
                'person_id' => 628,
                'character' => 'Towny',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            358 => 
            array (
                'cast_id' => 2985,
                'movie_id' => 360,
                'person_id' => 1138,
                'character' => 'Tom Reagan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            359 => 
            array (
                'cast_id' => 2986,
                'movie_id' => 360,
                'person_id' => 615,
                'character' => 'Bernie Bernbaum',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            360 => 
            array (
                'cast_id' => 2987,
                'movie_id' => 360,
                'person_id' => 194,
                'character' => 'Leo',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            361 => 
            array (
                'cast_id' => 2988,
                'movie_id' => 360,
                'person_id' => 799,
                'character' => 'Mink',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            362 => 
            array (
                'cast_id' => 2989,
                'movie_id' => 360,
                'person_id' => 111,
                'character' => 'Adolph',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            363 => 
            array (
                'cast_id' => 2990,
                'movie_id' => 360,
                'person_id' => 1274,
                'character' => 'Caspar\'s Driver',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            364 => 
            array (
                'cast_id' => 2991,
                'movie_id' => 360,
                'person_id' => 623,
                'character' => 'Mayor\'s Secretary',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            365 => 
            array (
                'cast_id' => 2992,
                'movie_id' => 361,
                'person_id' => 1227,
                'character' => 'Frankie Dunn',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            366 => 
            array (
                'cast_id' => 2993,
                'movie_id' => 361,
                'person_id' => 203,
                'character' => 'Eddie Scrap-Iron Dupris',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            367 => 
            array (
                'cast_id' => 2994,
                'movie_id' => 361,
                'person_id' => 991,
                'character' => 'Danger Barch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            368 => 
            array (
                'cast_id' => 2995,
                'movie_id' => 361,
                'person_id' => 1049,
                'character' => 'Shawrelle Berry',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            369 => 
            array (
                'cast_id' => 2996,
                'movie_id' => 361,
                'person_id' => 908,
                'character' => 'Omar',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            370 => 
            array (
                'cast_id' => 2997,
                'movie_id' => 361,
                'person_id' => 1317,
                'character' => 'Maggie Fitzgerald',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            371 => 
            array (
                'cast_id' => 2998,
                'movie_id' => 361,
                'person_id' => 1318,
                'character' => 'Mardell Fitzgerald',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            372 => 
            array (
                'cast_id' => 2999,
                'movie_id' => 361,
                'person_id' => 1319,
                'character' => 'Earline Fitzgerald',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            373 => 
            array (
                'cast_id' => 3000,
                'movie_id' => 362,
                'person_id' => 906,
                'character' => 'Richard \'Rick\' O\'Connell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            374 => 
            array (
                'cast_id' => 3001,
                'movie_id' => 362,
                'person_id' => 893,
                'character' => 'Evelyn \'Evy\' Carnahan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            375 => 
            array (
                'cast_id' => 3002,
                'movie_id' => 362,
                'person_id' => 142,
                'character' => 'Dr. Allen Chamberlain',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            376 => 
            array (
                'cast_id' => 3003,
                'movie_id' => 362,
                'person_id' => 1192,
                'character' => 'Warden Gad Hassan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            377 => 
            array (
                'cast_id' => 3004,
                'movie_id' => 362,
                'person_id' => 1320,
                'character' => 'Jonathan Carnahan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            378 => 
            array (
                'cast_id' => 3005,
                'movie_id' => 362,
                'person_id' => 1321,
                'character' => 'High Priest Imhotep',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            379 => 
            array (
                'cast_id' => 3006,
                'movie_id' => 362,
                'person_id' => 1322,
                'character' => 'Ardeth Bay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            380 => 
            array (
                'cast_id' => 3007,
                'movie_id' => 362,
                'person_id' => 1323,
                'character' => 'Anck Su Namun',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            381 => 
            array (
                'cast_id' => 3008,
                'movie_id' => 363,
                'person_id' => 906,
                'character' => 'Rick O\'Connell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            382 => 
            array (
                'cast_id' => 3009,
                'movie_id' => 363,
                'person_id' => 893,
                'character' => 'Evelyn / Nefertiri',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            383 => 
            array (
                'cast_id' => 3010,
                'movie_id' => 363,
                'person_id' => 1320,
                'character' => 'Jonathan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            384 => 
            array (
                'cast_id' => 3011,
                'movie_id' => 363,
                'person_id' => 1321,
                'character' => 'Imhotep',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            385 => 
            array (
                'cast_id' => 3012,
                'movie_id' => 363,
                'person_id' => 1322,
                'character' => 'Ardeth Bay',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            386 => 
            array (
                'cast_id' => 3013,
                'movie_id' => 363,
                'person_id' => 1323,
                'character' => 'Meela / Anck-Su-Namun',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            387 => 
            array (
                'cast_id' => 3014,
                'movie_id' => 363,
                'person_id' => 344,
                'character' => 'The Scorpion King',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            388 => 
            array (
                'cast_id' => 3015,
                'movie_id' => 363,
                'person_id' => 182,
                'character' => 'Lock-Nah',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            389 => 
            array (
                'cast_id' => 3016,
                'movie_id' => 363,
                'person_id' => 1241,
                'character' => 'Izzy',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            390 => 
            array (
                'cast_id' => 3017,
                'movie_id' => 364,
                'person_id' => 906,
                'character' => 'Rick O\'Connell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            391 => 
            array (
                'cast_id' => 3018,
                'movie_id' => 364,
                'person_id' => 1277,
                'character' => 'Emperor',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            392 => 
            array (
                'cast_id' => 3019,
                'movie_id' => 364,
                'person_id' => 1320,
                'character' => 'Jonathan Carnahan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            393 => 
            array (
                'cast_id' => 3020,
                'movie_id' => 364,
                'person_id' => 313,
                'character' => 'Zi Yuan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            394 => 
            array (
                'cast_id' => 3021,
                'movie_id' => 364,
                'person_id' => 1324,
                'character' => 'Evelyn OConnell',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            395 => 
            array (
                'cast_id' => 3022,
                'movie_id' => 365,
                'person_id' => 894,
                'character' => 'White Witch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            396 => 
            array (
                'cast_id' => 3023,
                'movie_id' => 365,
                'person_id' => 648,
                'character' => 'Mr. Tumnus',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            397 => 
            array (
                'cast_id' => 3024,
                'movie_id' => 365,
                'person_id' => 392,
                'character' => 'Professor Kirke',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            398 => 
            array (
                'cast_id' => 3025,
                'movie_id' => 365,
                'person_id' => 832,
                'character' => 'Father Christmas',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            399 => 
            array (
                'cast_id' => 3026,
                'movie_id' => 365,
                'person_id' => 198,
                'character' => 'Aslan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            400 => 
            array (
                'cast_id' => 3027,
                'movie_id' => 365,
                'person_id' => 408,
                'character' => 'Mr. Beaver',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            401 => 
            array (
                'cast_id' => 3028,
                'movie_id' => 365,
                'person_id' => 985,
                'character' => 'Mrs. Beaver',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            402 => 
            array (
                'cast_id' => 3029,
                'movie_id' => 365,
                'person_id' => 319,
                'character' => 'Maugrim',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            403 => 
            array (
                'cast_id' => 3030,
                'movie_id' => 365,
                'person_id' => 1325,
                'character' => 'Lucy Pevensie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            404 => 
            array (
                'cast_id' => 3031,
                'movie_id' => 365,
                'person_id' => 1326,
                'character' => 'Edmund Pevensie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            405 => 
            array (
                'cast_id' => 3032,
                'movie_id' => 365,
                'person_id' => 1327,
                'character' => 'Peter Pevensie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            406 => 
            array (
                'cast_id' => 3033,
                'movie_id' => 365,
                'person_id' => 1328,
                'character' => 'Susan Pevensie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            407 => 
            array (
                'cast_id' => 3034,
                'movie_id' => 366,
                'person_id' => 1325,
                'character' => 'Lucy Pevensie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            408 => 
            array (
                'cast_id' => 3035,
                'movie_id' => 366,
                'person_id' => 1326,
                'character' => 'Edmund Pevensie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            409 => 
            array (
                'cast_id' => 3036,
                'movie_id' => 366,
                'person_id' => 1327,
                'character' => 'Peter Pevensie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            410 => 
            array (
                'cast_id' => 3037,
                'movie_id' => 366,
                'person_id' => 1328,
                'character' => 'Susan Pevensie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            411 => 
            array (
                'cast_id' => 3038,
                'movie_id' => 366,
                'person_id' => 659,
                'character' => 'Trumpkin',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            412 => 
            array (
                'cast_id' => 3039,
                'movie_id' => 366,
                'person_id' => 369,
                'character' => 'Nikabrik',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            413 => 
            array (
                'cast_id' => 3040,
                'movie_id' => 366,
                'person_id' => 917,
                'character' => 'General Glozelle',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            414 => 
            array (
                'cast_id' => 3041,
                'movie_id' => 366,
                'person_id' => 753,
                'character' => 'Reepicheep',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            415 => 
            array (
                'cast_id' => 3042,
                'movie_id' => 366,
                'person_id' => 198,
                'character' => 'Aslan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            416 => 
            array (
                'cast_id' => 3043,
                'movie_id' => 366,
                'person_id' => 894,
                'character' => 'The White Witch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            417 => 
            array (
                'cast_id' => 3044,
                'movie_id' => 366,
                'person_id' => 1329,
                'character' => 'Prince Caspian',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            418 => 
            array (
                'cast_id' => 3045,
                'movie_id' => 367,
                'person_id' => 1325,
                'character' => 'Lucy Pevensie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            419 => 
            array (
                'cast_id' => 3046,
                'movie_id' => 367,
                'person_id' => 1326,
                'character' => 'Edmund Pevensie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            420 => 
            array (
                'cast_id' => 3047,
                'movie_id' => 367,
                'person_id' => 1329,
                'character' => 'Caspian',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            421 => 
            array (
                'cast_id' => 3048,
                'movie_id' => 367,
                'person_id' => 764,
                'character' => 'Lord Rhoop',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            422 => 
            array (
                'cast_id' => 3049,
                'movie_id' => 367,
                'person_id' => 894,
                'character' => 'The White Witch',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            423 => 
            array (
                'cast_id' => 3050,
                'movie_id' => 367,
                'person_id' => 1328,
                'character' => 'Susan Pevensie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            424 => 
            array (
                'cast_id' => 3051,
                'movie_id' => 367,
                'person_id' => 1327,
                'character' => 'Peter Pevensie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            425 => 
            array (
                'cast_id' => 3052,
                'movie_id' => 367,
                'person_id' => 397,
                'character' => 'Caspian\'s Father',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            426 => 
            array (
                'cast_id' => 3053,
                'movie_id' => 367,
                'person_id' => 198,
                'character' => 'Aslan',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            427 => 
            array (
                'cast_id' => 3054,
                'movie_id' => 367,
                'person_id' => 512,
                'character' => 'Reepicheep',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            428 => 
            array (
                'cast_id' => 3055,
                'movie_id' => 367,
                'person_id' => 1330,
                'character' => 'Eustace Scrubb',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            429 => 
            array (
                'cast_id' => 3056,
                'movie_id' => 368,
                'person_id' => 1145,
                'character' => 'George Banks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            430 => 
            array (
                'cast_id' => 3057,
                'movie_id' => 368,
                'person_id' => 1098,
                'character' => 'Nina Banks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            431 => 
            array (
                'cast_id' => 3058,
                'movie_id' => 368,
                'person_id' => 1148,
                'character' => 'Franck Eggelhoffer',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            432 => 
            array (
                'cast_id' => 3059,
                'movie_id' => 368,
                'person_id' => 1146,
                'character' => 'Annie Banks-MacKenzie',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            433 => 
            array (
                'cast_id' => 3060,
                'movie_id' => 368,
                'person_id' => 1147,
                'character' => 'Matty Banks',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            434 => 
            array (
                'cast_id' => 3061,
                'movie_id' => 368,
                'person_id' => 98,
                'character' => 'Howard Weinstein',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            435 => 
            array (
                'cast_id' => 3062,
                'movie_id' => 368,
                'person_id' => 1075,
                'character' => 'Mr. Habib',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}
