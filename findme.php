<?php
/**
 * User: yevgen
 * Date: 4/9/16
 * Time: 9:57 PM
 */

/**
 * @param string $string
 * @param string $needle
 * @return int
 */
function findMe($string, $needle){
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

$newline = (php_sapi_name() == 'cli')?"\n":"<br>\n";
$string = "Hello world. I'm looking for a needlein a long string.";
$needle= "for";
print "<a href=\"index.php\"><h4>Back to Samples</h4></a>";
echo "<h4>Search for a specific text within a string</h4>";
echo '$string = "Hello world. I\'m looking for a needle in a long string."'.$newline;
echo '$needle= "for"'.$newline;
echo 'strpos($string, $needle) = '.strpos($string, $needle).$newline;
echo 'findMe($string, $needle) = '.findMe($string, $needle).$newline;
echo 'findMe($string, "foo") = '.findMe($string, "foo").$newline;

