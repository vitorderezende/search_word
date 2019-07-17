<?php

use Illuminate\Database\Seeder;
use App\Word;

class WordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen('Storage\App\public\list.xml',"r");

        /*$words = [
            ['word' => 'aahing', 'language_id' => 1],
            ['word' => 'aahs', 'language_id' => 1],
            ['word' => 'aal', 'language_id' => 1],
            ['word' => 'aalii', 'language_id' => 1],
            ['word' => 'aaliis', 'language_id' => 1],
            ['word' => 'aals', 'language_id' => 1],
            ['word' => 'aam', 'language_id' => 1],
            ['word' => 'aani', 'language_id' => 1],
            ['word' => 'aardvark', 'language_id' => 1],
            ['word' => 'aardvarks', 'language_id' => 1],
            ['word' => 'aardwolf', 'language_id' => 1],
            ['word' => 'aardwolves', 'language_id' => 1],
            ['word' => 'aargh', 'language_id' => 1],
        ];*/

        foreach ($words as $word)
        {
            Word::create($word);
        }
    }
}
