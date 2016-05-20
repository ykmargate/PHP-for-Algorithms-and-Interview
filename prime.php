<?php
function is_prime_via_preg_expanded($number) {
    return !preg_match('/^1?$|^(11+?)\1+$/x', str_repeat('1', $number));
}

function isPrimeNumber($i)
{
    $n = 2;
    while ($n < $i) {
        if ($i%$n) {
            $n++;
            continue;
        }

        return false;
    }

    return true;
}
$i = 1;
$count = 1;
while (true){
    //if(is_prime_via_preg_expanded($i)) print "$i\n";
    if(isPrimeNumber($i)){
        //print "$i"." hex=".dechex($i)."\n";
        if(strpos(strtoupper(dechex($i)),"BEEF")) {
            print "i=$i count=$count hex=".dechex($i)."\n";
            if($count == 444){
                print "$i"." hex=".dechex($i)."\n";
                break;
            }
            else {
                $count++;
            }

        }
    }
    $i++;
}