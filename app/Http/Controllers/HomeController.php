<?php

namespace App\Http\Controllers;

use App\Word;
use App\Language;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class HomeController extends Controller
{

    public function index()
    {
        $words = Word::with('language')->get();
        $words = Word::paginate(10);
        return view('home', compact('words'));
         
    }

    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Word::class, 'word')
            ->registerModel(Language::class, 'name')
            ->perform($request->input('query'));

        return view('search', compact('searchResults'));
    }

}
