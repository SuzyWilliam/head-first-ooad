<?php
namespace App\ch_4;
use React\EventLoop\Loop;
use function React\Async\async;
use function React\Async\await;

class DogDoor
{
    public function __construct( private bool $open = false, private array $allowedBarks = [])
    {
    }
    /**
     * Check if the door is opened or not.
     *
     * @return boolean
     */
    public function isOpen(): bool
    {
        return $this->open;
    }

    /**
     * Closing the door.
     *
     * @return void
     */
    public function close()
    {
        printf("The dog door closes.<br/>");
        $this->open = false;
    }

    /**
     * Opening the door, and closed it automatically after 5sec.
     *
     * @return void
     */
    public function open()
    {
        printf("The dog door opens.<br/>");
        $this->open = true;
        try {
            Loop::addTimer(0.1, async(function(){
                sleep(5);
                $this->close();
            }));
        } catch (\Throwable $th) {
            var_dump($th->getMessage());
            die();
            //throw $th;
        }

    }

    /**
     * Register the allowed barks.
     *
     * @param string $sound
     * @return void
     */
    public function addAllowedBark(string $sound):void
    {
        $this->allowedBarks[] = new Bark($sound);
    }

    /**
     * Get all allowed barks.
     *
     * @return array
     */
    public function getAllowedBarks():array
    {
        return $this->allowedBarks;
    }
}
