<?php

namespace App\Http\Controllers;

use App\Language;
use App\Word;

class LanguageController extends Controller
{

    public function show(Language $language)
    {
        $words = Word::where('language_id', $language->id)->get();
        return view('language', compact('language', 'words'));
    }

}
