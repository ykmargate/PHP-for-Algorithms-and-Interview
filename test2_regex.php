<?php
$str = "one two three four";
$arr = explode(" ", $str);
$l = count($arr);
$newarr = array();
for($i = $l-1; $i > -1; $i--){
    //echo "$i ".$arr[$i]."\n";
    $newarr[] = $arr[$i];
}
$newstr = implode(" ", $newarr);
echo "$newstr\n";
echo "************************************************\n";
$str = "one,two, three/four/ five";
//$keywords = preg_replace("(\w+)", "*",$str);
//$keywords = preg_split('/[\w]+/',$str);
//$keywords = preg_split('~\b\w+\b~',$str);
//print_r($keywords);
/*
$success = preg_match_all('~(\w+)~', $str, $match);
print_r($match);
*/
print_r(str_word_count($str, 1));
/*
echo '$str = '.preg_replace('/[^A-Za-z]/', '*', $str)."\n";
echo '$str = '.preg_replace("([/\s,]+)", "*", $str)."\n";
$arr = explode("*", preg_replace("([/\s,]+)", "*", $str));
print_r($arr);
*/
$str = "one,two, three/four/ five";
//print_r(str_word_count($str,1));
//$keywords = preg_replace("(\w+)", "*",$str);
//$keywords = preg_split('/[\w]+/',$str);
//$keywords = preg_split('~\b\w+\b~',$str);
//print_r($keywords);

$success = preg_match_all('~(\w+)~', $str, $match);
//print_r($match);
print_r($match[1]);

// get host name from URL
preg_match('@^(?:http://)?([^/]+)@i',
    "http://www.php.net/index.html", $matches);
$host = $matches[1];
print_r($matches);
// get last two segments of host name
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "domain name is: {$matches[0]}\n";
print_r($matches);
$str = "one,two, three/four/ five";
$success = preg_match_all('~[\w]+~', $str, $match);
print_r($match);
//print_r($match[1]);
//the pattern