<?php

namespace App\ch_5_2;

use App\ch_5\Enums\Builder;
use App\ch_5\Enums\Style;
use App\ch_5\Enums\Type;
use App\ch_5\Enums\Wood;
use App\ch_5_2\Enums\InstrumentalType;

class FindInstrumentalTest
{

    public function search()
    {
        $inventory = new Inventory();
        self::initializeInventory($inventory);

        // $searchSpec = new GuitarSpec( Builder::FENDER, "Stratpcastor", Type::ELECTRIC, Wood::ALDER, Wood::ALDER, 0);
        $searchSpec = new InstrumentalSpec([
            'builder' => Builder::GIBSON,
            'backWood' => Wood::MAPLE
        ]);

        $instrumentals = $inventory->search($searchSpec);
        if ($instrumentals) {
            for ($instrumentals->rewind(); $instrumentals->valid(); $instrumentals->next()) {
                /**@var Instrumental $instrumental */
                $instrumental = $instrumentals->current();
                /**@var InstrumentalSpec $instrumentalSpec */
                $instrumentalSpec = $instrumental->getSpec();
                echo "Erin, you might like this ".$instrumentalSpec->getProperty('builder')->value ."
                " .$instrumentalSpec->getProperty('modal'). " ".
                $instrumentalSpec->getProperty('type')->value." {$instrumentalSpec->getProperty('instrumentalType')->value}:
                 ". $instrumentalSpec->getProperty('backWood')->value ."<br/> back and sides,
                <br/> ".$instrumentalSpec->getProperty('topWood')->value. " top.
                <br/> You can have it for only $ {$instrumental->getPrice()}!<br/> ----------<br/>";
            }
        } else {
            echo "Sorry, Erin, we have nothing for you.";
        }
    }

    public static function initializeInventory(Inventory $inventory)
    {
        $inventory->addInstrumental(
            "8900231",
            2945.95,
            new InstrumentalSpec([
                "instrumentalType" => InstrumentalType::BANJOS,
                "builder" => Builder::GIBSON,
                "modal" => "RB-3",
                "type" => Type::ACOUSTIC,
                "backWood" => Wood::MAPLE,
                "topWood" => Wood::MAPLE,
                "numStrings" => 5
            ])
        );
        $inventory->addInstrumental(
            "9019920",
            5495.99,
            new InstrumentalSpec([
                "instrumentalType" => InstrumentalType::MANDOLIN,
                "builder" => Builder::GIBSON,
                "modal" => "F5-G",
                "type" => Type::ACOUSTIC,
                "backWood" => Wood::MAPLE,
                "topWood" => Wood::MAPLE,
                "style" => Style::F
            ])
        );
        $inventory->addInstrumental(
            "11277",
            3999.95,
            new InstrumentalSpec([
                "instrumentalType" =>  InstrumentalType::GUITAR,
                "builder" => Builder::COLLINGS,
                "modal" => "CJ",
                "type" => Type::ACOUSTIC,
                "backWood" => Wood::INDIAN_ROSEWOOD,
                "topWood" => Wood::SIKTA,
                "numStrings" => 6
            ])
        );
        $inventory->addInstrumental(
            "V95693",
            1499.95,
            new InstrumentalSpec([
                "instrumentalType" =>  InstrumentalType::GUITAR,
                "builder" => Builder::FENDER,
                "modal" => "stratpcastor",
                "type" => Type::ELECTRIC,
                "backWood" => Wood::ALDER,
                "topWood" => Wood::ALDER,
                "numStrings" => 6
            ])
        );
        $inventory->addInstrumental(
            "122784",
            5495.95,
            new InstrumentalSpec([
                "instrumentalType" =>  InstrumentalType::GUITAR,
                "builder" => Builder::MARIN,
                "modal" => "D-18",
                "type" => Type::ACOUSTIC,
                "backWood" => Wood::MAHOGANY,
                "topWood" => Wood::ADIRONDACK,
                "numStrings" => 6
            ])
        );
        $inventory->addInstrumental(
            "V9512",
            1549.95,
            new InstrumentalSpec([
                "instrumentalType" =>  InstrumentalType::GUITAR,
                "builder" => Builder::FENDER,
                "modal" => "stratpcastor",
                "type" => Type::ELECTRIC,
                "backWood" => Wood::ALDER,
                "topWood" => Wood::ALDER,
                "numStrings" => 6
            ])
        );
        $inventory->addInstrumental(
            "82765501",
            1890.95,
            new InstrumentalSpec([
                "instrumentalType" =>  InstrumentalType::GUITAR,
                "builder" => Builder::GIBSON,
                "modal" => "SG`61 Reissue",
                "type" => Type::ELECTRIC,
                "backWood" => Wood::MAHOGANY,
                "topWood" => Wood::MAHOGANY,
                "numStrings" => 6
            ])
        );
        $inventory->addInstrumental(
            "70108276",
            2295.95,
            new InstrumentalSpec([
                "instrumentalType" =>  InstrumentalType::GUITAR,
                "builder" => Builder::GIBSON,
                "modal" => "Les Paul",
                "type" => Type::ELECTRIC,
                "backWood" => Wood::MAPLE,
                "topWood" => Wood::MAPLE,
                "numStrings" => 6
            ])
        );
    }
}
