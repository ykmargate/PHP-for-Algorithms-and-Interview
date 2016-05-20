<?php
$str = "one,two, three/four/ five";
//$keywords = preg_replace("(\w+)", "*",$str);
//print($keywords);
//print($str);
$keywords = preg_split('/[^\w]+/',$str);
print_r($keywords);
for($i=count($keywords)-1;$i>=0;$i--){
    print $keywords[$i]."\n";
}
foreach (array_reverse($keywords) as $item){
    print "$item\n";
}
$keywords = preg_split('~\b\w+\b~',$str);
//print_r($keywords);
print 125%100;