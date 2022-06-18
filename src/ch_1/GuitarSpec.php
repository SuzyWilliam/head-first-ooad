<?php

namespace App\ch_1;

use App\ch_1\Enums\Builder;
use App\ch_1\Enums\Type;
use App\ch_1\Enums\Wood;

class GuitarSpec
{
    public function __construct(
        public Builder $builder,
        public string $modal,
        public Type $type,
        public Wood $backwood,
        public Wood $topwood,
        public int $numString
    ) {
        $this->builder = $builder;
        $this->modal = $modal;
        $this->type = $type;
        $this->backwood = $backwood;
        $this->topwood = $topwood;
        $this->numString = $numString;
    }

    /**
     * Get the value of builder
     */
    public function getBuilder()
    {
        return $this->builder->value;
    }

    /**
     * Get the value of modal
     */
    public function getModal()
    {
        return $this->modal;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type->value;
    }

    /**
     * Get the value of backwood
     */
    public function getBackWood()
    {
        return $this->backwood->value;
    }

    /**
     * Get the value of topwood
     */
    public function getTopWood()
    {
        return $this->topwood->value;
    }

    /**
     * Get the value of numString
     */
    public function getNumString()
    {
        return $this->numString;
    }

    public function matches(GuitarSpec $guitarSpec)
    {
        //Validate bulider
        return ($this->getBuilder() === $guitarSpec->getBuilder())
            && (!is_null($this->getModal()) && ($this->getModal() !== "" && $this->getModal() === $guitarSpec->getModal()))
            && ($this->getType() === $guitarSpec->getType())
            && ($this->getBackWood() === $guitarSpec->getBackWood())
            && ($this->getTopWood() === $guitarSpec->getTopWood())
            && ($this->getNumString() === $guitarSpec->getNumString());
    }
}
