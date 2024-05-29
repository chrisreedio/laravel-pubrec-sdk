<?php

namespace ChrisReedIO\PubRecSDK\Requests;

use Illuminate\Support\Facades\Cache;
use Saloon\CachePlugin\Contracts\Cacheable;
use Saloon\CachePlugin\Contracts\Driver;
use Saloon\CachePlugin\Drivers\LaravelCacheDriver;
use Saloon\CachePlugin\Traits\HasCaching;
use Saloon\Enums\Method;
use Saloon\Http\PendingRequest;
use Saloon\Http\Request;
use Saloon\Http\Response;

use function config;

abstract class BaseRequest extends Request
{
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;
}
