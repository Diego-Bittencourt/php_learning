<?php 

$file = "example.txt";

$handle = fopen($file, 'w');
//the syntax above means open he file with the intntion to write it.
//this function is return something that we can store in a variable

fclose($handle);
//it closes the file openend before
//remember to check if the apache server has the right to write files.

//the file was created in the folder the php file is.

?>