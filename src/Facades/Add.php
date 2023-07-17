<?php
 namespace Bappi\Sum\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bappi\Sum\Add
 */

 class Add extends Facade{

    protected static function getFacadeAccessor()
    {
        return 'get-sum';
    }
 }

