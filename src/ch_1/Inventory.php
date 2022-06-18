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
        Wood $topwood
    ) {
        $guitar = new Guitar($serialNumber, $price, $builder, $modal, $type, $backwood, $topwood);
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

    public function search(Guitar $searchGuitar): SplDoublyLinkedList
    {
        $matchingGuitars = new SplDoublyLinkedList();

        for ($this->guitars->rewind(); $this->guitars->valid(); $this->guitars->next()) {
            $guitar = $this->guitars->current();

            //Validate bulider
            if ($searchGuitar->getBuilder() !== $guitar->getBuilder()) {
                continue;
            }
            // validate modal
            $modal = $searchGuitar->getModal();
            if (!is_null($modal) && ($modal !== "" && $modal !== $guitar->getModal())) {
                continue;
            }

            // validate type
            if ($searchGuitar->getType() !== $guitar->getType()) {
                continue;
            }

            // validate backwood
            if ($searchGuitar->getBackWood() !== $guitar->getBackWood()) {
                continue;
            }

            // validate backwood
            if ($searchGuitar->getTopWood() !== $guitar->getTopWood()) {
                continue;
            }

            $matchingGuitars->push($guitar);
        }

        return $matchingGuitars;
    }
}
