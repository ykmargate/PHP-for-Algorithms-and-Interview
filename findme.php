<?php
function findMe($string, $needle){
    /**
     * @param string $string
     * @param string $needle
     * @return int
     */
    $needleLength = strlen($needle);
    $stringLength = strlen($string);
    if($needleLength == '' || $stringLength == 0 || $stringLength < $needleLength){
        return -1;
    }
    for($i = 0; $i < ($stringLength - $needleLength); $i++){
        $count = 0;
        for($j = 0; $j < $needleLength; $j++){
            if($string[$i+$j] == $needle[$j]){
                $count++;
            }
        }
        if($count == $needleLength){
            return $i;
        }
    }
    return -1;
}

$string = "Hello world. I'm looking for a needle in a long string.";
$needle= "for";
echo 'strpos($string, $needle) = '.strpos($string, $needle)."\n";
echo 'findMe($string, $needle) = '.findMe($string, $needle)."\n";
echo 'findMe($string, "foo") = '.findMe($string, "foo").$newline;

