<?php

namespace ChrisReedIO\PubRecSDK\Data;

abstract readonly class BaseData
{
    /**
     * Create a new instance from an array of data
     * This should most likely be overridden in the child class
     *
     * @param array $data
     * @return static
     */
    public static function fromArray(array $data): static
    {
        $instance = new static();

        foreach ($data as $key => $value) {
            $instance->{$key} = $value;
        }

        return $instance;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
