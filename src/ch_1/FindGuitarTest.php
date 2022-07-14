<?php

namespace App\ch_1;

use App\ch_1\Enums\Builder;
use App\ch_1\Enums\Type;
use App\ch_1\Enums\Wood;

class FindGuitarTest
{

    public function search()
    {
        $inventory = new Inventory();
        self::initializeInventory($inventory);

        $searchSpec = new GuitarSpec( Builder::FENDER, "Stratpcastor", Type::ELECTRIC, Wood::ALDER, Wood::ALDER, 0);

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
        $inventory->addGuitar(
            "V95693",
            1499.95,
            Builder::FENDER,
            "Stratpcastor",
            Type::ELECTRIC,
            Wood::ALDER,
            Wood::ALDER,
            0
        );
        $inventory->addGuitar(
            "V9512",
            1549.95,
            Builder::FENDER,
            "Stratpcastor",
            Type::ELECTRIC,
            Wood::ALDER,
            Wood::ALDER,
            0
        );
    }
}
