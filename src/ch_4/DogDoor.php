<?php
namespace App\ch_2;

class DogDoor
{
    private bool $open;

    public function __construct()
    {
        $this->open = false;
    }
    
    public function isOpen()
    {
        return $this->open;
    }

    public function close()
    {
        echo "The dog door closes.";
        $this->open = false;
    }

    public function open()
    {
        echo "The dog door opens.";
        $this->open = true;
    }
}
