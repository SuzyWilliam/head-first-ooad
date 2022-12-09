<?php
namespace App\ch_3;

class DogDoorSimulator
{
    public function test()
    {
        $dogDoor = new DogDoor();
        $remote = new Remote($dogDoor);
        echo "Fido barks to go outside..";
        $remote->pressButton();
        echo "\nFido has gone outside..";
        $remote->pressButton();
        echo "\nFido's all done..";
        $remote->pressButton();
        echo "\nFido's back inside..";
        $remote->pressButton();
    }
}
