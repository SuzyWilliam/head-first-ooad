<?php

// big o == (n) power 2
// omega = (n)
function bubblesort($arr)
{
    $swap = -1;
    do {
        $swap = 0 ;
        for ($i=0; $i < count($arr); $i++)
        {
            if(isset($arr[$i+1]) && $arr[$i] > $arr[$i+1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i+1];
                $arr[$i+1] = $temp;
                $swap++;
            }
        }
    }while($swap != 0);

    return $arr;
}

var_dump([5, 1, 4, 2, 8]);