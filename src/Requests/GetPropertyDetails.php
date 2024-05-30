<?php

namespace ChrisReedIO\PubRecSDK\Requests;

use ChrisReedIO\PubRecSDK\Data\AddressData;
use ChrisReedIO\PubRecSDK\Data\PropertyData;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use JsonException;
use Saloon\CachePlugin\Contracts\Cacheable;
use Saloon\CachePlugin\Contracts\Driver;
use Saloon\CachePlugin\Drivers\LaravelCacheDriver;
use Saloon\CachePlugin\Traits\HasCaching;
use Saloon\Http\PendingRequest;
use Saloon\Http\Response;

use function collect;
use function config;

class GetPropertyDetails extends BaseRequest implements Cacheable
{
    use HasCaching;

    public function __construct(
        protected AddressData $address
    ) {
    }

    public function resolveEndpoint(): string
    {
        return 'GetPropertyDetails';
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'StreetAddress' => $this->address->street,
            'City' => $this->address->city,
            'State' => $this->address->state,
            'PostalCode' => $this->address->zip,
            'OrderId' => Str::random(10), // TODO: Unsure why this is needed?
        ]);
    }

    /**
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): PropertyData
    {
        return PropertyData::fromArray($response->json('Data.Listing'));
    }

    protected function cacheKey(PendingRequest $pendingRequest): ?string
    {
        $uri = $pendingRequest->getUri();
        $key = $uri->getScheme().'://'.$uri->getHost().$uri->getPath();
        $query = collect($pendingRequest->query()->all())
            ->forget('OrderId')
            ->all();
        $key .= '?'.http_build_query($query);

        return $key;
    }

    public function resolveCacheDriver(): Driver
    {
        $driverName = config('pubrec-sdk.cache.driver');

        return new LaravelCacheDriver(Cache::store($driverName));
    }

    // Default expiry
    public function cacheExpiryInSeconds(): int
    {
        return config('pubrec-sdk.cache.ttl');
    }
}
