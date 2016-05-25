<?php

function myPi($accuracy){
    $pi = 4; $top = 4; $bot = 3; $minus = TRUE;

    for($i = 0; $i < $accuracy; $i++)
    {
        $pi += ( $minus ? -($top/$bot) : ($top/$bot) );
        $minus = ( $minus ? FALSE : TRUE);
        $bot += 2;
    }
    return $pi;
}

function myPi2($accuracy){
    $multiplier = 1;
    $divisor = 1;
    for($i = 1; $i <= $accuracy; $i++)
    {
        $divisor += 2;
        $multiplier = ($i%2 != 0)?($multiplier - 1/$divisor):($multiplier + 1/$divisor);
    }
    return 4*$multiplier;
}

for ($i=1;$i<5;$i++){
    print "Accuracy $i; Pi=".myPi($i)."\n";
    print "Accuracy $i; Pi=".myPi2($i)."\n";
}