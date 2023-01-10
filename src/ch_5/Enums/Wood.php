<?php

namespace App\ch_5\Enums;

Enum Wood: string
{
    case INDIAN_ROSEWOOD = "Indian Rosewood";

    case BRAZILIAN_ROSEWOOD = "Brazlian Rosewood";

    case MAHOGANY = "Mohagany";

    case MAPLE = "Maple";

    case COCOBOLO = "Cocobolo";

    case CEDAR = "Cedar";

    case ADIRONDACK = "Adirondack";

    case ALDER = "Alder";

    case SIKTA = "sikta";

    // public function __toString()
    // {
    //     switch ($this) {
    //         case self::INDIAN_ROSEWOOD:
    //             return "Indian Rosewood";
    //         case self::BRAZILIAN_ROSEWOOD:
    //             return "Brazlian Rosewood";

    //         case self::MAHOGANY:
    //             return "Mohagany";

    //         case self::MAPLE:
    //             return "Maple";

    //         case self::COCOBOLO:
    //             return "Cocobolo";

    //         case self::CEDAR:
    //             return "Cedar";

    //         case self::ADIRONDACK:
    //             return "Adirondack";

    //         case self::ALDER:
    //             return "Alder";

    //         case self::SIKTA:
    //             return "sikta";
    //     }
    // }
}
