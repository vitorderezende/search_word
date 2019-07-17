<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Word extends Model implements Searchable
{

    protected $fillable = ['word', 'language_id', 'name'];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('words.show', $this->id);

        return new SearchResult(
            $this,
            $this->word,
            $url
        );
    }

}
