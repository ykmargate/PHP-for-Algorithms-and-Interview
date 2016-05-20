<?php
function anagram($s1, $s2){
    $s1 = strtolower(str_replace(' ', '', $s1));
    $s1 = str_split($s1);
    sort($s1);
    $s1 = implode('', $s1);
    $s2 = strtolower(str_replace(' ', '', $s2));
    $s2 = str_split($s2);
    sort($s2);
    $s2 = implode('', $s2);
    if($s1 == $s2) return 'True';
        else return 'False';
}
print anagram('dog', 'god')."\n";
print anagram('dogs', 'god')."\n";


function anagram2($s1,$s2){
    $s1 = strtolower(str_replace(' ', '', $s1));
    $s2 = strtolower(str_replace(' ', '', $s2));

    #Edge case check
    if(strlen($s1) != strlen($s2)) return 'False';

    $count = [];
    foreach($s1 as $letter){
    if(array_key_exists($letter, $count)) $count[$letter] += 1;
        else
            $count[$letter] = 1;
    }

    foreach($s2 as $letter){
        if(array_key_exists($letter, $count)) $count[$letter] -= 1;
        else
            $count[$letter] = 1;
    }

    foreach($count as $value) {
        if ($value != 0) return 'False';

        return 'True';
    }
}

print anagram('clint eastwood', 'old west action')."\n";
print anagram('clint eastwood', 'olsd west action')."\n";

