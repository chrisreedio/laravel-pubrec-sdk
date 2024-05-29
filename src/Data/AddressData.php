<?php

namespace ChrisReedIO\PubRecSDK\Data;

use ChrisReedIO\PubRecSDK\Data\BaseData;

readonly class AddressData extends BaseData
{
    public function __construct(
        public ?string $street = null,
        public ?string $city = null,
        public ?string $state = null,
        public ?string $zip = null,
    ) {
    }

    public static function fromArray(array $data): static
    {
        return new static(
            street: $data['StreetAddress'] ?? null,
            city: $data['City'] ?? null,
            state: $data['State'] ?? null,
            zip: $data['PostalCode'] ?? null,
        );
    }
}
