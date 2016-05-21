<?php
function findMissing1($arr1, $arr2){
    sort($arr1);
    sort($arr2);
    for($i = 0; $i < count($arr1); $i++){
        if($arr1[$i] != $arr2[$i]){
            return $arr1[$i];
        }
    }
    return end($arr1);
}

function findMissing2($arr1, $arr2){
    $d = array_count_values($arr2);
    foreach ($arr1 as $num){
        $ind = (string)$num;
        $value = (array_key_exists($ind, $d))?$d[$ind]:0;
        if($value == 0) return $num;
        else $d[$ind] -= 1;
    }
    return end($arr1);
}

function findMissing3($arr1, $arr2){
    $result = 0;
    # Perform an XOR between the numbers in the arrays
    foreach (array_merge($arr1, $arr2) as $num) {
        $result ^= $num;
    }

    return $result;
}

print findMissing1([5,5,7,7], [7,5,5])."\n"; //using sort
print findMissing2([5,5,7,7], [7,5,5])."\n"; // using associative array
print findMissing3([5,5,7,7], [7,5,5])."\n"; // using XOR

