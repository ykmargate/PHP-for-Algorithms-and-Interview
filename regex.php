<?php
/**
 * Created by PhpStorm.
 * User: yevgen
 * Date: 4/16/16
 * Time: 10:24 PM
 */
$str = "one,two, three/four/ five";
$success = preg_match_all('~[\w]+~', $str, $match);
print_r($match);
$success = preg_match_all('/[[:alpha:]]+/', $str, $match);
print_r($match);
//print "first word {$match[0][0]}\n";
print implode(" ",array_reverse($match[0]))."\n";
