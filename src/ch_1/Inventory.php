<?php

namespace App\ch_1;

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
        string $builder,
        string $modal,
        string $type,
        string $backwood,
        string $topwood
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

    public function search(Guitar $searchGuitar)
    {
        for ($this->guitars->rewind(); $this->guitars->valid(); $this->guitars->next()) {
            $guitar = $this->guitars->current();

            //Validate bulider
            $builder = $searchGuitar->getBuilder();
            if (!is_null($builder) && ($builder !== "" && $builder !== $guitar->getBuilder())) {
                continue;
            }
            // validate modal
            $modal = $searchGuitar->getModal();
            if (!is_null($modal) && ($modal !== "" && $modal !== $guitar->getModal())) {
                continue;
            }


            // validate type
            $type = $searchGuitar->getType();
            if (!is_null($type) && ($type !== "" && $type !== $guitar->getType())) {
                continue;
            }

            // validate backwood
            $backwood = $searchGuitar->getBackWood();
            if (!is_null($backwood) && ($backwood !== "" && $backwood !== $guitar->getBackWood())) {
                continue;
            }

            // validate backwood
            $topwood = $searchGuitar->getTopWood();
            if (!is_null($topwood) && $topwood !== "" && $topwood !== $guitar->getTopWood()) {
                continue;
            }

            return $guitar;
        }

        return null;
    }
}
