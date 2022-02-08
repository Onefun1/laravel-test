<?php

namespace App\Service\History\Facades;

use Illuminate\Support\Facades\Facade;

class History extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'History';
    }
}
