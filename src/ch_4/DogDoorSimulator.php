<?php
namespace App\ch_4;

use React\EventLoop\Loop;

use function React\Async\async;
use function React\Async\await;

class DogDoorSimulator
{
    public function test()
    {
        $door = new DogDoor();
        $door->addAllowedBark("rowlf");
        $door->addAllowedBark("rooowlf");
        $door->addAllowedBark("rawlf");
        $door->addAllowedBark("woof");

        $recognizer = new BarkRecognizer($door);


        $remote = new Remote($door);
        // simulatethe hardware hearing a bark
        printf("Burce starts barking.<br/>");

        $recognizer->recognize(new Bark("rowlf"));

        printf("Burce has gone outside...<br/>");




        try {
            sleep(10);
        } catch (\Throwable $th) {
            //throw $th;
        }
        printf("Burce's all done...<br/>");
        printf("...but he's stuck outside!<br/>");

        //simulate the hardware hearing a bark(not Burce!)
        $smallDogBark = new Bark("yip");
        printf("A small dog starts barking.<br/>");
        $recognizer->recognize($smallDogBark);
        try {
            sleep(5);
        } catch (\Throwable $th) {
            //throw $th;
        }
        printf("Burce starts barking.<br/>");
        $recognizer->recognize(new Bark("rooowlf"));
        printf("Burce's back inside..<br/>");

    }
}
