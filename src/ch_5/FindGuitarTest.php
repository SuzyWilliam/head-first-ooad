<?php

namespace App\ch_5;

use App\ch_5\Enums\Builder;
use App\ch_5\Enums\Style;
use App\ch_5\Enums\Type;
use App\ch_5\Enums\Wood;
use App\ch_5\InstrumentalSpecs\GuitarSpec;
use App\ch_5\InstrumentalSpecs\MandolinSpec as InstrumentalSpecsMandolinSpec;

class FindGuitarTest
{

    public function search()
    {
        $inventory = new Inventory();
        self::initializeInventory($inventory);

        // $searchSpec = new GuitarSpec( Builder::FENDER, "Stratpcastor", Type::ELECTRIC, Wood::ALDER, Wood::ALDER, 0);
        $searchSpec = new InstrumentalSpecsMandolinSpec( Builder::FENDER, "Stratpcastor", Type::ELECTRIC, Wood::ALDER, Wood::ALDER, Style::A);

        $guitars = $inventory->search($searchSpec);
        if ($guitars) {
            for ($guitars->rewind(); $guitars->valid(); $guitars->next()) {
                $guitar = $guitars->current();
                $guitarSpec = $guitar->getSpec();
                echo "Erin, you might like this {$guitarSpec->getBuilder()}
                {$guitarSpec->getModal()}
                {$guitarSpec->getType()} guitar:
                {$guitarSpec->getBackWood()}<br/> back and sides,
                <br/> {$guitarSpec->getTopWood()} top.
                <br/> You can have it for only $ {$guitar->getPrice()}!<br/> ----------<br/>";
            }
        } else {
            echo "Sorry, Erin, we have nothing for you.";
        }
    }

    public static function initializeInventory(Inventory $inventory)
    {
        $inventory->addInstrumental(
            "V95693",
            1499.95,
            new InstrumentalSpecsMandolinSpec(
                Builder::FENDER,
                "MandolinStratpcastor",
                Type::ELECTRIC,
                Wood::ALDER,
                Wood::ALDER,
                Style::F
            )
        );
        $inventory->addInstrumental(
            "V9512",
            1549.95,
            new GuitarSpec(
                Builder::FENDER,
                "Stratpcastor",
                Type::ELECTRIC,
                Wood::ALDER,
                Wood::ALDER,
                0
            )
        );
    }
}
