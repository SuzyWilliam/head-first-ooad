<?php

namespace App\ch_5\InstrumentalSpecs;

use App\ch_5\Enums\Builder;
use App\ch_5\Enums\Type;
use App\ch_5\Enums\Wood;

abstract class InstrumentalSpec
{
    public function __construct(
        public Builder $builder,
        public string $modal,
        public Type $type,
        public Wood $backwood,
        public Wood $topwood
    ) {

    }

    public function matches(self $instrumentalSpec){
        return ($this->getBuilder() === $instrumentalSpec->getBuilder())
            && (!is_null($this->getModal()) && ($this->getModal() !== "" && $this->getModal() === $instrumentalSpec->getModal()))
            && ($this->getType() === $instrumentalSpec->getType())
            && ($this->getBackWood() === $instrumentalSpec->getBackWood())
            && ($this->getTopWood() === $instrumentalSpec->getTopWood());
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
}
