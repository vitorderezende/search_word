<?php

use Illuminate\Database\Seeder;
use App\Language;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            ['name' => 'English'],
            ['name' => 'Portuguese'],
            ['name' => 'Italy'],
        ];

        foreach ($languages as $language)
        {
            Language::create($language);
        }
    }
}
