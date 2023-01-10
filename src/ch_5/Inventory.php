<?php

namespace App\ch_5;

use App\ch_5\Instrumentals\Guitar as InstrumentalsGuitar;
use App\ch_5\Instrumentals\Instrumental;
use App\ch_5\Instrumentals\Mandolin;
use App\ch_5\InstrumentalSpecs\GuitarSpec;
use App\ch_5\InstrumentalSpecs\InstrumentalSpec;
use App\ch_5\InstrumentalSpecs\MandolinSpec;
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
        if ( $instrumentalSpec instanceof GuitarSpec){
            $instrumental = new InstrumentalsGuitar($serialNumber, $price, $instrumentalSpec);
        }elseif($instrumentalSpec instanceof MandolinSpec){
            $instrumental = new Mandolin($serialNumber, $price, $instrumentalSpec);
        }

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
