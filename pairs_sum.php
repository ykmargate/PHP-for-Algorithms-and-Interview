<?php
function pair_sum($arr, $k){
    if(count($arr) < 2) return [];
    # Sets for tracking
    $seen = [];
    $output = [];
    foreach($arr as $num) {
        $target = $k - $num;
        if(!in_array($target, $seen)) $seen[] = $num;
        else $output[] = array(min($num, $target), max($num, $target));
    }
    return $output;
        }
foreach(pair_sum([2, 3, 1, 4, 6, 5], 5) as $pair){
    print "(".$pair[0].", ".$pair[1].")\n";
}
