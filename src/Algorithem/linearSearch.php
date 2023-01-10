<?php

// big o == n
// omega == 1
function linearSearch($search_in, $target)
{
    for ($i=0; $i < count($search_in); $i++) {
        if($search_in[$i] === $target){
            return $i;
        }
    }
    return -1;
}