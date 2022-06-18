<?php

namespace App\ch_1;

use App\ch_1\Enums\Builder;
use App\ch_1\Enums\Type;
use App\ch_1\Enums\Wood;

class Guitar
{
    public function __construct(
        public string $serialNumber,
        public float $price,
        public Builder $builder,
        public string $modal,
        public Type $type,
        public Wood $backwood,
        public Wood $topwood
    ) {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->builder = $builder;
        $this->modal = $modal;
        $this->type = $type;
        $this->backwood = $backwood;
        $this->topwood = $topwood;
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
