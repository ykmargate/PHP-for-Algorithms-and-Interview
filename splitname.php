<?php
/*Write a function named splitName which takes a user-provided string
and returns an array with keys 'firstname' and 'lastname'.
Middle name(s) should be included with the first name if present. Examples:
*/
function splitName($string){
    $arr = preg_split('/[^\w(.)]+/',$string);
    $l = count($arr);
    if($l == 1) return array('firstname' => $arr[0], 'lastname' => '' );
    if($l == 2) return array('firstname' => $arr[0], 'lastname' => $arr[1] );
    if($l == 3) return array('firstname' => $arr[0].' '.$arr[1], 'lastname' => $arr[2] );
    return [];
}

print_r(splitName('Josh Moore'));
// returns array('firstname' => 'Josh',     'lastname' => 'Moore')
print_r(splitName('Helen R. Ables'));
// returns array('firstname' => 'Helen R.', 'lastname' => 'Ables')
print_r(splitName('Shakira'));
// returns array('firstname' => 'Shakira',  'lastname' => '')