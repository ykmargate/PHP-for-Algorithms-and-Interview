<?php
/**
 * Created by PhpStorm.
 * User: yevgen
 * Date: 4/28/16
 * Time: 1:58 PM
 */

$a = 5;
$b = 6;
list($a, $b) = array($b, $a);
print $a . ", " . $b."\n";$a = 5;
$b = 6;
$a =  $a + $b;  // 5 + 6 = 11
$b = $a - $b;   // 11 - 6 = 5
$a = $a - $b;  // 11 - 5 = 6
print $a . ", " . $b."\n";

$a = 5;
$b = 6;
$a = $a ^ $b;
$b = $b ^ $a;
$a = $a ^ $b;
print $a . ", " . $b."\n";
