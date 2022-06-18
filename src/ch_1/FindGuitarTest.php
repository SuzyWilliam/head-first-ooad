<?php

namespace App\ch_1;

class FindGuitarTest
{

    public function search()
    {
        $inventory = new Inventory();
        self::initializeInventory($inventory);

        $whatErinLikes = new Guitar("", 0, "fender", "Stratpcastpr", "electric", "Alder", "Alder");

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
            "guitar-01",
            1200,
            "fender",
            "Stratpcastpr",
            "electric",
            "Alder",
            "Alder"
        );
        $inventory->addGuitar(
            "guitar-02",
            1250,
            "fender",
            "Stratpcastpr",
            "electric",
            "Alder",
            "Alder"
        );
        $inventory->addGuitar(
            "guitar-03",
            1550,
            "fender",
            "Stratpcastpr",
            "electric",
            "Alder",
            "Alder"
        );
    }
}
