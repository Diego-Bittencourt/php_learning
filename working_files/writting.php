<?php

$file = "example.txt";

if ($handle = fopen($file, "w")) {

    fwrite($handle, "I love PHP");
	//if anything is written in that file, it would be overwritten by the function
    
    fclose($handle);

} else {

    echo "The file couln't be written.";
}



?>