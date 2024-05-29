<?php

namespace ChrisReedIO\PubRecSDK\Resources;

use ChrisReedIO\PubRecSDK\Data\AddressData;
use ChrisReedIO\PubRecSDK\Data\PropertyData;
use ChrisReedIO\PubRecSDK\Requests\GetPropertyDetails;
use Exception;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;

class Properties extends BaseResource
{
    /**
     * @throws FatalRequestException
     * @throws RequestException
     * @throws Exception
     */
    public function details(AddressData $address): array // ?PropertyData
    {
        $response = $this->connector->send(new GetPropertyDetails($address));
        // dd($response->isCached());
        if ($response->failed()) {
            // TODO: Handle this better
            throw new Exception($response->body(), $response->status());
        }

        // return $response->dtoOrFail();
        return $response->json('Data.Listing');
    }

}
