<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Language extends Model implements Searchable
{

    protected $fillable = ['name'];

    public function getSearchResult(): SearchResult
    {
        $url = route('languages.show', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $url
         );
    }

}
