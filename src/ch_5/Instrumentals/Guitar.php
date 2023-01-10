<?php

namespace App\ch_5\Instrumentals;

use App\ch_5\Instrumentals\Instrumental;
use App\ch_5\InstrumentalSpecs\GuitarSpec;

class Guitar extends Instrumental
{
    public function __construct(
        public string $serialNumber,
        public float $price,
        public GuitarSpec $guitarSpec
    ) {
    }

    /**
     * Get the value of guitarSpec
     */
    public function getSpec()
    {
        return $this->guitarSpec;
    }
}
