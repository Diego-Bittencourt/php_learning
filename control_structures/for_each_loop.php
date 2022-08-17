<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Variables</title>
</head>

<body>
    <?php

    $numbers = array(345, 464, 6784, 4676, 35, 6867, 456, 3453, 5);

    foreach($numbers as $number) {

        echo $number . "<br>";
    }


    // the second variable is assigned to each valor in an array.
    // the foreach only works in array in php.
    ?>

</body>

</html>