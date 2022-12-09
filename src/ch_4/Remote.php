<?php

namespace App\ch_4;

class Remote
{
    private $door;

    public function __construct(DogDoor $dogDoor)
    {
        $this->door = $dogDoor;
    }

    public function pressButton():void
    {
        echo "Pressing the remote control button...";
        if ($this->door->isOpen()) {
            $this->door->close();
        } else {
            $this->door->open();
        }
    }
}
