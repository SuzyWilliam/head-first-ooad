<?php

namespace App\ch_5_2;

use UnitEnum;

class InstrumentalSpec
{
    public function __construct(
        public array $properties
    ) {

    }

    public function getProperty(string $name)
    {
        return $this->properties[$name];
    }

    public function getProperties()
    {
        return $this->properties;
    }

    public function matches(InstrumentalSpec $instrumentalSpec){
        foreach ($this->getProperties() as $key => $value) {
            if(
                (! $value instanceof UnitEnum && $instrumentalSpec->getProperty($key) !== $value) ||
                ($value instanceof UnitEnum && $instrumentalSpec->getProperty($key)->value !== $value->value)){
                return false;
            }
        }
        return true;
    }

}
