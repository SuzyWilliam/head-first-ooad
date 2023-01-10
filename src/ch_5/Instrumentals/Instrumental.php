<?php
namespace App\ch_5\Instrumentals;

use App\ch_5\InstrumentalSpecs\InstrumentalSpec;

abstract class Instrumental
{
    public function __construct(
        public string $serialNumber,
        public float $price,
        public InstrumentalSpec $instrumentalSpec
    )
    {

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
    abstract public function getSpec();

}
