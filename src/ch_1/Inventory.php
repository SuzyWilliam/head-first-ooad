<?php

namespace App\ch_1;

use App\ch_1\Enums\Builder;
use App\ch_1\Enums\Type;
use App\ch_1\Enums\Wood;
use SplDoublyLinkedList;

class Inventory
{
    private SplDoublyLinkedList $guitars;

    public function __construct()
    {
        $this->guitars = new SplDoublyLinkedList();
    }

    public function addGuitar(
        string $serialNumber,
        float $price,
        Builder $builder,
        string $modal,
        Type $type,
        Wood $backwood,
        Wood $topwood,
        int $numString
    ) {
        $guitarSpec = new GuitarSpec($builder, $modal, $type, $backwood, $topwood, $numString);
        $guitar = new Guitar($serialNumber, $price, $guitarSpec);
        
        $this->guitars->push($guitar);
    }

    public function getGuitar(string $serialNumber): Guitar
    {
        for ($this->guitars->rewind(); $this->guitars->valid(); $this->guitars->next()) {
            $guitar = $this->guitars->current();
            if ($guitar->serialNumber === $serialNumber) {
                return $guitar;
            }
        }
    }

    public function search(GuitarSpec $searchGuitar): SplDoublyLinkedList
    {
        $matchingGuitars = new SplDoublyLinkedList();

        for ($this->guitars->rewind(); $this->guitars->valid(); $this->guitars->next()) {
            $guitar = $this->guitars->current();

            if ($searchGuitar->matches($guitar->getSpec())) {
                $matchingGuitars->push($guitar);
            }
        }

        return $matchingGuitars;
    }
}
