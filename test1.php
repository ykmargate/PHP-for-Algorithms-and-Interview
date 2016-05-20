<?php
/**
 * Created by PhpStorm.
 * User: yevgen
 * Date: 4/15/16
 * Time: 2:45 PM
 */
function sum(){
    $args = func_get_args();
    $sum = 0;
    foreach($args as $arg){
        $sum = $sum + $arg;
    }
    return $sum;
}
//echo sum(1,2,3,4,5,6)."\n";
$arr = [1,2,3];
//echo call_user_func_array(sum, $arr)."\n";
unset($arr[1]);
print_r($arr);
$arr = [1,2,3];
array_splice($arr, 1, 1);
print_r($arr);
/*
for($i = 1; $i < 101; $i++){
    if($i%3 == 0){
        if($i%5 == 0){
            echo "FooBaz\n";
        }
        else {
            echo  "Foo\n";
            }
    }
    else {
        if($i%5 == 0){
            if($i%3 == 0){
                echo "FooBaz\n";
            }
            else {
                echo "Buz\n";
            }
        }
        else echo "$i\n";
    }
}
*/


/*

CREATE TABLE IF NOT EXISTS `languages` (
`id` int(11) NOT NULL,
  `country` varchar(20) NOT NULL,
  `language` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT DEFAULT CHARSET=utf8;

INSERT INTO `languages` (`id`, `country`, `language`) VALUES
(1, 'USA', 'English'),
(2, 'USA', 'German'),
(3, 'USA', 'Spanish'),
(4, 'UK', 'English'),
(5, 'Germany', 'English'),
(6, 'Germany', 'German');


*/
$sql = "SELECT AVG(a.count) FROM (SELECT country, COUNT(language) as count FROM `languages` GROUP BY country) a";


