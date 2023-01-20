<?php

namespace App\ch_5_2;

use App\ch_5_2\Enums\InstrumentalType;
use SplDoublyLinkedList;

class Inventory
{
    private SplDoublyLinkedList $inventory;

    public function __construct()
    {
        $this->inventory = new SplDoublyLinkedList();
    }

    public function addInstrumental(
        string $serialNumber,
        float $price,
        InstrumentalSpec $instrumentalSpec
    ) {

        $instrumental = new Instrumental( $serialNumber, $price, $instrumentalSpec);
        $this->inventory->push($instrumental);
    }

    public function get(string $serialNumber):Instrumental
    {
        for ($this->inventory->rewind(); $this->inventory->valid(); $this->inventory->next()) {
            $inventory = $this->inventory->current();
            if ($inventory->serialNumber === $serialNumber) {
                return $inventory;
            }
        }
    }

    public function search(InstrumentalSpec $searchInstrumental): SplDoublyLinkedList
    {
        $matchingInstrumentals = new SplDoublyLinkedList();

        for ($this->inventory->rewind(); $this->inventory->valid(); $this->inventory->next()) {
            $instrumental = $this->inventory->current();

            if ($searchInstrumental->matches($instrumental->getSpec())) {
                $matchingInstrumentals->push($instrumental);
            }
        }

        return $matchingInstrumentals;
    }
}
