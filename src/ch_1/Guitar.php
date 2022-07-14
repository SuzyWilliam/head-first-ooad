<?php

namespace App\ch_1;

class Guitar
{
    public function __construct(
        public string $serialNumber,
        public float $price,
        public GuitarSpec $guitarSpec
    ) {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->spec = $guitarSpec;
    }

    /**
     * Get the value of serialNumber
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of guitarSpec
     */
    public function getSpec()
    {
        return $this->spec;
    }
}
