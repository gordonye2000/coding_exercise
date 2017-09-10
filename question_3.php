<?php

/*
Write a PHP script to find the first character that is different between two strings. 
String1 : 'football' String2 : 'footboll' Expected Result : First difference between two strings at position 5: "a" vs "o" 

Author: Gordon Ye
Email:  gordonye2000@gmail.com
Date:   08/09/2017
*/

function seek($s1, $s2) {
    $sa1 = str_split($s1);
    $sa2 = str_split($s2);
    $result = array_diff_assoc($sa1, $sa2);
    foreach($result as $k=>$v) {
        echo 'First difference between two strings at position ' .$k. ': "'.$sa1[$k].'" vs "'.$sa2[$k].'"';
        exit;
        
    }
}

$s1 = "football";
$s2 = "footboll";
seek($s1, $s2);
?>