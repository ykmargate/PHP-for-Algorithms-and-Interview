<?php
$str = "one,two, three/four/ five";

$keywords = preg_split('/[^\w]+/',$str);
print_r($keywords);

for($i=count($keywords)-1;$i>=0;$i--){
    print $keywords[$i]." ";
}
print "\n";

foreach (array_reverse($keywords) as $item){
    print "$item ";
}
print "\n";
