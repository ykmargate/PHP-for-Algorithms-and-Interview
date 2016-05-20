<?php
/**
 * Created by PhpStorm.
 * User: yevgen
 * Date: 4/9/16
 * Time: 9:57 PM
 */

/**
 * @param $s
 * @param $nidle
 * @param int $ind
 * @return bool|int
 */
function findMe($string, $nidle, $ind = 0){
    $nidleLength = strlen($nidle);
    if($nidle == substr($string,0, $nidleLength)){
        return $ind;
    }
    else {
        if(strlen($string) < $nidleLength){
            return -1;
        }
        ++$ind;
        $string = substr($string, 1);
        return findMe($string, $nidle, $ind);
    }

}

$string = "Hello world. I'm looking for a nidle in a long string.";
$nidle = "for";
echo 'position=strpos($string, $nidle) '.strpos($string, $nidle)."\n";

echo 'position=findMe($string, $nidle) '.findMe($string, $nidle)."\n";
echo 'position=".findMe($string, "aaa") '.findMe($string, "aaa")."\n";
echo $string[6].$string[7].$string[8].$string[9].$string[10]."\n";