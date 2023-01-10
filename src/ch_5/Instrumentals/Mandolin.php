<?php

namespace App\ch_5\Instrumentals;

use App\ch_5\InstrumentalSpecs\MandolinSpec;

class Mandolin extends Instrumental
{
    public function __construct(
        public string $serialNumber,
        public float $price,
        public MandolinSpec $mandolineSpec
    )
    {

    }

     /**
     * Get the value of guitarSpec
     */
    public function getSpec()
    {
        return $this->mandolineSpec;
    }
}
