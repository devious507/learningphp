<?php

/*
 *
 * Quick little program to create a file with 100 integers 
 * 1 per line
 *
 */

for($i=0; $i < 100; $i++) {
	$int=rand(0,10000);
	print $int."\n";
}
?>
