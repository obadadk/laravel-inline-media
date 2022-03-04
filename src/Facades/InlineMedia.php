<?php

namespace Obadadk\InlineMedia\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Obadadk\InlineMedia\InlineMedia
 */
class InlineMedia extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-inline-media';
    }
}
