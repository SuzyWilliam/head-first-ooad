<?php

function fac($n){
    //base case where the function stop under this case
    if($n==1)
        return 1;
    // recursive case
    return $n * fac($n-1);
}

// function collatz($n, $count=0){
//     if($n === 1){
//         return $count;
//     }elseif($n%2 == 0){
//         return collatz($n/2,++$count);
//     }else{
//         return collatz(3*$n + 1,++$count);
//     }
// }

function collatz($n){
    if($n === 1){
        return 0;
    }elseif($n%2 == 0){
        return 1 + collatz($n/2);
    }else{
        return 1 + collatz(3*$n + 1);
    }
}
