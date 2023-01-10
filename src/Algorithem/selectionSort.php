<?php
// big o ==(n) power 2
// omega==(n)power2
function selectionSort($arr)
{
    for ($i=0; $i < count($arr) ; $i++) {
        $low = $i;
        for ($j=$i+1; $j < count($arr) ; $j++) {
            if($arr[$j] < $arr[$low]) {
                $low = $j;
            }
        }

        if($arr[$i] > $arr[$low]){
            $temp = $arr[$i];
            $arr[$i] =$arr[$low];
            $arr[$low] = $temp;
        }
    }
    return $arr;
}

var_dump([5, 1, 4, 2, 8]);