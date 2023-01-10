<?php

namespace App\ch_5\InstrumentalSpecs;

use App\ch_5\Enums\Builder;
use App\ch_5\Enums\Style;
use App\ch_5\Enums\Type;
use App\ch_5\Enums\Wood;

class MandolinSpec extends InstrumentalSpec
{
    public function __construct(
        public Builder $builder,
        public string $modal,
        public Type $type,
        public Wood $backwood,
        public Wood $topwood,
        public Style $style
    ) {

        parent::__construct($builder, $modal, $type, $backwood, $topwood);
        $this->style = $style;
    }



    /**
     * Get the value of numString
     */
    public function getStyle()
    {
        return $this->style;
    }

    public function matches(InstrumentalSpec $instrumentalSpec)
    {
        if(! parent::matches($instrumentalSpec))
            return false;
        if (! $instrumentalSpec instanceof MandolinSpec)
            return false;
        //Validate bulider
        return $this->getStyle() === $instrumentalSpec->getStyle();
    }
}
