<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Variables</title>
</head>

<body>
    <?php

   
 echo "2^2 = " . pow(2, 2);
 echo "<br>";
 echo pow(2, -1);
 echo "<br>";
 //The pow function takes two parameters, the ase and the exponent in that order.

 echo rand();
 echo "<br>";
 echo rand(-5, 5);
 echo "<br>";
 // the rand function returns a interger randomly. You can set the up and lower limits, included.

 echo sqrt(9);
 echo "<br>";
 // returns the square root of that number.

 echo ceil(4.5);
 echo "<br>";
 // rounds up a float
 echo floor(4.5);
 echo "<br>";
 // rounds down a float
 echo round(4.5); // 5
 echo "<br>";
 echo round(4.4); //4
 // rounds to the nearest number.


	
    ?>

</body>

</html>