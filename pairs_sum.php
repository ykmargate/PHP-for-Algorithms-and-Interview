<?php
function pair_sum1($arr, $k)
{
    if(count($arr) < 2) return;
    # Sets for tracking
    $seen = [];
    $output = [];
    foreach($arr as $num) {
        $target = $k - $num;
        if(!in_array($target, $seen)) $seen[] = $num;
        else $output[] = array(min($num, $target), max($num, $target));
    }
    #return len(output)
    return $output;
        }
foreach(pair_sum1([1, 3, 2, 2], 4) as $pair){
    print "(".$pair[0].", ".$pair[1].")\n";
}
//print_r(pair_sum1([1, 3, 2, 2], 4));