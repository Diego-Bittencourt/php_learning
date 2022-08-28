<?php

$file = "example.txt";

    //to read a file:

    if ($handle = fopen($file, "r")) {
        //the second argument tells on what purpose you open the file



        $content = fread($handle, 10); //each bite equals a character - the second argument.
        echo $content;

        //there is another built in function that returns the file size:
        filesize($file);
    }




if ($handle = fopen($file, "w")) {





    fwrite($handle, "I love PHP");
	//if anything is written in that file, it would be overwritten by the function
    
    fclose($handle);

} else {

    echo "The file couln't be written.";
}





?>