<?php

namespace App\ch_5\InstrumentalSpecs;

use App\ch_5\Enums\Builder;
use App\ch_5\Enums\Type;
use App\ch_5\Enums\Wood;

class GuitarSpec extends InstrumentalSpec
{
    public function __construct(
        public Builder $builder,
        public string $modal,
        public Type $type,
        public Wood $backwood,
        public Wood $topwood,
        public int $numString
    ) {
        parent::__construct($builder, $modal, $type, $backwood, $topwood);
        $this->numString = $numString;
    }



    /**
     * Get the value of numString
     */
    public function getNumString()
    {
        return $this->numString;
    }

    public function matches( InstrumentalSpec $instrumentalSpec)
    {
        if(! parent::matches($instrumentalSpec))
            return false;
        if (! $instrumentalSpec instanceof GuitarSpec)
            return false;

        //Validate bulider
        return $this->getNumString() === $instrumentalSpec->getNumString();
    }
}
