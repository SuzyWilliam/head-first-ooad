<?php
namespace App\ch_4;

class Bark
{
    public function __construct( private string $sound){}

    /**
     * return the bark sound
     *
     * @return string
     */
    public function getSound(): string
    {
        return $this->sound;
    }

    /**
     * validate similiarty of bark sound.
     *
     * @param Bark $bark
     * @return void
     */
    public function equals(Bark $bark)
    {
        // strcmp similar will return 0
        return strcmp($bark->getSound() , $this->sound) === 0;
    }
}
