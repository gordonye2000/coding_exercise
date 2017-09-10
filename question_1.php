<?php

/*
Create a script to construct the following pattern, using a nested for loop.
*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*

Author: Gordon Ye
Email:  gordonye2000@gmail.com
Date:   08/09/2017
*/

for($a = 1; $a <= 10; $a++) {
    $c = $a < 6 ? $a : (11 - $a);
	for($b = 1; $b <= $c; $b++) {
		echo "*";
	}
	echo "\n";
}

?>