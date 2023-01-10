<?php
// big o == log(n)
// omega == 1
function binarySearch($search_in, $target)
{
    $start = 0;
    $end = count($search_in) - 1;
    $middle = -1;

    do{
        $middle = floor(($start + $end) / 2);
        echo "starts: $start, ends: $end, middle: $middle \n";
        if($search_in[$middle] === $target){
            break;
        }elseif($search_in[$middle] < $target){
            $start = $middle + 1;
            $middle = -1 ;
        }else {
            $end = $middle - 1;
            $middle = -1;
        }
    } while($end >= $start);

    return $middle;
}