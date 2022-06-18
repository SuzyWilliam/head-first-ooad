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

        $whatErinLikes = new Guitar("", 0, Builder::FENDER, "Stratpcastor", Type::ELECTRIC, Wood::ALDER, Wood::ALDER);

        $guitars = $inventory->search($whatErinLikes);
        if ($guitars) {
            for ($guitars->rewind(); $guitars->valid(); $guitars->next()) {
                $guitar = $guitars->current();
                echo "Erin, you might like this {$guitar->getBuilder()} {$guitar->getModal()} {$guitar->getType()} guitar: {$guitar->getBackWood()}<br/> back and sides,<br/> {$guitar->getTopWood()} top.<br/> You can have it for only $ {$guitar->getPrice()}!<br/> ----------<br/>";
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
            Wood::ALDER
        );
        $inventory->addGuitar(
            "V9512",
            1549.95,
            Builder::FENDER,
            "Stratpcastor",
            Type::ELECTRIC,
            Wood::ALDER,
            Wood::ALDER
        );
    }
}
