<?php

function merge(&$arr, $l, $m, $r){
    if(count($arr) == 1){
        return $arr;
    }


    $left_arr  = array_slice($arr, $l, $m-$l);
    $right_arr = array_slice($arr, $m, $r-$m);

    $i=0;
    $j=0;
    $k=$l;
    while($i < count($left_arr) && $j < count($right_arr)){
        if($left_arr[$i] < $right_arr[$j]){
            $arr[$k++] = $left_arr[$i++];
        }else{
            $arr[$k++] = $right_arr[$j++];
        }
    }

    return $arr;
}

function mergeSort(&$arr, $l, $r){
    $m = floor(count($arr)/2);
    mergeSort($arr, $l, $m);
    mergeSort($arr, $m+1 , $r);
    merge($arr, $l, $m, $r);
}
