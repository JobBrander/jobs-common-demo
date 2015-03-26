<?php namespace App\Filters;

use Illuminate\Support\Facades\Input;

class InputFilters
{
    public static function getJobSearchInput()
    {
        return Input::only(
            'keyword',
            'api',
            'location',
            'page',
            'count'
        );
    }
}
