<?php

/*
Write a PHP function to convert Arabic Numbers to Roman Numerals. 

Author: Gordon Ye
Email:  gordonye2000@gmail.com
Date:   08/09/2017
*/

function ArabicToRoman($num){ 
    $n = intval($num); 
    $res = ''; 

    $romanNumber_array = array( 
        'M'  => 1000, 
        'CM' => 900, 
        'D'  => 500, 
        'CD' => 400, 
        'C'  => 100, 
        'XC' => 90, 
        'L'  => 50, 
        'XL' => 40, 
        'X'  => 10, 
        'IX' => 9, 
        'V'  => 5, 
        'IV' => 4, 
        'I'  => 1); 

    foreach ($romanNumber_array as $roman => $number){ 
        $matches = intval($n / $number); 
        $res .= str_repeat($roman, $matches); 
        $n = $n % $number; 
    } 

    return $res; 
} 
print_r(ArabicToRoman(101)."\n");
?>