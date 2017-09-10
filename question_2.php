<?php

/*
Write a function to sort an array

Author: Gordon Ye
Email:  gordonye2000@gmail.com
Date:   08/09/2017
*/


$array=array('6','3','8','5','1','7','2','9','10','4');

for($j = 0; $j < count($array); $j ++) {
    for($i = 0; $i < count($array)-1; $i ++){
        if($array[$i] > $array[$i+1]) {
            $temp = $array[$i+1];
            $array[$i+1]=$array[$i];
            $array[$i]=$temp;
        }       
    }
}

print_r($array);

?>