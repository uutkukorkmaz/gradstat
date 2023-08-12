<?php

namespace Uutkukorkmaz\Gradstat\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Uutkukorkmaz\Gradstat\Gradstat
 */
class Gradstat extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Uutkukorkmaz\Gradstat\Gradstat::class;
    }
}
