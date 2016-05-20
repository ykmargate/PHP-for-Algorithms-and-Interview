<?php
/**
 * Created by PhpStorm.
 * User: yevgen
 * Date: 4/16/16
 * Time: 10:25 AM
 */
function fibo($want, $a = array()) {
    // Set first levels if not set.
    if(!isset($a[0]) || $a[0] != 0) $a[0] = 0;
    if(!isset($a[1]) || $a[1] != 1) $a[1] = 1;

    // count levels
    $t = count($a);

    // Add last two numbers - the Fibonacci ratio
    $a[] = $a[$t-1] + $a[$t-2];

    // See if we've reached the level we want
    if($want >= count($a)) return fibo($want, $a);
    return $a;
}

$f = fibo(10);
print_r($f);