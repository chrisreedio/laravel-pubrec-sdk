<?php

namespace ChrisReedIO\PubRecSDK\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

abstract class BaseRequest extends Request
{
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;
}
