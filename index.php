<?php
require_once __DIR__."/vendor/autoload.php";

// use App\ch_1\FindGuitarTest;
// $findGuitar = new FindGuitarTest();
// $findGuitar->search();

use App\ch_2\DogDoorSimulator;
$doorTest = new DogDoorSimulator();
$doorTest->test();
echo "Hello";