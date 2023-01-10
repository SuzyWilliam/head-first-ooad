<?php
namespace App\ch_4;

class BarkRecognizer
{
    public function __construct(private DogDoor $door)
    {

    }

    public function recognize(Bark $bark):void
    {
        printf("BrakRecognizer: heard a `".$bark->getSound()."`<br/>");
        $allowedBarks = $this->door->getAllowedBarks();
        for ($i=0; $i < count($allowedBarks) ; $i++) {
            /** @var Bark $storedBark */
            $storedBark =  $allowedBarks[$i];
            if($storedBark->equals($bark)){
                $this->door->open();
                return;
            }
        }
        printf("This dog is not allowed.<br/>");
    }

}
