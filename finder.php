<?php
# Complexity is O(N^2) or O(NlogN) with sort
function finder($arr1, $arr2){
    sort($arr1);
    sort($arr2);
    for($i = 0; $i < count($arr1); $i++){
        if($arr1[$i] != $arr2[$i]){
            return $arr1[$i];
        }
    }
    return end($arr1);
}
function finder2($arr1, $arr2){
    $d = array_count_values($arr2);
    foreach ($arr1 as $num){
        $ind = (string)$num;
        $value = (array_key_exists($ind, $d))?$d[$ind]:0;
        if($value == 0) return $num;
        else $d[$ind] -= 1;
    }
    return end($arr1);
}

function finder3($arr1, $arr2){
    $result = 0;

    # Perform an XOR between the numbers in the arrays
    foreach (array_merge($arr1, $arr2) as $num) {
        $result ^= $num;
        //print $result."\n";
    }

    return $result;
}

$arr1 = [1,2,3,4,5,6,7];
$arr2 = [3,7,2,1,4,6];
print finder($arr1, $arr2)."\n";
print finder2($arr1, $arr2)."\n";
$arr1 = [5,5,7,7];
$arr2 = [7,5,5];
print finder3($arr1, $arr2)."\n";
print_r($arr1+$arr2);


