<?php
namespace App\ch_2;

class DogDoor
{
    private bool $open;

    public function __constructor()
    {
        $this->open = false;
    }
    
    public function isOpen()
    {
        return $this->open;
    }

    public function close()
    {
        $this->open = false;
    }

    public function open()
    {
        $this->open = true;
    }
}
