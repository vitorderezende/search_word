<?php

namespace App\Http\Controllers;

use App\Word;

class WordController extends Controller
{

    public function show(Word $word)
    {
   		#$words = Word::where('id', $word->id)->get();

        return view('word', compact('words'));
    }

}
