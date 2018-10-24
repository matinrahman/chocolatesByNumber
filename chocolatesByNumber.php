<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/18/2018
 * Time: 4:44 PM
 */

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($N, $M) {
    // write your code in PHP7.0
    $eaten = array();
    $i=1;
    $counter = 0;
    if($M>$N)
        return 0;

    $max_loop = intval($N/$M);
    $lc = 0;
    while(!isset($eaten[$i])){
        $eaten[$i] = $i;
        $counter++;
        if(($i+$M)>$N){
            $i= $i+$M - $N;
        }else $i+=$M;
    }
    return $counter;
}

print solution(1000000000,10);
