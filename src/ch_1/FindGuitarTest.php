<?php

namespace App\ch_1;

class FindGuitarTest
{

    public function search()
    {
        $inventory = new Inventory();
        self::initializeInventory($inventory);

        $whatErinLikes = new Guitar("", 0, "fender", "Stratpcastor", "electric", "Alder", "Alder");

        $guitar = $inventory->search($whatErinLikes);
        if ($guitar) {
            echo "Erin, you might like this {$guitar->getBuilder()} {$guitar->getModal()} {$guitar->getType()} guitar: {$guitar->getBackWood()} back and sides,\n {$guitar->getTopWood()} top.\nYou can have it for only $ {$guitar->getPrice()}!";
        } else {
            echo "Sorry, Erin, we have nothing for you.";
        }
    }

    public static function initializeInventory(Inventory $inventory)
    {
        $inventory->addGuitar(
            "V95693",
            1499.95,
            "Fender",
            "Stratpcastor",
            "electric",
            "Alder",
            "Alder"
        );
    }
}
