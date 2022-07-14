<?php

namespace App\ch_2;

class Remote
{
    private DogDoor $dogDoor;

    public function __constructor(DogDoor $dogDoor)
    {
        $this->dogDoor = $dogDoor;
    }

    public function pressButton():void
    {
        if ($this->dogDoor->isOpen()) {
            $this->dogDoor->close();
        } else {
            $this->dogDoor->open();
        }        
    }
}
