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
            $builder = $searchGuitar->builder;
            if (!$builder && $builder !== "" && $builder !== $guitar->builder)
                continue;

            // validate modal
            $modal = $searchGuitar->modal;
            if (!$modal && $modal !== "" && $modal !== $guitar->modal)
                continue;

            // validate type
            $type = $searchGuitar->type;
            if (!$type && $type !== "" && $type !== $guitar->type)
                continue;

            // validate backwood
            $backwood = $searchGuitar->backwood;
            if (!$backwood && $backwood !== "" && $backwood !== $guitar->backwood)
                continue;
            
            // validate backwood
            $topwood = $searchGuitar->topwood;
            if (!$topwood && $topwood !== "" && $topwood !== $guitar->backwood)
                continue;
        }

        return null;
    }
}
