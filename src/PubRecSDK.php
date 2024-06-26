<?php

namespace ChrisReedIO\PubRecSDK;

use Saloon\Contracts\Authenticator;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;

use function config;

class PubRecSDK extends Connector
{
    protected readonly string $key;

    public function __construct()
    {
        $this->key = config('pubrec-sdk.api_key');
    }

    public function resolveBaseUrl(): string
    {
        return config('pubrec-sdk.api_url').'/pubrec/assessor/v1/';
    }

    protected function defaultHeaders(): array
    {
        return [
            // Should be handled by the defaultAuth method but PubRec uses a custom header
            'Access-Token' => $this->key,
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    // protected function defaultAuth(): ?Authenticator
    // {
    //     return new TokenAuthenticator($this->key);
    // }

    //region Resources
    public function properties(): Resources\Properties
    {
        return new Resources\Properties($this);
    }
    //endregion Resources
}
