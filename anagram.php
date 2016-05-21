<?php
function anagram1($s1, $s2){
    $s1 = strtolower(str_replace(' ', '', $s1));
    $s1 = str_split($s1);
    sort($s1);
    $s1 = implode('', $s1);
    $s2 = strtolower(str_replace(' ', '', $s2));
    $s2 = str_split($s2);
    sort($s2);
    $s2 = implode('', $s2);
    print "***$s1***$s2\n";
    if($s1 == $s2) return 'True';
        else return 'False';
}

$s1 = "Debit card";
$s2 = "Bad credit";
print anagram1($s1, $s2)."\n";
print anagram1($s1, $s2.'s')."\n";

function anagram2($s1,$s2){
    $s1 = strtolower(str_replace(' ', '', $s1));
    $s2 = strtolower(str_replace(' ', '', $s2));

    #Edge case check
    if(strlen($s1) != strlen($s2)) return 'False';

    $count = [];
    foreach(str_split($s1) as $letter){
    if(array_key_exists($letter, $count)) $count[$letter] += 1;
        else
            $count[$letter] = 1;
    }

    foreach(str_split($s2) as $letter){
        if(array_key_exists($letter, $count)) $count[$letter] -= 1;
        else
            $count[$letter] = 1;
    }

    foreach($count as $value) {
        if ($value != 0) return 'False';
    }

    return 'True';
}

$s1 = "Payment received";
$s2 = "Every cent paid me";
print anagram2($s1, $s2)."\n";
print anagram2($s1, $s2.'a')."\n";

