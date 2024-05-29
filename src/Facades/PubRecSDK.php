<?php

namespace ChrisReedIO\PubRecSDK\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ChrisReedIO\PubRecSDK\PubRecSDK
 */
class PubRecSDK extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ChrisReedIO\PubRecSDK\PubRecSDK::class;
    }
}
