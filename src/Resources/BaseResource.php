<?php

namespace ChrisReedIO\PubRecSDK\Resources;

use ChrisReedIO\PubRecSDK\PubRecSDK;

abstract class BaseResource
{
    public function __construct(
       protected readonly PubRecSDK $connector,
    ) {
    }
}
